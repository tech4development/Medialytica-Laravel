<?php

namespace App\Http\Controllers\SocialAdvertisers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialAdvertiser;
// use App\Models\Publisher;
// use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\Order;
use App\Models\User;

class SocialAdvertiserAuthController extends Controller
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

        return view('socialAdvertisers.auth.socialregister', compact('countries'));
    }

public function register(Request $request)
{
    // Validate the request data and check for uniqueness in both tables
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:social_advertisers,email|unique:users,email', // Check for uniqueness in both tables
        'password' => 'required|string|min:8|confirmed',
        'country' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
    ]);

    // Create a new advertiser
    $socialAdvertiser = SocialAdvertiser::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'country' => $request->country,
        'phone' => $request->phone,
    ]);

    // Create the same entry in the users table
    User::create([
        'name' => $socialAdvertiser->name,
        'email' => $socialAdvertiser->email,
        'password' => $socialAdvertiser->password, // Password is already hashed
        'user_role' => 'social_advertiser',
    ]);

    // Log the advertiser in
    Auth::guard('social_advertiser')->login($socialAdvertiser);

    // Flash a success message to the session
    session()->flash('success', 'Registration successful!');

    // Check if there are cart items in the session
    $cartItems = session()->get('cart', []);
    if (is_array($cartItems) && !empty($cartItems)) {
        // Redirect to the checkout page
        return redirect()->route('checkout.index');
    }

    // Redirect to the guest page if no items in the cart
    return redirect()->route('guest.page');
}

}
