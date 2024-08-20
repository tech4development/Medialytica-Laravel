<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publisher;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // Add item to cart using session
    public function addToCart(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'publisher_id' => 'required|exists:publishers,id',
            'website_url' => 'required|string',
            'price' => 'required|numeric',
        ]);

        // Get the cart from the session, or create an empty one if it doesn't exist
        $cart = session()->get('cart', []);

        // Check if the item is already in the cart
        $publisherId = $validated['publisher_id'];
        if (isset($cart[$publisherId])) {
            // Increment the quantity if the item already exists
            $cart[$publisherId]['quantity'] += 1;
        } else {
            // Add a new item to the cart
            $cart[$publisherId] = [
                'publisher_id' => $publisherId,
                'website_url' => $validated['website_url'],
                'price' => $validated['price'],
                'quantity' => 1, // Default quantity
            ];
        }

        // Store the updated cart in the session
        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Item added to cart successfully!');
    }

    // Display the cart items
    public function index()
    {
        $advertiserId = Auth::guard('advertiser')->id(); // Get the advertiser ID
        $publishers = Publisher::all(); // Fetch all publishers

        // Fetch cart items for the authenticated advertiser or return an empty collection if null
        $cartItems = Cart::where('advertiser_id', $advertiserId)->get() ?? collect([]);

        // Calculate subtotal and total
        $subtotal = $cartItems->sum(function($item) {
            return $item->price * $item->quantity;
        });
        $total = $subtotal; // Adjust this if you have taxes or other fees

        // Return the view with the data
        return view('advertisers.cart.index', compact('publishers', 'cartItems', 'subtotal', 'total'));
    }


    // Remove an item from the cart
    public function remove($publisherId)
    {
        // Retrieve the cart from the session
        $cart = session()->get('cart', []);

        // Remove the item from the cart
        if (isset($cart[$publisherId])) {
            unset($cart[$publisherId]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Item removed from cart successfully!');
    }
}
