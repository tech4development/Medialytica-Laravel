@extends('layouts.advertiser.register')

@section('title', 'Advertiser Register')

@section('content')
    <form method="POST" action="{{ route('advertiserregister') }}" class="space-y-4">
        @csrf

          <!-- Role -->
        <div>
            <label for="role" class="block text-sm mb-2 dark:text-white">Select Role</label>
            <select name="role" id="role" required
                class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70">
                <option value="advertiser">Advertiser</option>
            </select>
        </div>
        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-white">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                required autofocus autocomplete="name">
            @error('name')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-white">Email address</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                required autocomplete="username">
            @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-white">Password</label>
            <input id="password" type="password" name="password"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                required autocomplete="new-password">
            @error('password')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-white">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                required autocomplete="new-password">
            @error('password_confirmation')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

           <!-- Phone Number -->
           <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-white">Phone Number</label>
            <input id="phone" type="tel" name="phone" value="{{ old('phone') }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                required>
            @error('phone')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Country -->
        <div>
            <label for="country" class="block text-sm font-medium text-gray-700 dark:text-white">Country</label>
            <select id="country" name="country"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                required>
                <option value="">Select a country</option>
                @foreach ($countries as $country)
                    <option value="{{ $country }}">{{ $country }}</option>
                @endforeach
            </select>
            @error('country')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center justify-between mt-4">
            <a href="{{ route('advertiserlogin') }}" class="text-sm text-gray-600 hover:text-gray-900 dark:text-white">
                Already registered?
            </a>

            <button type="submit"
                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                Register
            </button>
        </div>
    </form>
@endsection

<script>
    $(document).ready(function() {
        $('.country-select').select2({
            placeholder: "Select a country",
            allowClear: true,
            width: '100%'  // Ensure the dropdown matches the width of other input fields
        });
    });
</script>
