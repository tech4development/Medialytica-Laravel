<?php

namespace App\Http\Controllers\Advertisers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertiser;
use App\Models\Publisher;
use App\Models\Cart;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\Order;


class AdvertiserAuthController extends Controller
{
    // Show the registration form
    public function showRegisterForm()
    {
        $countries = [
            "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia",
            "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium",
            "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei",
            "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic",
            "Chad", "Chile", "China", "Colombia", "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica", "Croatia",
            "Cuba", "Cyprus", "Czechia (Czech Republic)", "Denmark", "Djibouti", "Dominica", "Dominican Republic",
            "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini (fmr. Swaziland)",
            "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece",
            "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland",
            "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan",
            "Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho",
            "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia",
            "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia",
            "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar (formerly Burma)",
            "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea",
            "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Palestine State", "Panama", "Papua New Guinea",
            "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis",
            "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe",
            "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia",
            "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka",
            "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste",
            "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda",
            "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan",
            "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
        ];

        return view('advertisers.auth.register', compact('countries'));
    }


   // Add the createOrderFromCart method to your controller
    private function createOrderFromCart($cartItems, $advertiser)
    {
        // Group the cart items by `website_url`
        $groupedItems = [];
        foreach ($cartItems as $item) {
            if (isset($item['website_name'], $item['website_url'], $item['price'])) {
                $key = $item['website_url'];
                if (!isset($groupedItems[$key])) {
                    $groupedItems[$key] = [
                        'website_name' => $item['website_name'],
                        'website_url' => $item['website_url'],
                        'price' => 0,
                    ];
                }
                $groupedItems[$key]['price'] += $item['price'];
            }
        }

        // Calculate total price and prepare order details
        $totalPrice = collect($groupedItems)->sum('price');
        $firstPublisher = reset($groupedItems);
        $publisherWebsiteUrl = implode(', ', array_keys($groupedItems));

        // Create the order
        $order = Order::create([
            'advertiser_id' => $advertiser->id,
            'publisher_website_name' => $firstPublisher['website_name'],
            'publisher_website_url' => $publisherWebsiteUrl,
            'price' => $totalPrice,
            'status' => 'placed',  // Order status
        ]);

        // Add order items
        foreach ($groupedItems as $item) {
            $order->items()->create([
                'website_name' => $item['website_name'],
                'website_url' => $item['website_url'],
                'price' => $item['price'],
            ]);
        }

        // Clear the cart
        session()->forget('cart');

        // Generate an invoice
        $invoice = Invoice::create([
            'order_id' => $order->id,
            'price' => $totalPrice,
            'status' => 'generated',  // Invoice status
            'payment_method' => 'credit_card',  // Example payment method, adjust accordingly
            'isPaymentReceived' => false,
            'user_name' => $advertiser->name,
            'user_email' => $advertiser->email,
            'publisher_website_name' => $order->publisher_website_name,
            'publisher_website_url' => $order->publisher_website_url,
        ]);

        // Return the order so you can use it to redirect
        return $order;
    }

public function register(Request $request)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:advertisers',
        'password' => 'required|string|min:8|confirmed',
        'country' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
    ]);

    // Create a new advertiser
    $advertiser = Advertiser::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'country' => $request->country,
        'phone' => $request->phone,
    ]);

     // Prepare advertiser details for the email
        $advertiserDetails = [
            'name' => $advertiser->name,
            'email' => $advertiser->email,
            'created_at' => $advertiser->created_at->format('Y-m-d H:i:s'),
        ];




        // Send an email notification to the admin
        Mail::to('letstalk@medialytica.com')->send(new NewAdvertiserNotificationToAdmin($advertiserDetails));

    // Log the advertiser in
    Auth::guard('advertiser')->login($advertiser);

    // Check if there are cart items in the session
    $cartItems = session()->get('cart', []);
    if (is_array($cartItems) && !empty($cartItems)) {
        // Create the order from cart items
        $order = $this->createOrderFromCart($cartItems, $advertiser);

        // Clear the cart after order creation
        session()->forget('cart');

        // Redirect to the order.place function
        return redirect()->route('order.place')->with('message', 'Registration successful! Your order has been placed.');
    }

    // Redirect to the 'order.place function if no items in cart (just in case they want to place an order later)
    return redirect()->route('order.place')->with('message', 'Registration successful!');
}


public function login(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);


    // Attempt to authenticate the advertiser
    if (Auth::guard('advertiser')->attempt($request->only('email', 'password'))) {
        // Get the cart items from the session
        $cartItems = session()->get('cart', []);

        // Ensure the cart items are an array
        if (!is_array($cartItems)) {
            $cartItems = [];
        }

        // Redirect to 'order.place function if there are items in the cart
        if (!empty($cartItems)) {
            // Create the order from cart items
            $order = $this->createOrderFromCart($cartItems, Auth::guard('advertiser')->user());

            // Clear the cart after order creation
            session()->forget('cart');

            // Redirect to the 'order.place page with success message
            return redirect()->route('order.place')->with('toast_success', 'Login successful! Your order has been placed.');
        }

        // Redirect to the 'order.place function if no items in the cart (they might add items to cart later)
        return redirect()->route('order.place')->with('toast_success', 'Login successful!');
    }

    // If authentication fails
    throw ValidationException::withMessages([
        'email' => [trans('auth.failed')],
    ]);
}




     // Show the login form
     public function showLoginForm()
     {
         return view('advertisers.auth.login');
     }




        // Handle adding the website details to the cart and redirecting
        protected function addToCartAndRedirect(Publisher $publisher)
        {
            // Retrieve the cart from the session, or create an empty one if it doesn't exist
            $cart = session()->get('cart', []);

            // Add the publisher item to the cart
            $cart[$publisher->id] = [
                'id' => $publisher->id,
                'website_name' => $publisher->website_name,
                'website_url' => $publisher->website_url,
                'price' => $publisher->price,
            ];

            // Save the cart back into the session
            session()->put('cart', $cart);

            // Redirect to the checkout page
            return redirect()->route('checkout.index')->with('message', 'Add to Cart successful! Proceed to checkout.');
        }


     // Handle redirection to the registration page with a redirect URL
     public function redirectToRegister(Request $request)
     {
         $publisherId = $request->query('publisher_id');
         $redirectUrl = route('guest.page', ['publisher_id' => $publisherId]);

         return redirect()->route('advertiserregister')->with('redirect_url', $redirectUrl);
     }

     // Show the guest page
     public function showGuestPage(Request $request)
     {
         $publishers = Publisher::all(); // Or add any filter based on your logic
             $publishers = Publisher::paginate(20);

         return view('pages.advertisers.guest', compact('publishers'));
     }

     // Handle logout
     public function logout(Request $request)
     {
         Auth::guard('advertiser')->logout();
         return redirect()->route('advertiserlogin');
     }

}
