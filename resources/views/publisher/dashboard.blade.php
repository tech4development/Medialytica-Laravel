@extends('layouts.dashboards.publisherdashboard')


{{-- @if (session('success'))
<div class="bg-success border border-success text-white alert" role="alert">
    <span class="font-bold">Success</span> {{ session('success') }}
</div>
@endif --}}

@section('header')

@endsection
@section('content')
    <div class="container mx-auto">
        <div class="main-content">
            @yield('content')
        </div>
        <!-- New content section -->
        <div class="p-6">
            <!-- Welcome Section -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Welcome to the Publisher Dashboard!</h1>
                <p class="mt-2 text-lg text-gray-600">Manage your publisher details and forms from here.</p>
            </div>

            <!-- Cards Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Add Publisher Details Form Card -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h2 class="text-xl font-semibold text-gray-700">Add Publisher Details</h2>
                    <p class="mt-2 text-gray-600">Create a new publisher profile with the details form.</p>
                    <a href="{{ route('publisher.create') }}" class="mt-4 inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors duration-300">
                        Add your Publisher Details
                    </a>
                </div>

                <!-- Edit Publisher Details Form Card -->
                <div id="edit-card" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h2 class="text-xl font-semibold text-gray-700">Edit Publisher Details</h2>
                    <p class="mt-2 text-gray-600">Update existing publisher details using the edit form.</p>
                    <!-- Link to the edit page -->
                    <a href="{{ route('publisher.edit', 'id') }}" class="mt-4 inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors duration-300">
                        Edit your Publisher Details
                    </a>

                     {{-- <a href="{{route ('publisher.show' ,$publisher->id)}}" class="mt-4 inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors duration-300">Edit your Publisher Details</a> --}}
                </div>

                <!-- Update Publisher Details Form Card -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h2 class="text-xl font-semibold text-gray-700">Update Publisher Details</h2>
                    <p class="mt-2 text-gray-600">Modify publisher details with the update form.</p>
                    <!-- Link to the update page -->
                    <a href="{{ route('publisher.edit', 'id') }}" class="mt-4 inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition-colors duration-300">Update Publisher Details</a>
                </div>

                <!-- Log Out Card -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h2 class="text-xl font-semibold text-gray-700">Log Out</h2>
                    <p class="mt-2 text-gray-600">Sign out from the dashboard.</p>
                    <a href="" class="mt-4 inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition-colors duration-300">Log Out</a>
                </div>
            </div>
        </div>
    </div>
@endsection

