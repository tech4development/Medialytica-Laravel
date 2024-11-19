<?php

namespace App\Http\Controllers\SocialAdvertisers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FacebookProfile;
use App\Models\FacebookPage;
use App\Models\FacebookGroup;
use App\Models\TelegramChannel;
use App\Models\TelegramGroup;
use App\Models\TiktokPage;
use App\Models\TiktokGroup;
use App\Models\InstagramPage;
use App\Models\InstagramGroup;
use App\Models\WhatsappChannel;
use App\Models\WhatsappGroup;
use Illuminate\Support\Facades\Auth;

class SocialAdvertiserCartController extends Controller
{
    public function add(Request $request)
{
    // Capture the channel ID and type from the request
    $channelId = $request->publisher_id;  // Assuming this is the ID being sent from the form
    $channelType = 'facebook_page'; // Adjust based on your application logic

    // Find the social media channel
    $channel = $this->findSocialMediaChannel($channelId, $channelType);

    // Check if the channel was found
    if (!$channel) {
        return redirect()->back()->with('error', 'Social media channel not found.');
    }

    // Get the current cart from the session
    $cart = session()->get('cart', []);

    // Check if the channel is already in the cart
    if (!isset($cart[$channel->id])) {
        // Add channel to cart with the appropriate structure
        $cart[$channel->id] = [
            'id' => $channel->id,
            'name' => $channel->name,
            'url' => $channel->url,
            'followers_or_members' => $channel->followers_or_members,
            'influencer_category' => $channel->influencer_category,
            'influencer_type' => $channel->influencer_type,
            'price' => $channel->price,
        ];

        // Update the session cart
        session()->put('cart', $cart);

        // Redirect to the cart page with a success message
        return redirect()->route('socialcart.index')->with('success', 'Social media channel(s) added to cart successfully!');
    }

    // If the channel is already in the cart, redirect with a warning message
    return redirect()->back()->with('warning', 'This social media channel is already in your cart.');
}


    // Display cart items
    public function index()
    {
        $cartItems = session()->get('cart', []);
        $totalPrice = array_sum(array_column($cartItems, 'price'));
        $itemCount = count($cartItems);

        return view('socialadvertisers.cart.index', compact('cartItems', 'totalPrice', 'itemCount'));
    }

    // Remove an item from the cart by index
    public function remove($index)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$index])) {
            unset($cart[$index]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Item removed from cart successfully!');
    }

    // Method to handle checkout and place an order
    // public function checkout(Request $request)
    // {
    //     $cartItems = session()->get('cart', []);

    //     if (empty($cartItems)) {
    //         return redirect()->back()->with('error', 'Cart is empty.');
    //     }

    //     // Here you would typically create an order and persist the data in a database
    //     foreach ($cartItems as $item) {
    //         // Example: Add item to an order or checkout table
    //         // Order::create([...]);
    //     }

    //     session()->forget('cart'); // Clear the cart after placing the order

    //     return redirect()->route('orders.index')->with('success', 'Order placed successfully!');
    // }

    // A private method to find the channel by type and ID
    private function findSocialMediaChannel($channelId, $channelType)
    {
        // Dynamically find the correct social media item based on its type
        switch ($channelType) {
            case 'facebook_profile':
                return FacebookProfile::find($channelId);
            case 'facebook_page':
                return FacebookPage::find($channelId);
            case 'facebook_group':
                return FacebookGroup::find($channelId);
            case 'telegram_channel':
                return TelegramChannel::find($channelId);
            case 'telegram_group':
                return TelegramGroup::find($channelId);
            case 'tiktok_page':
                return TiktokPage::find($channelId);
            case 'tiktok_group':
                return TiktokGroup::find($channelId);
            case 'instagram_page':
                return InstagramPage::find($channelId);
            case 'instagram_group':
                return InstagramGroup::find($channelId);
            case 'whatsapp_channel':
                return WhatsappChannel::find($channelId);
            case 'whatsapp_group':
                return WhatsappGroup::find($channelId);
            default:
                return null; // If the channel type is unknown, return null
        }
    }


}
