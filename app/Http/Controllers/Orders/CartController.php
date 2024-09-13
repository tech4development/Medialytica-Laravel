<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Publisher;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:advertiser', 'check.advertiser']);
    }

    /**
     * Show the items in the cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // Get the current advertiser's cart items from the session
        $cartItems = session()->get('cart', []);

        // dd($cartItems);

        // Calculate subtotal and total based on cart items
        $subtotal = collect($cartItems)->sum('price');
        $total = $subtotal; // Add any additional calculations if needed

        // Fetch all publishers (or filter as needed)
        $publisherIds = collect($cartItems)->pluck('publisher_id'); // Extract publisher IDs from cart items
        $publishers = Publisher::whereIn('id', $publisherIds)->get(); // Fetch publishers from DB

        return view('advertisers.cart.index', compact('cartItems', 'subtotal', 'total', 'publishers'));
    }

    /**
     * Add an item to the cart.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'publisher_id' => 'required|exists:publishers,id',
            'website_url' => 'required|string',
            'price' => 'required|numeric',
            'website_name' => 'required|string',
        ]);

        // Dump and die to inspect the validated data
        dd($validated);

        // Retrieve cart from session or create a new one if it doesn't exist
        $cart = session()->get('cart', []);

        // Check if the publisher is already in the cart
        $publisherExists = collect($cart)->firstWhere('publisher_id', $request->publisher_id);

        if (!$publisherExists) {
            // Add publisher details to the cart
            $cart[] = [
                'publisher_id' => $request->publisher_id,
                'website_url' => $request->website_url,
                'price' => $request->price,
                'website_name' => $request->website_name,
            ];

            // Update session cart
            session()->put('cart', $cart);

            // Optionally, you can dump and die here too
            dd($cart);

            // Return success message
            return redirect()->back()->with('success', 'Item added to cart successfully.');
        }

        // If the item is already in the cart, notify the user
        return redirect()->back()->with('error', 'Item already in the cart.');
    }




    /**
     * Remove an item from the cart.
     *
     * @param int $publisher_id
     * @return \Illuminate\Http\Response
     */
    // public function remove($publisher_id)
    // {
    //     // Get current cart items from the session
    //     $cartItems = session()->get('cart', []);

    //     // Filter out the item with the given publisher_id
    //     $cartItems = array_filter($cartItems, function ($item) use ($publisher_id) {
    //         return $item['publisher_id'] != $publisher_id;
    //     });

    //     // Update the session with the modified cart
    //     session()->put('cart', $cartItems);

    //     // Redirect with success message
    //     return redirect()->route('cart.show')->with('success', 'Item removed from cart.');
    // }

    /**
     * Clear the cart.
     *
     * @return \Illuminate\Http\Response
     */
    // public function clear()
    // {
    //     // Clear the cart session
    //     session()->forget('cart');

    //     // Redirect with success message
    //     return redirect()->route('cart.show')->with('success', 'Cart cleared.');
    // }
}

