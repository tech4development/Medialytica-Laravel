@extends('layouts.dashboards.socialpublisherdashboard')


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
                    <h1 class="text-3xl font-bold text-gray-800 text-center">Welcome to the Social Publisher Dashboard!</h1>
                    <p class="mt-2 text-lg text-gray-600 text-center">Manage your social publisher channel details and forms from here.</p>
                </div>

                <!-- Cards Section -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Facebook Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h2 class="text-xl font-semibold text-gray-700 text-center">Add Facebook Details</h2>
                        <p class="mt-2 text-gray-600 text-center">
                            Provide details for your Facebook channel, including account settings and profile updates.
                        </p>
                        <div class="mt-4 flex justify-center gap-4">
                            <a href="" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition-colors duration-300">
                                Create
                            </a>
                            <a href="" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-300">
                                Edit
                            </a>
                        </div>
                    </div>

                    <!-- Twitter (X) Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h2 class="text-xl font-semibold text-gray-700 text-center">Add Twitter(X) Details</h2>
                        <p class="mt-2 text-gray-600 text-center">
                            Manage your Twitter (X) account by updating details and settings for better engagement.
                        </p>
                        <div class="mt-4 flex justify-center gap-4">
                            <a href="" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition-colors duration-300">
                                Create
                            </a>
                            <a href="" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-300">
                                Edit
                            </a>
                        </div>
                    </div>

                    <!-- Instagram Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h2 class="text-xl font-semibold text-gray-700 text-center">Add Instagram Details</h2>
                        <p class="mt-2 text-gray-600 text-center">
                            Enter your Instagram account details to keep your profile up-to-date and engaging.
                        </p>
                        <div class="mt-4 flex justify-center gap-4">
                            <a href="" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition-colors duration-300">
                                Create
                            </a>
                            <a href="" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-300">
                                Edit
                            </a>
                        </div>
                    </div>

                    <!-- Telegram Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h2 class="text-xl font-semibold text-gray-700 text-center">Add Telegram Details</h2>
                        <p class="mt-2 text-gray-600 text-center">
                            Update your Telegram channel details to enhance communication and engagement with your audience.
                        </p>
                        <div class="mt-4 flex justify-center gap-4">
                            <a href="" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition-colors duration-300">
                                Create
                            </a>
                            <a href="" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-300">
                                Edit
                            </a>
                        </div>
                    </div>

                    <!-- TikTok Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h2 class="text-xl font-semibold text-gray-700 text-center">Add TikTok Details</h2>
                        <p class="mt-2 text-gray-600 text-center">
                            Input your TikTok account details to manage your video content and audience engagement.
                        </p>
                        <div class="mt-4 flex justify-center gap-4">
                            <a href="" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition-colors duration-300">
                                Create
                            </a>
                            <a href="" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-300">
                                Edit
                            </a>
                        </div>
                    </div>

                    <!-- WhatsApp Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h2 class="text-xl font-semibold text-gray-700 text-center">Add WhatsApp Details</h2>
                        <p class="mt-2 text-gray-600 text-center">
                            Manage your WhatsApp business account by updating your contact details and settings.
                        </p>
                        <div class="mt-4 flex justify-center gap-4">
                            <a href="" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition-colors duration-300">
                                Create
                            </a>
                            <a href="" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-300">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>

            </div>





        </div>

    </div>
@endsection

