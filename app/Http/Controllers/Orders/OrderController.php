<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Publisher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPlacedToAdmin;
use App\Mail\OrderPlacedToPublisher;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;




class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:advertiser');
    }

    // Show checkout page with session-based cart items
    public function index()
    {
        // Retrieve cart items from session
        $cart = Session::get('cart', []);

        // Calculate subtotal
        $subtotal = array_sum(array_column($cart, 'price'));

        // Total is equal to subtotal
        $total = $subtotal;

        return view('advertisers.checkout.index', compact('cart', 'subtotal', 'total'));
    }

    // Show checkout page with database-based cart items
    public function showCheckout()
    {
        // Fetch cart items from database
        $cartItems = Cart::with('publisher')->where('advertiser_id', auth()->id())->get();

        // Calculate subtotal and total
        $subtotal = $cartItems->sum(function($item) {
            return $item->price * $item->quantity;
        });

        // Total is equal to subtotal
        $total = $subtotal;

        return view('advertisers.checkout.index', compact('cartItems', 'subtotal', 'total'));
    }

    // Handle order placement from session-based cart
    public function placeOrder(Request $request)
    {
        // Retrieve cart items from session
        $cart = Session::get('cart', []);

        // Calculate subtotal and total
        $subtotal = array_sum(array_column($cart, 'price'));
        $total = $subtotal;

        // Create a new order
        $order = new Order();
        $order->order_number = $this->generateOrderNumber(); // Generates a unique order number
        $order->user_name = $request->input('user_name');
        $order->user_email = $request->input('user_email');
        $order->publisher_website_name = $cart[0]['publisher_name']; // Assuming consistent publisher details in cart
        $order->publisher_website_url = $cart[0]['publisher_url'];
        $order->price = $total; // Set total price equal to subtotal
        $order->save();

        // Fetch the publisher's email
        $publisher = Publisher::where('website_url', $order->publisher_website_url)->first();

        if ($publisher) {
            // Send emails to publisher and admin
            Mail::to($publisher->email)->send(new OrderPlacedToPublisher($order));
            Mail::to('info@techfordevelopment.com')->send(new OrderPlacedToAdmin($order)); // Replace with actual admin email
        }

        // Clear cart session
        Session::forget('cart');

        return redirect()->route('order.summary');
    }

    // Handle order placement from database-based cart
    public function placeOrderFromDB(Request $request)
    {
        $cartItems = Cart::where('advertiser_id', auth()->id())->get();

        foreach ($cartItems as $item) {
            $order = Order::create([
                'user_id' => auth()->id(),
                'publisher_id' => $item->publisher_id,
                'price' => $item->price,
                'quantity' => $item->quantity,
                'total' => $item->price * $item->quantity,
            ]);

            // Fetch publisher and send emails
            $publisher = Publisher::find($item->publisher_id);
            if ($publisher) {
                Mail::to($publisher->email)->send(new OrderPlacedToPublisher($order));
                Mail::to('info@techfordevelopment.com')->send(new OrderPlacedToAdmin($order));
            }
        }

        // Clear the cart after placing the order
        Cart::where('advertiser_id', auth()->id())->delete();

        return redirect()->route('order.summary')->with('success', 'Order placed successfully!');
    }

    // Generate a unique order number
    private function generateOrderNumber()
    {
        return 'ORD-' . strtoupper(uniqid());
    }
}
