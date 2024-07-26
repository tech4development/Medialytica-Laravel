@extends('layouts.userdashboard')

@section('content')
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-gray-800 text-white px-6 py-4">
                        {{ __('Dashboard') }}
                    </div>

                    <div class="px-6 py-4">
                        @if (session('status'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <h1 class="text-xl font-semibold mt-4">Hello User</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
