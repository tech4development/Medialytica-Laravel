<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Publisher;
use App\Mail\OrderPlacedToAdmin;
use App\Mail\OrderPlacedToPublisher;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function index()
    {
        // Retrieve cart items from session
        $cart = Session::get('cart', []);

        // Calculate subtotal (same as total, since no additional costs)
        $subtotal = array_sum(array_column($cart, 'price'));

        // Total is equal to subtotal
        $total = $subtotal;

        // Pass data to view
        return view('advertisers.checkout.index', compact('cart', 'subtotal', 'total'));
    }

    public function placeOrder(Request $request)
    {
        // Handle order placement logic
        $cart = Session::get('cart', []);
        $subtotal = array_sum(array_column($cart, 'price')); // Calculate subtotal

        // Total is equal to subtotal
        $total = $subtotal;

        $order = new Order();
        $order->order_number = $this->generateOrderNumber(); // Implement this method
        $order->user_name = $request->input('user_name');
        $order->user_email = $request->input('user_email');
        $order->publisher_website_name = $cart[0]['publisher_name']; // Assuming consistent publisher details in cart
        $order->publisher_website_url = $cart[0]['publisher_url'];
        $order->price = $total; // Set total price equal to subtotal
        $order->save();

        // Fetch the publisher's email
        $publisher = Publisher::where('website_url', $order->publisher_website_url)->first();

        if ($publisher) {
            // Send email to publisher and admin
            Mail::to($publisher->email)->send(new OrderPlacedToPublisher($order));
            Mail::to('info@techfordevelopment.com')->send(new OrderPlacedToAdmin($order)); // Replace with the actual admin email
        }

        // Clear cart session
        Session::forget('cart');

        return redirect()->route('order.summary');
    }

    private function generateOrderNumber()
    {
        // Implement your order number generation logic here
        return 'ORD-' . strtoupper(uniqid());
    }

    public function showCheckout()
    {
        // Fetch cart items from database
        $cartItems = Cart::where('advertiser_id', auth()->id())->get(); // Fetch cart items for the current advertiser

        // Calculate subtotal and total
        $subtotal = $cartItems->sum(function($item) {
            return $item->price * $item->quantity;
        });

        // Total is equal to subtotal
        $total = $subtotal;

        return view('advertisers.checkout.index', [
            'cartItems' => $cartItems,
            'subtotal' => $subtotal,
            'total' => $total
        ]);
    }
}
