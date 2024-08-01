<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        switch ($request->user()->user_role) {
            case 'super admin':
                return redirect()->route('superadmin.dashboard');
            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'publisher':
                return redirect()->route('publisher.dashboard');
            case 'socialpublisher':
                return redirect()->route('socialpublisher.dashboard');
            case 'editor':
                return redirect()->route('editor.dashboard');
            case 'user':
                return redirect()->route('user.dashboard');
            default:
                // Handle any unexpected roles or redirect to a default route
                return redirect()->view('home');
        }

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
