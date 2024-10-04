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
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceSent;
use App\Mail\InvoiceSentToAdvertiser;
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

        // Extract only the necessary fields into a new collection
        $orderItems = $cartItems->map(function ($item) {
            return [
                'website_url' => $item->website_url,
                'website_name' => $item->website_name,
                'price' => $item->price,
                'id' => $item->id, // Ensure you have the ID for removal
            ];
        });

        // Calculate the total price
        $totalPrice = $orderItems->sum('price');

        return view('advertisers.checkout.index', compact('orderItems', 'totalPrice'));
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

                // Retrieve the authenticated advertiser
                $advertiser = auth()->guard('advertiser')->user();

                // Get the existing cart from the session
                $cartItems = session()->get('cart', []);

                // If the cart is empty, redirect to the guest page instead of cart page
                if (empty($cartItems)) {
                    return redirect()->route('guest.page')->with('error', 'Your cart is empty.'); // Change route to guest page
                }

                // Group the cart items by website_url
                $groupedItems = [];
                foreach ($cartItems as $item) {
                    if (isset($item['website_name'], $item['website_url'], $item['price'])) {
                        $key = $item['website_url'];
                        if (!isset($groupedItems[$key])) {
                            $groupedItems[$key] = [
                                'website_name' => $item['website_name'],
                                'website_url' => $item['website_url'],
                                'price' => 0,
                            ];
                        }
                        $groupedItems[$key]['price'] += $item['price'];
                    }
                }

                // Create a new order with the total price of the grouped items
                $totalPrice = collect($groupedItems)->sum('price');
                $firstPublisher = reset($groupedItems);
                $publisherWebsiteUrl = implode(', ', array_keys($groupedItems));

                // Create the order
                $order = Order::create([
                    'advertiser_id' => $advertiser->id,
                    'publisher_website_name' => $firstPublisher['website_name'],
                    'publisher_website_url' => $publisherWebsiteUrl,
                    'price' => $totalPrice,
                    'payment_method' => $request->input('payment_method'),
                    'status' => 'placed',
                ]);

                // Create order items
                foreach ($groupedItems as $item) {
                    $order->items()->create([
                        'website_name' => $item['website_name'],
                        'website_url' => $item['website_url'],
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

                // Send the invoice to the advertiser's email
               // Mail::to($advertiser->email)->send(new InvoiceSentToAdvertiser($invoice));

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
        return redirect()->route('cart.index')->with('error', 'Order not found.');
    }

    // Fetch all order items related to this order (if applicable)
    $orderItems = $order->items; // Assuming the Order model has a relationship with items
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
            'price' => $totalPrice,  // Ensure this is correctly calculated
            'isSent' => false,
            'status' => 'generated',
            'payment_method' => 'offline',
            'isPaymentReceived' => false,
            'user_name' => $advertiser->name,
            'user_email' => $advertiser->email,
            'publisher_website_name' => $order->publisher_website_name,
            'publisher_website_url' => $order->publisher_website_url,
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
