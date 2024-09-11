<?php

namespace App\Http\Controllers\SocialLogin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User; // Make sure to import the User model

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();

            // Check if the user already exists
            $user = User::where('google_id', $google_user->getId())->first();

            if (!$user) {
                // Create a new user if they do not exist
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(), // Use the correct column name (google_id)
                ]);

                Auth::login($new_user);

                return redirect()->intended('dashboard');
            } else {
                // Log in the existing user
                Auth::login($user);

                return redirect()->intended('dashboard');
            }
        } catch (\Throwable $th) {
            dd('Something went wrong! ' . $th->getMessage());
        }
    }
}
