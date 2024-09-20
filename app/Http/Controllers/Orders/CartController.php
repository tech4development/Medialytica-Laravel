<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Publisher;
use App\Models\RelatedWebsite; // Assuming you have this model
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request)
    {
        // Validate the input
        $request->validate([
            'publisher_id' => 'required|integer|exists:publishers,id',
        ]);

        $publisherId = $request->input('publisher_id');

        // Get the current cart from the session
        $cart = session()->get('cart', []);

        // Ensure cart is an array
        if (!is_array($cart)) {
            $cart = [];
        }

        // Add publisher to cart if not already present
        if (!array_key_exists($publisherId, $cart)) {
            // Fetch publisher details
            $publisher = Publisher::find($publisherId);

            if (!$publisher) {
                return redirect()->route('cart.index')->with('error', 'Publisher not found!');
            }

            // Add new publisher to cart
            $cart[$publisherId] = [
                'name' => $publisher->website_name, // Adjust as needed
                'price' => $publisher->price,
            ];

            session()->put('cart', $cart);

            return redirect()->route('cart.index')->with('success', 'Publisher added to cart successfully!');
        }

        return redirect()->route('cart.index')->with('info', 'Publisher is already in the cart.');
    }

    public function index()
    {
        $cart = session()->get('cart', []);

        // Ensure $cart is an array
        if (!is_array($cart)) {
            $cart = [];
        }

        // Fetch publisher details based on the cart item IDs
        $cartItemIds = array_keys($cart);
        $cartItems = Publisher::whereIn('id', $cartItemIds)->get();

        // Fetch related websites (assuming a function or a model for this purpose)
        $relatedWebsites = $this->getRelatedWebsites($cartItems);

        if ($cartItems->isEmpty()) {
            // Redirect to checkout page if cart is empty
            return redirect()->route('checkout.index');
        }

        return view('advertisers.cart.index', compact('cartItems', 'relatedWebsites', 'cart'));
    }

    private function getRelatedWebsites($cartItems)
    {
        // Initialize an empty collection for related websites
        $relatedWebsites = collect();

        foreach ($cartItems as $item) {
            // Ensure $item->niches is an array
            if (is_array($item->niches)) {
                foreach ($item->niches as $niche) {
                    // Find related websites by matching any niche in the JSON field
                    $relatedWebsites = $relatedWebsites->merge(
                        RelatedWebsite::whereJsonContains('niches', $niche)->get()
                    );
                }
            }
        }

        // Remove any duplicate websites by their ID
        return $relatedWebsites->unique('id');
    }
}
