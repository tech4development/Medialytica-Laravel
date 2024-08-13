<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('checkout.index', compact('cart'));
    }

    public function placeOrder()
    {
        // Handle order placement logic

        // Clear cart session
        Session::forget('cart');

        return redirect()->route('order.summary');
    }
}
