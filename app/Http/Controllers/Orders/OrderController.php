<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Publisher;
use App\Models\Advertiser;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class OrderController extends Controller
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

        // Ensure $cart is an array and extract only the publisher IDs
        $cartItemIds = array_keys($cart);

        if (empty($cartItemIds)) {
            return redirect()->route('cart.index')->with('message', 'Your cart is empty.');
        }

        // Fetch publisher details based on the cart item IDs
        $cartItems = Publisher::whereIn('id', $cartItemIds)->get();

        // Calculate the total price
        $totalPrice = $cartItems->sum('price');

        return view('advertisers.checkout.index', compact('cartItems', 'totalPrice'));
    }



            /**
         * Place an order based on cart items.
         *
         * @param Request $request
         * @return \Illuminate\Http\Response
         */
            public function placeOrder(Request $request)
            {
                // Ensure the user is authenticated as an advertiser
                if (!auth()->guard('advertiser')->check()) {
                    return redirect()->route('login')->with('error', 'You must be logged in as an advertiser to place an order.');
                }

                $advertiser = auth()->guard('advertiser')->user();
                $cartItems = session()->get('cart', []);

                // Check if the cart is empty
                if (empty($cartItems)) {
                    return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
                }

                // Assuming all items in the cart are from the same publisher

                $cartItems = session()->get('cart', []); // Fetch cart items from session

                // Check if the cart is an array and not empty
                if (is_array($cartItems) && !empty($cartItems)) {
                    $firstItem = reset($cartItems); // Get the first item from the cart

                    // Check if the first item is an array and has required keys
                    if (is_array($firstItem) && isset($firstItem['website_name'], $firstItem['website_url'])) {
                        $publisher = Publisher::where('website_name', $firstItem['website_name'])
                            ->where('website_url', $firstItem['website_url'])
                            ->first();
                    } else {
                        // Handle case where the cart structure is invalid
                        return redirect()->back()->with('error', 'Invalid cart structure.');
                    }
                } else {
                    // Handle empty cart case
                    return redirect()->back()->with('error', 'Cart is empty.');
                }


                if (!$publisher) {
                    return redirect()->route('cart.index')->with('error', 'Publisher not found.');
                }

                // Create the order
                $order = Order::create([
                    'advertiser_id' => $advertiser->id,
                    'publisher_website_name' => $publisher->website_name,
                    'publisher_website_url' => $publisher->website_url,
                    'price' => collect($cartItems)->sum('price'), // Summing the total price of cart items
                    'payment_method' => $request->input('payment_method', 'offline'), // Default to offline
                    'status' => 'pending',
                ]);

                // Loop through each cart item and add them as order items
                foreach ($cartItems as $item) {
                    $order->items()->create([
                        'website_name' => $item['website_name'],
                        'website_url' => $item['website_url'],
                        'price' => $item['price'],
                    ]);
                }

                // Clear the cart after placing the order
                session()->forget('cart');

                // Handle payment method
                if ($request->payment_method == 'paypal') {
                    return redirect()->route('paypal', $order->id); // Redirect to PayPal if chosen
                } elseif ($request->payment_method == 'offline') {
                    return redirect()->route('thankyou', ['orderId' => $order->id])
                    ->with('toast_success', 'Order placed successfully!');
                }

                return redirect()->back()->with('error', 'Invalid payment method selected.');
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
            return redirect()->route('cart.index')->with('error', 'Order not found.');
        }

        // Fetch all order items related to this order (if applicable)
        $orderItems = Order::where('advertiser_id', $order->advertiser_id)->get();
        $totalPrice = $orderItems->sum('price');

        return view('advertisers.ordersummary.thankyou', compact('orderItems', 'totalPrice'));
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
            'amount' => $order->price,
            'is_sent' => false,
        ]);

        // Generate the PDF invoice
        $pdf = PDF::loadView('advertisers.invoice.index', compact('order', 'invoice', 'cartItems'));

        // Display the invoice page or stream PDF for download/printing
        return view('advertisers.invoice.index', [
            'order' => $order,
            'invoice' => $invoice,
            'pdf' => $pdf->stream(), // Stream the PDF for download or printing
        ]);
    }

    public function track()
    {
        return view('order.track');
    }

    public function trackOrder(Request $request)
    {
        $request->validate([
            'order_number' => 'required|string',
        ]);

        $order = Order::where('order_number', $request->order_number)->first();

        if ($order) {
            return response()->json([
                'status' => $order->status,
            ]);
        } else {
            return response()->json([
                'status' => 'Order not found',
            ], 404);
        }
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:placed,pending_approval,approved,published,draft,live',
        ]);

        $order = Order::find($id);

        if ($order) {
            $order->update(['status' => $request->status]);
            return response()->json(['message' => 'Order status updated']);
        } else {
            return response()->json(['message' => 'Order not found'], 404);
        }
    }
}
