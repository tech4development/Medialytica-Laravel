<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publisher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add($publisherId)
    {
        $publisher = Publisher::findOrFail($publisherId);

        // Assuming you have a cart session array
        $cart = Session::get('cart', []);
        $cart[] = $publisher;
        Session::put('cart', $cart);

        return redirect()->route('cart.index')->with('message', 'Item added to cart!');
    }

    public function index()
    {
        $cart = Session::get('cart', []);
        return view('advertisers.cart.index', compact('cart'));
    }
}
