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

class OrderController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth'); // Ensure only authenticated users can access this controller
    // }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'publisher_id' => 'required|exists:publishers,id',
        ]);

        $user = Auth::user();
        $publisher = Publisher::find($request->publisher_id);

        // Calculate the highest price among the available price fields
        $price = max([
            $publisher->normal_post_cost,
            $publisher->betting_casino_post_cost,
            $publisher->crypto_forex_post_cost,
            $publisher->cbd_post_cost,
            $publisher->banner_cost,
        ]);

        // Generate a unique order number
        $orderNumber = 'ORD-' . strtoupper(uniqid());

        // Prepare order data
        $orderData = [
            'order_number' => $orderNumber,
            'user_name' => $user->name,
            'user_email' => $user->email,
            'publisher_website_name' => $publisher->website_name,
            'publisher_website_url' => $publisher->website_url,
            'price' => $price,
        ];

        // Create the order
        $order = Order::create($orderData);


        // Send email to admin
        Mail::to('info@techfordevelopment.com')->send(new OrderPlacedToAdmin($order));

        // Send email to publisher
        Mail::to($publisher->email)->send(new OrderPlacedToPublisher($order));

        return response()->json(['success' => true]);
    }
}
