@extends('layouts.auth.login')

@section('title', 'Login')

@section('content')
    <!-- Session Status -->
    @if (session('status'))
        <div class="mb-4 text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-white">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring-primary focus:ring focus:ring-opacity-50"
                required autofocus autocomplete="username">
            @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-white">Password</label>
            <input id="password" type="password" name="password"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring-primary focus:ring focus:ring-opacity-50"
                required autocomplete="current-password">
            @error('password')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" name="remember"
                    class="rounded border-gray-300 text-primary focus:ring-primary">
                <span class="ml-2 text-sm text-gray-600 dark:text-white">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 hover:text-gray-900 dark:text-white dark:hover:text-gray-300"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button type="submit"
                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
@endsection
