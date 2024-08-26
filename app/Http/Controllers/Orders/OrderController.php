<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Publisher;
use App\Models\Advertiser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Generate a unique order number.
     *
     * @return string
     */
    private function generateOrderNumber()
    {
        // Generate a unique random string
        $randomString = strtoupper(Str::random(5)); // Generate a 5-character random string
        return 'ORD-' . $randomString;
    }

    /**
     * Show the checkout page with cart items and totals.
     *
     * @return \Illuminate\View\View
     */
    public function checkout()
    {
        // Get the current advertiser's cart items
        $advertiserId = Auth::guard('advertiser')->id();

        // Fetch cart items for the advertiser
        $cartItems = Cart::where('advertiser_id', $advertiserId)->get();

        // Fetch all publishers if needed elsewhere
        $publishers = Publisher::all();

        // Calculate subtotal and total based on cart items
        $subtotal = $cartItems->sum('price');
        $total = $subtotal; // Add any additional calculations if needed

        return view('advertisers.checkout.index', compact('cartItems', 'publishers', 'subtotal', 'total'));
    }

    /**
     * Place an order based on cart items.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function placeOrder(Request $request)
    {
        // Validate the request
        $request->validate([
            'price' => 'required|numeric',
        ]);

        // Get the current advertiser's ID
        $advertiserId = Auth::guard('advertiser')->id();
        $advertiser = Advertiser::findOrFail($advertiserId);

        // Retrieve cart items for the advertiser
        $cartItems = Cart::where('advertiser_id', $advertiserId)->get();

        // Initialize an array to hold orders
        $orders = [];

        foreach ($cartItems as $item) {
            $publisher = Publisher::findOrFail($item->publisher_id);

            // Generate a unique order number
            $orderNumber = $this->generateOrderNumber();

            // Create the order
            $order = Order::create([
                'order_number' => $orderNumber,
                'user_name' => $advertiser->name, // Assuming 'name' field exists in Advertiser model
                'user_email' => $advertiser->email, // Assuming 'email' field exists in Advertiser model
                'publisher_website_name' => $publisher->website_name, // Assuming 'website_name' field exists in Publisher model
                'publisher_website_url' => $publisher->website_url, // Assuming 'website_url' field exists in Publisher model
                'price' => $item->price,
            ]);

            $orders[] = $order;
        }

        // Clear the cart items after placing the order
        Cart::where('advertiser_id', $advertiserId)->delete();

        // Optionally: Send notification, log activity, etc.

        return response()->json([
            'message' => 'Order(s) placed successfully',
            'orders' => $orders
        ], 201);
    }
}
