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
    $publisherIds = $request->publisher_ids ?? [$request->publisher_id];  // Handle both single and multiple additions

    foreach ($publisherIds as $publisherId) {
        $publisher = Publisher::find($publisherId);

        if (!$publisher) {
            return redirect()->back()->with('error', 'Publisher not found.');
        }

        $cart = session()->get('cart', []);

        // Check if the publisher is already in the cart
        if (!isset($cart[$publisher->id])) {
            // Add publisher to cart with the correct structure
            $cart[$publisher->id] = [
                'Id' => $publisher->id,  // Store the publisher ID
                'website_url' => $publisher->website_url,
                'website_name' => $publisher->website_name,
                'price' => $publisher->price,
                'niches' => $publisher->niches
            ];



            session()->put('cart', $cart); // Update the session cart
        }
    }

    return redirect()->route('cart.index')->with('success', 'Publisher(s) added to cart successfully!');
}


        public function index()
        {
             $cartItems = session()->get('cart', []);
             $totalPrice = array_sum(array_column($cartItems, 'price'));
             $itemCount = count($cartItems);

            return view('advertisers.cart.index', compact('cartItems', 'totalPrice', 'itemCount'));
            // dd($cartItems);

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

public function remove($index)
{
    $cart = session()->get('cart', []);

    if(isset($cart[$index])) {
        unset($cart[$index]);
        session()->put('cart', $cart);
    }

    return redirect()->back()->with('success', 'Item removed from cart successfully!');
}

}
