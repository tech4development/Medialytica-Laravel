@extends('layouts.dashboards.socialpublisherdashboard')


{{-- @if (session('success'))
<div class="bg-success border border-success text-white alert" role="alert">
    <span class="font-bold">Success</span> {{ session('success') }}
</div>
@endif --}}

@section('header')

@endsection
@section('content')
    <div class="container">
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
            <div class="p-6 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Welcome Section -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-gray-800 text-center">Welcome to the Social Publisher Dashboard!</h1>
                    <p class="mt-2 text-lg text-gray-600 text-center">Manage your social publisher channel details and forms from here.</p>
                </div>

                <!-- Cards Section -->
                <div class="grid grid-cols-1 sm:grid-cols-4 lg:grid-cols-4 gap-6">
                    <!-- Card Template Start -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col justify-between h-64 w-100">
                        <div class="text-center">
                            <i class="fab fa-facebook text-3xl text-blue-600"></i>
                            <h2 class="text-xl font-semibold text-gray-700">Add Facebook Details</h2>
                            <p class="mt-2 text-gray-600">Provide details for your Facebook channel, including account settings and profile updates.</p>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <!-- Social Media Logo -->

                            <div class="flex gap-2">
                                <a href="{{ route('facebook.create') }}" class="px-2 py-1 bg-green-500 text-white rounded hover:bg-green-600 transition-colors duration-300">Profile</a>
                                <a href="{{ route('facebookpage.create') }}" class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors duration-300">Page</a>
                                <a href="{{ route('facebookgroup.create') }}" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition-colors duration-300">Group</a>
                            </div>
                            <a href="" class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-300">Edit</a>
                        </div>
                    </div>
                    <!-- Card Template End -->

                    <!-- Twitter (X) Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col justify-between h-64 w-64">
                        <div class="text-center">
                            <i class="fab fa-twitter text-3xl text-blue-400"></i>
                            <h2 class="text-xl font-semibold text-gray-700">Add Twitter(X) Details</h2>
                            <p class="mt-2 text-gray-600">Manage your Twitter (X) account by updating details and settings for better engagement.</p>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <!-- Social Media Logo -->

                            <div class="flex gap-2">
                                <a href="{{ route('x.create') }}" class="px-2 py-1 bg-green-500 text-white rounded hover:bg-green-600 transition-colors duration-300">Handle</a>
                                <a href="{{ route('xcommunity.create') }}" class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors duration-300">Community</a>

                            </div>
                            <a href="" class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-300">Edit</a>
                        </div>
                    </div>

                    <!-- Instagram Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col justify-between h-64 w-64">
                        <div class="text-center">
                              <!-- Social Media Logo -->
                              <i class="fab fa-instagram text-3xl text-pink-500"></i>
                            <h2 class="text-xl font-semibold text-gray-700">Add Instagram Details</h2>
                            <p class="mt-2 text-gray-600">Enter your Instagram account details to keep your profile up-to-date and engaging.</p>
                        </div>
                        <div class="flex justify-between items-center mb-4">

                            <div class="flex gap-2">
                                <a href="{{ route('instagram.create') }}" class="px-2 py-1 bg-green-500 text-white rounded hover:bg-green-600 transition-colors duration-300">Page</a>
                                <a href="{{ route('instagramgroup.create') }}"  class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition-colors duration-300">Group</a>
                            </div>
                            <a href="" class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-300">Edit</a>
                        </div>
                    </div>

                    <!-- Whatsappcommunity Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col justify-between h-64 w-64">
                        <div class="text-center">
                             <!-- Social Media Logo -->
                             <i class="fab fa-telegram text-3xl text-blue-500"></i>
                            <h2 class="text-xl font-semibold text-gray-700">Add Telegram Details</h2>
                            <p class="mt-2 text-gray-600">Update your Telegram channel details to enhance communication and engagement with your audience.</p>
                        </div>
                        <div class="flex justify-between items-center mb-4">

                            <div class="flex gap-2">
                                <a href="{{ route('telegram.create') }}" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition-colors duration-300">Channel</a>
                                <a href="{{ route('telegramgroup.create') }}" class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors duration-300">Group</a>
                            </div>
                            <a href="" class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-300">Edit</a>
                        </div>
                    </div>

                    <!-- TikTok Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col justify-between h-64 w-64">
                        <div class="text-center">
                            <!-- Social Media Logo -->
                            <i class="fab fa-tiktok text-3xl text-black"></i>
                            <h2 class="text-xl font-semibold text-gray-700">Add TikTok Details</h2>
                            <p class="mt-2 text-gray-600">Input your TikTok account details to manage your video content and audience engagement.</p>
                        </div>
                        <div class="flex justify-between items-center mb-4">

                            <div class="flex gap-2">
                                <a href="{{ route('tiktok.create') }}" class="px-2 py-1 bg-green-500 text-white rounded hover:bg-green-600 transition-colors duration-300">Page</a>
                                <a href="{{ route('tiktokgroup.create') }}" class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors duration-300">Group</a>
                            </div>
                            <a href="" class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-300">Edit</a>
                        </div>
                    </div>

                    <!-- WhatsApp Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col justify-between h-64 w-200">
                        <div class="text-center">
                              <!-- Social Media Logo -->
                              <i class="fab fa-whatsapp text-3xl text-green-500"></i>
                            <h2 class="text-xl font-semibold text-gray-700">Add WhatsApp Details</h2>
                            <p class="mt-2 text-gray-600">Manage your WhatsApp business account by updating your contact details and settings.</p>
                        </div>
                        <div class="flex flex-col gap-4 mb-4">
                            <div class="flex justify-between">
                                <a href="{{ route('whatsapp.create') }}" class="px-2 py-1 bg-green-500 text-white rounded hover:bg-green-600 transition-colors duration-300">Group </a>
                                <a href="{{ route('whatsappcommunity.create') }}" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition-colors duration-300">Community</a>
                                <a href="{{ route('whatsappchannel.create') }}" class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors duration-300">Channel</a>
                            </div>
                            <div class="flex justify-center">
                                <a href="" class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-300">Edit</a>
                            </div>

                        </div>


                    </div>

                    <!-- YouTube Card -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col justify-between h-64 w-64">
                        <div class="text-center">
                              <!-- Social Media Logo -->
                              <i class="fab fa-youtube text-3xl text-red-500"></i>
                            <h2 class="text-xl font-semibold text-gray-700">Add YouTube Details</h2>
                            <p class="mt-2 text-gray-600">Manage your YouTube channel details to enhance your video content and audience engagement.</p>
                        </div>
                        <div class="flex justify-between items-center mb-4">

                            <div class="flex gap-2">
                                <a href="{{ route('youtube.create') }}" class="px-2 py-1 bg-green-500 text-white rounded hover:bg-red-600 transition-colors duration-300">Channel</a>
                            </div>
                            <a href="" class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-300">Edit</a>
                        </div>
                    </div>
                </div>
            </div>






        </div>

    </div>
@endsection

<script>
    document.getElementById('editButton').addEventListener('click', function(event) {
        event.preventDefault();
        var editForm = document.getElementById('editForm');
        if (editForm.classList.contains('hidden')) {
            editForm.classList.remove('hidden');
        } else {
            editForm.classList.add('hidden');
        }
    });
</script>
