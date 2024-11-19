<?php

namespace App\Http\Controllers\SocialAdvertisers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class SocialAdvertiserOrderController extends Controller
{
     /**
     * Show the checkout page with cart items and totals.
     *
     * @return \Illuminate\View\View
     */
    public function checkout()
    {
        // Fetch the cart from the session
        $cart = session()->get('cart', []);

        // Ensure $cart is an array and extract only the channel IDs
        $cartItemIds = array_keys($cart);

        if (empty($cartItemIds)) {
            return redirect()->route('socialcart.index')->with('message', 'Your cart is empty.');
        }

        // Extract only the necessary fields into a new collection
        $orderItems = collect($cart)->map(function ($item) {
            return [
                'name' => $item['name'],
                'url' => $item['url'],
                'price' => $item['price'],
                'id' => $item['id'], // Ensure you have the ID for removal
            ];
        });

        // Calculate the total price
        $totalPrice = $orderItems->sum('price');

        return view('socialadvertisers.checkout.index', compact('orderItems', 'totalPrice'));
    }

    /**
     * Place an order based on cart items.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function placeOrder(Request $request)
    {
        // Ensure the user is authenticated as a social advertiser
        if (!auth()->guard('social_advertiser')->check()) {
            return redirect()->route('login')->with('error', 'You must be logged in as a social advertiser to place an order.');
        }

        // Retrieve the authenticated advertiser
        $advertiser = auth()->guard('social_advertiser')->user();

        // Get the existing cart from the session
        $cartItems = session()->get('cart', []);

        // If the cart is empty, redirect to the cart page
        if (empty($cartItems)) {
            return redirect()->route('socialcart.index')->with('error', 'Your cart is empty.');
        }

        // Group the cart items by channel URL
        $groupedItems = [];
        foreach ($cartItems as $item) {
            $key = $item['url'];
            if (!isset($groupedItems[$key])) {
                $groupedItems[$key] = [
                    'name' => $item['name'],
                    'url' => $item['url'],
                    'price' => 0,
                ];
            }
            $groupedItems[$key]['price'] += $item['price'];
        }

        // Create a new order with the total price of the grouped items
        $totalPrice = collect($groupedItems)->sum('price');
        $firstItem = reset($groupedItems);
        $publisherUrls = implode(', ', array_keys($groupedItems));

        // Create the order
        $order = Order::create([
            'advertiser_id' => $advertiser->id,
            'publisher_website_name' => $firstItem['name'],
            'publisher_website_url' => $publisherUrls,
            'price' => $totalPrice,
            'payment_method' => $request->input('payment_method'),
            'status' => 'placed',
        ]);

        // Create order items
        foreach ($groupedItems as $item) {
            $order->items()->create([
                'website_name' => $item['name'],
                'website_url' => $item['url'],
                'price' => $item['price'],
            ]);
        }

        // Clear the cart
        session()->forget('cart');

        // Create an invoice
        $invoice = Invoice::create([
            'order_id' => $order->id,
            'price' => $totalPrice,
            'isSent' => false,
            'status' => 'generated',
            'payment_method' => 'offline',
            'isPaymentReceived' => false,
            'user_name' => $advertiser->name,
            'user_email' => $advertiser->email,
            'publisher_website_name' => $order->publisher_website_name,
            'publisher_website_url' => $order->publisher_website_url,
        ]);

        // Redirect to the invoice view
        return redirect()->route('invoice.show', $invoice->id)
            ->with('success', 'Invoice created successfully!')
            ->header('Refresh', '60;url='.route('thank_you', ['orderId' => $order->id]));  // Redirect to thank you page after 1 minute
    }

    /**
     * Thank You page after successful order placement.
     *
     * @param int $orderId
     * @return \Illuminate\Http\Response
     */
    public function thankYou($orderId)
    {
        $order = Order::find($orderId);

        if (!$order) {
            return redirect()->route('socialcart.index')->with('error', 'Order not found.');
        }

        // Fetch all order items related to this order
        $orderItems = $order->items;
        $totalPrice = $orderItems->sum('price');

        return view('socialadvertisers.ordersummary.thankyou', compact('orderItems', 'totalPrice'));
    }

    /**
     * Generate an invoice for offline payments.
     *
     * @param Order $order
     * @param array $cartItems
     * @return \Illuminate\Http\Response
     */
    protected function generateInvoice($order, $cartItems)
    {
        // Create an invoice
        $invoice = Invoice::create([
            'order_id' => $order->id,
            'price' => array_sum(array_column($cartItems, 'price')),
            'isSent' => false,
            'status' => 'generated',
            'payment_method' => 'offline',
            'isPaymentReceived' => false,
            'user_name' => $order->advertiser->name,
            'user_email' => $order->advertiser->email,
            'publisher_website_name' => $order->publisher_website_name,
            'publisher_website_url' => $order->publisher_website_url,
        ]);

        // Generate the PDF invoice
        $pdf = PDF::loadView('socialadvertisers.invoice.index', compact('order', 'invoice', 'cartItems'));

        // Display the invoice page or stream PDF for download/printing
        return view('socialadvertisers.invoice.index', [
            'order' => $order,
            'invoice' => $invoice,
            'pdf' => $pdf->stream(), // Stream the PDF for download or printing
        ]);
    }
}
