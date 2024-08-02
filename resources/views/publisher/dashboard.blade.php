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

            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">
                        {{ ucfirst(Auth::user()->user_role) }} Dashboard
                    </h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-sm">
                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                            Home
                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70" aria-current="page">
                        {{ ucfirst(Auth::user()->user_role) }} Dashboard
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->


            <!-- End::main-content -->
            <!-- New content section -->
            <div class="p-6">
                <!-- Welcome Section -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-gray-800 text-center">Welcome to the Publisher Dashboard!</h1>
                    <p class="mt-2 text-lg text-gray-600 text-center">Manage your publisher details and forms from here.</p>
                </div>

                <!-- Cards Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Add Publisher Details Form Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h2 class="text-xl font-semibold text-gray-700 text-center">Add Publisher Details</h2>
                        <p class="mt-2 text-gray-600 text-center">Create a new publisher profile with the details form.</p>
                        <div class="text-center">
                            <a href="{{ route('publisher.create') }}" class="mt-4 inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors duration-300 mx-auto">
                                Add your Publisher Details
                            </a>
                        </div>

                    </div>

                    <!-- Edit Publisher Details Form Card -->
                    <div id="edit-card" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 ">
                        <h2 class="text-xl font-semibold text-gray-700 text-center">Edit Publisher Details</h2>
                        <p class="mt-2 text-gray-600 text-center">Update existing publisher details using the edit form.</p>
                        <!-- Link to the edit page -->
                        <div class="text-center">
                            <a href="{{ route('publisher.edit', 'id') }}" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-300">
                                Edit your Publisher Details
                            </a>
                        </div>


                         {{-- <a href="{{route ('publisher.show' ,$publisher->id)}}" class="mt-4 inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors duration-300">Edit your Publisher Details</a> --}}
                    </div>

                    <!-- Update Publisher Details Form Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h2 class="text-xl font-semibold text-gray-700 text-center">Update Publisher Details</h2>
                        <p class="mt-2 text-gray-600 text-center">Modify publisher details with the update form.</p>
                        <!-- Link to the update page -->
                        <div class="text-center">
                            <a href="{{ route('publisher.edit', 'id') }}" class="mt-4 inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition-colors duration-300">
                                Update Publisher Details
                            </a>
                        </div>
                        </div>

                    <!-- Log Out Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h2 class="text-xl font-semibold text-gray-700 text-center">Log Out</h2>
                        <p class="mt-2 text-gray-600 text-center">Sign out from the dashboard.</p>
                        <div class="text-center">
                            <a href="" class="mt-4 inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition-colors duration-300">
                                Log Out
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

