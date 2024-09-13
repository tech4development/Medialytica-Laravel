<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Publisher;
use App\Models\Advertiser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Show the checkout page with cart items and totals.
     *
     * @return \Illuminate\View\View
     */
    public function checkout()
{
    $advertiserId = Auth::guard('advertiser')->id();

    // Fetch cart items for the advertiser
    $cartItems = Cart::where('advertiser_id', $advertiserId)->get();

    if ($cartItems->isEmpty()) {
        return redirect()->route('cart.show')->withErrors(['error' => 'Your cart is empty.']);
    }

    // Fetch all publishers if needed elsewhere
    $publishers = Publisher::all();

    // Calculate subtotal and total based on cart items
    $subtotal = $cartItems->sum('price');
    $total = $subtotal; // Add any additional calculations if needed

    return view('advertisers.checkout.index', compact('cartItems', 'publishers', 'subtotal', 'total'));
}


    /**
     * Place an order based on cart items.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function placeOrder(Request $request)
    {
        $validatedData = $request->validate([
            'paymentMethod' => 'required|string',
        ]);

        $user = auth()->user();
        $publishers = session()->get('cart', []); // Ensure this matches how you store your cart

        if (empty($publishers)) {
            return back()->withErrors(['error' => 'Your cart is empty.']);
        }

        $totalPrice = array_sum(array_column($publishers, 'price'));

        $order = new Order();
        $order->user_id = $user->id;
        $order->payment_method = $validatedData['paymentMethod'];
        $order->total_price = $totalPrice;
        $order->save();

        foreach ($publishers as $publisher) {
            $order->items()->create([
                'website_name' => $publisher['website_name'],
                'website_url' => $publisher['website_url'],
                'price' => $publisher['price'],
            ]);
        }

        session()->forget('cart');

        if ($validatedData['paymentMethod'] === 'paypal') {
            return redirect()->to('https://www.paypal.com/checkout');
        }

        return redirect()->route('guest.page')->with('success', 'Order placed successfully!');
    }

    public function track()
    {
        return view('order.track');
    }

    public function trackOrder(Request $request)
    {
        $request->validate([
            'order_number' => 'required|string',
        ]);

        $order = Order::where('order_number', $request->order_number)->first();

        if ($order) {
            return response()->json([
                'status' => $order->status,
            ]);
        } else {
            return response()->json([
                'status' => 'Order not found',
            ], 404);
        }
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:placed,pending_approval,approved,published,draft,live',
        ]);

        $order = Order::find($id);

        if ($order) {
            $order->update(['status' => $request->status]);
            return response()->json(['message' => 'Order status updated']);
        } else {
            return response()->json(['message' => 'Order not found'], 404);
        }
    }

}
