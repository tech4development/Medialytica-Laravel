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
        // Get the current advertiser's cart items
        $advertiserId = Auth::guard('advertiser')->id();

        // Fetch all publishers or relevant cart items
        $cartItems = Cart::where('advertiser_id', $advertiserId)->get();
        $publishers = Publisher::all(); // Fetch all publishers if needed elsewhere

        // Calculate subtotal and total based on cart items
        $subtotal = $cartItems->sum('price');
        $total = $subtotal; // Add any additional calculations if needed

        return view('advertisers.cart.index', compact('cartItems', 'publishers', 'subtotal', 'total'));
    }

    /**
     * Add an item to the cart.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */




    public function add(Request $request)
    {
        // Validate the request
        $request->validate([
            'publisher_id' => 'required|exists:publishers,id',
            'website_url' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'website_name' => 'required|string|max:255',
        ]);

        // Get the current advertiser ID
        $advertiserId = Auth::guard('advertiser')->id();

        // Ensure the advertiser ID is valid
        if (!$advertiserId) {
            return redirect()->back()->withErrors(['error' => 'Advertiser not authenticated.']);
        }

        // Check if the item is already in the cart
        $cartItem = Cart::where([
            ['advertiser_id', '=', $advertiserId],
            ['publisher_id', '=', $request->publisher_id],
        ])->first();

        if ($cartItem) {
            // Update the existing cart item
            $cartItem->update([
                'website_url' => $request->website_url,
                'price' => $request->price,
                'website_name' => $request->website_name,
            ]);
        } else {
            // Create a new cart item
            Cart::create([
                'advertiser_id' => $advertiserId,
                'publisher_id' => $request->publisher_id,
                'website_url' => $request->website_url,
                'price' => $request->price,
                'website_name' => $request->website_name,
            ]);
        }

        // Redirect with success message
        return redirect()->route('cart.show')->with('success', 'Website URL added to cart.');
    }





}
