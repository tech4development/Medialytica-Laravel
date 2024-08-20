<?php

namespace App\Http\Controllers\Advertisers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertiser;
use App\Models\Publisher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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

    // Handle registration
    public function register(Request $request)
    {
        // Check if the email already exists
        $existingAdvertiser = Advertiser::where('email', $request->email)->first();

        if ($existingAdvertiser) {
            // If the email already exists, redirect back with an error message
            return redirect()->back()->withErrors([
                'email' => 'This email is already registered. Please log in if you already have an account.',
            ])->withInput($request->except('password'));
        }

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

        // Log the advertiser in
        Auth::guard('advertiser')->login($advertiser);

        // Redirect to the intended page or cart index
        if ($request->session()->has('redirect_url')) {
            $redirectUrl = $request->session()->get('redirect_url');
            $request->session()->forget('redirect_url');

            return redirect($redirectUrl);
        }

        return redirect()->route('cart.index');
    }


    // Show the login form
    public function showLoginForm()
    {
        return view('advertisers.auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        // Validate the incoming request to ensure email and password are correctly formatted
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the advertiser with the provided credentials
        if (Auth::guard('advertiser')->attempt($request->only('email', 'password'))) {

            // Check if there was a previous request to unhide a website URL
            if ($request->session()->has('publisher_id')) {
                $publisherId = $request->session()->get('publisher_id');
                $request->session()->forget('publisher_id');

                // Redirect the user to the guest page with the full URL visible
                return redirect()->route('guest.page', ['publisher' => $publisherId]);
            }

            // If no unhide request, redirect to the cart index
            return redirect()->route('cart.index');
        }

        // If authentication fails, throw a validation exception with an error message
        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
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
        return view('pages.advertisers.guest', compact('publishers'));
    }


    // Handle logout
    public function logout(Request $request)
    {
        Auth::guard('advertiser')->logout();

        return redirect()->route('advertiserlogin');
    }


}
