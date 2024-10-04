<!DOCTYPE html>
<html
    lang="en"
    class="h-full"
    dir="ltr"
    data-nav-layout="horizontal"
    data-nav-style="menu-click"
    data-menu-position="fixed"
>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Medialytica</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <script
            src="https://kit.fontawesome.com/a076d05399.js"
            crossorigin="anonymous"
        ></script>
        <link
            href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
            rel="stylesheet"
        />

        <!-- Favicon -->
        <link
            rel="shortcut icon"
            href="{{ asset('backend/assets/img/brand-logos/favicon.ico') }}"
        />

        <!-- Style Css -->
        <link
            rel="stylesheet"
            href="{{ asset('backend/assets/css/style.css') }}"
        />

        <style>
            .icon-container {
                background-color: #e5efff;
                color: #1a73e8;
            }
            .card-title {
                color: #ffb100;
            }
        </style>
    </head>

    <body>
        <!-- Navigation -->
        <nav x-data="{ open: false }" class="bg-gray-50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div
                    class="relative flex h-16 items-center justify-between border-b border-gray-200"
                >
                    <!-- Logo -->
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img
                                class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/mark.svg?color=violet&amp;shade=500"
                                alt="Your Company"
                            />
                        </div>

                        <!-- Desktop Links (hidden on mobile) -->
                        <div class="hidden lg:ml-10 lg:block">
                            <div class="flex space-x-4">
                                <a
                                    href="#"
                                    class="bg-gray-100 px-3 py-2 rounded-md text-sm font-medium text-gray-900"
                                    aria-current="page"
                                    >Home</a
                                >
                                <a
                                    href="#"
                                    class="hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium text-gray-900"
                                    >Services</a
                                >
                                <a
                                    href="#"
                                    class="hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium text-gray-900"
                                    >What We Do</a
                                >
                                <a
                                    href="#"
                                    class="hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium text-gray-900"
                                    >For Advertisers</a
                                >
                                <a
                                    href="#"
                                    class="hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium text-gray-900"
                                    >For Publishers</a
                                >
                                <a
                                    href="#"
                                    class="hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium text-gray-900"
                                    >About Us</a
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Search Section -->
                    <div
                        class="flex flex-1 justify-center px-2 lg:ml-6 lg:justify-end"
                    >
                        <div class="w-40 max-w-lg lg:max-w-xs">
                            <label for="search" class="sr-only">Search</label>
                            <div
                                class="relative text-gray-400 focus-within:text-gray-500"
                            >
                                <div
                                    class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                                >
                                    <svg
                                        class="h-5 w-5"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </div>
                                <input
                                    id="search"
                                    class="block w-full rounded-md border border-gray-300 bg-white py-2 pl-10 pr-3 leading-5 text-gray-900 placeholder-gray-500 focus:border-purple-500 focus:placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-purple-500 sm:text-sm"
                                    placeholder="Search"
                                    type="search"
                                    name="search"
                                />
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Login/Signup (hidden on mobile) -->
                    <div class="hidden lg:ml-4 lg:block">
                                        <div class="flex items-center space-x-4">
                    <a
                        href="{{ route('login') }}"
                        class="bg-blue-500 text-white px-3 py-2 rounded-md text-sm font-medium"
                    >Login</a>

                    <a
                        href="{{ route('register') }}"
                        class="bg-teal-500 text-white px-3 py-2 rounded-md text-sm font-medium"
                    >Register</a>
                </div>

                    </div>

                    <!-- Mobile Menu Toggle Button -->
                    <div class="-mr-2 flex lg:hidden">
                        <button
                            @click="open = !open"
                            type="button"
                            class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500"
                            aria-expanded="false"
                        >
                            <span class="sr-only">Open main menu</span>
                            <svg
                                class="h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7"
                                ></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu (hidden by default, shown when toggled) -->
            <div class="lg:hidden" x-show="open" x-cloak>
                <div class="space-y-1 px-2 pt-2 pb-3">
                    <a
                        href="#"
                        class="bg-gray-100 block px-3 py-2 rounded-md font-medium text-gray-900"
                        aria-current="page"
                        >Services</a
                    >
                    <a
                        href="#"
                        class="hover:bg-gray-100 block px-3 py-2 rounded-md font-medium text-gray-900"
                        >Advertisers</a
                    >
                    <a
                        href="#"
                        class="hover:bg-gray-100 block px-3 py-2 rounded-md font-medium text-gray-900"
                        >Publishers</a
                    >
                    <a
                        href="#"
                        class="hover:bg-gray-100 block px-3 py-2 rounded-md font-medium text-gray-900"
                        >Social Publishers</a
                    >
                    <a
                        href="#"
                        class="hover:bg-gray-100 block px-3 py-2 rounded-md font-medium text-gray-900"
                        >About Us</a
                    >
                </div>

                <!-- Mobile Login/Signup Buttons -->
                <div class="border-t border-gray-200 pt-4 pb-3 px-2">
                    <a
                        href="#"
                        class="bg-blue-500 block text-white px-3 py-2 rounded-md font-medium text-center"
                        >Login</a
                    >
                    <a
                        href="#"
                        class="bg-green-500 block text-white px-3 py-2 rounded-md font-medium text-center mt-1"
                        >Sign Up</a
                    >
                </div>
            </div>
        </nav>

        <!-- Start::main-content -->
        <div class="main-content landing-main !p-0">
            <div
                class="relative bg-cover bg-center h-screen"
                style="background-image: url('{{
                    asset('backend/assets/Home Leaderboard.jpg')
                }}');"
            >
                <!-- Gray overlay -->
                <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div
                    class="container mx-auto h-full flex flex-col justify-center items-center px-6 py-12 relative z-10"
                >
                    <h1 class="text-5xl font-bold text-white text-center mb-12">
                        We Connect Advertisers to Content Creators
                    </h1>
                    <div class="flex flex-col md:flex-row gap-6 w-full">
                        <!-- Card 1 -->
                        <div
                            class="flex-1 bg-white rounded-lg shadow-lg p-6 text-center"
                        >
                            <h2 class="text-xl font-bold mb-4">
                                Advertiser or Brand
                            </h2>
                            <p class="text-gray-600 mb-4">
                                I am an SEO or media buying professional
                                interested in paid content partnerships such as
                                sponsored posts, link insertion, and banner
                                advertising.
                            </p>
                            <a href="{{ route('guest.page') }}">
                                <button
                                    class="bg-blue-500 text-white px-4 py-2 rounded"
                                >
                                    Get Started
                                </button>
                            </a>
                        </div>

                        <!-- Card 2 -->
                        <div
                            class="flex-1 bg-white rounded-lg shadow-lg p-6 text-center"
                        >
                            <h2 class="text-xl font-bold mb-4">
                                Media or Blog
                            </h2>
                            <p class="text-gray-600 mb-4">
                                I have a blog or website and would like to
                                receive orders, publish promotional content, and
                                get paid
                            </p>
                            <button
                                class="bg-blue-500 text-white px-4 py-2 rounded"
                            >
                                Get Started
                            </button>
                        </div>
                        <!-- Card 3 -->
                        <div
                            class="flex-1 bg-white rounded-lg shadow-lg p-6 text-center"
                        >
                            <h2 class="text-xl font-bold mb-4">
                                Social Publishers
                            </h2>
                            <p class="text-gray-600 mb-4">
                                I am a charismatic influencer or social media
                                bigwig. I would like to showcase branded content
                                on my social pages and get paid.
                            </p>
                            <button
                                class="bg-blue-500 text-white px-4 py-2 rounded"
                            >
                                Get Started
                            </button>
                        </div>
                        <!-- Card 4 -->
                        <div
                            class="flex-1 bg-white rounded-lg shadow-lg p-6 text-center"
                        >
                            <h2 class="text-xl font-bold mb-4">Write for me</h2>
                            <p class="text-gray-600 mb-4">
                                I am a business person or brand manager and
                                would like professional SEO-friendly blog
                                articles to promote my products and services.
                            </p>
                            <button
                                class="bg-blue-500 text-white px-4 py-2 rounded"
                            >
                                Get Started
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- New Section with Counters -->
            <div class="relative bg-custom-dark">
                <div class="container mx-auto py-2 text-center">
                    <div
                        class="flex flex-col md:flex-row justify-around items-center gap-8 bg-custom-blue p-6 rounded-lg shadow-lg"
                    >
                        <div class="flex-1 border-l border-gray-200 p-2">
                            <h3
                                id="registeredWebsites"
                                class="text-2xl font- text-white"
                            >
                                0
                            </h3>
                            <p class="text-xl text-gray-200">
                                Registered Websites
                            </p>
                        </div>
                        <div class="flex-1 border-l border-gray-200 p-2">
                            <h3
                                id="contentCreators"
                                class="text-2xl font-semibold text-white"
                            >
                                0
                            </h3>
                            <p class="text-xl text-gray-200">
                                Content Creators
                            </p>
                        </div>
                        <div class="flex-1 border-l border-gray-200 p-2">
                            <h3
                                id="registeredAdvertisers"
                                class="text-2xl font-semibold text-white"
                            >
                                0
                            </h3>
                            <p class="text-xl text-gray-200">
                                Registered Advertisers
                            </p>
                        </div>
                        <div class="flex-1 border-l border-gray-200 p-2">
                            <h3
                                id="tasksCompleted"
                                class="text-2xl font-semibold text-white"
                            >
                                0
                            </h3>
                            <p class="text-xl text-gray-200">Tasks Completed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End::main-content -->
        <div class="">
            <!-- Advertiser Section -->
            <div class="bg-white dark:bg-bgdark py-10" id="advertiser">
                <div class="container mx-auto text-center">
                    <h2
                        class="text-3xl font-bold text-whitew dark:text-white mb-4"
                    >
                        Are you an Advertiser or a Media Buyer?
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                        Boost your traffic, make more sales, and grow your
                        business. Explore our link-building services and fortify
                        your backlink portfolio.
                    </p>
                    <div class="grid lg:grid-cols-2 gap-6 items-center">
                        <div class="flex justify-center">
                            <img
                                src="{{
                                    asset('backend/assets/advertisers.jpg')
                                }}"
                                class="shadow-lg object-cover h-60 w-360"
                                alt="Advertiser meeting"
                            />
                        </div>
                        <div class="text-left space-y-4">
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                Browse our database with 10K+ publishers
                            </p>
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                Select a site and make your order
                            </p>
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                Get your content published within 24 hours
                            </p>
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                Free account, no fees, no credit card needed
                            </p>
                            <a
                                href="#"
                                class="inline-block mt-6 py-3 px-6 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600 transition duration-300"
                            >
                                Get Started as an Advertiser
                                <i
                                    class="ri-arrow-right-line rtl:rotate-180"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::Advertiser Section -->

            <!-- Advertiser Section -->
            <div class="bg-white dark:bg-bgdark py-10" id="advertiser">
                <div class="container mx-auto text-center">
                    <h2
                        class="text-3xl font-bold text-whitew dark:text-white mb-4"
                    >
                        Are you an Advertiser or a Media Buyer?
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                        Boost your traffic, make more sales, and grow your
                        business. Explore our link-building services and fortify
                        your backlink portfolio.
                    </p>
                    <div class="grid lg:grid-cols-2 gap-4 items-center">
                        <div class="flex justify-center">
                            <img
                                src="{{
                                    asset('backend/assets/advertisers.jpg')
                                }}"
                                class="shadow-lg object-cover h-60 w-full max-w-xs rounded-lg"
                                alt="Advertiser meeting"
                            />
                        </div>

                        <div class="text-left space-y-4 lg:text-right">
                            <!-- Add lg:text-right for right alignment on large screens -->
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                Browse our database with 10K+ publishers
                            </p>
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                Select a site and make your order
                            </p>
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                Get your content published within 24 hours
                            </p>
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                Free account, no fees, no credit card needed
                            </p>
                            <a
                                href="#"
                                class="inline-block mt-4 py-3 px-6 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600 transition duration-300"
                            >
                                Get Started as an Advertiser
                                <i
                                    class="ri-arrow-right-line rtl:rotate-180"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::Advertiser Section -->

            <!-- Social Publisher Section -->
            <div class="bg-white dark:bg-bgdark py-10" id="advertiser">
                <div class="container mx-auto text-center">
                    <h2
                        class="text-3xl font-bold text-gray-800 dark:text-white mb-4"
                    >
                        Are you an Advertiser or a Media Buyer?
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                        Boost your traffic, make more sales, and grow your
                        business. Explore our link-building services and fortify
                        your backlink portfolio.
                    </p>
                    <div class="grid lg:grid-cols-2 gap-6 items-center">
                        <div class="flex justify-center">
                            <img
                                src="{{
                                    asset('backend/assets/advertisers.jpg')
                                }}"
                                class="shadow-lg object-cover h-60 w-360"
                                alt="Advertiser meeting"
                            />
                        </div>
                        <div class="text-left space-y-4">
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                Browse our database with 10K+ publishers
                            </p>
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                Select a site and make your order
                            </p>
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                Get your content published within 24 hours
                            </p>
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                Free account, no fees, no credit card needed
                            </p>
                            <a
                                href="#"
                                class="inline-block mt-6 py-3 px-6 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600 transition duration-300"
                            >
                                Get Started as an Advertiser
                                <i
                                    class="ri-arrow-right-line rtl:rotate-180"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::Social Publisher Section -->

            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="mb-4">
                            <h5
                                class="text-lg font-bold text-[#004466] text-center"
                            >
                                Browse our database of 10K+ Publishers
                            </h5>
                        </div>
                        <div
                            class="overflow-x-auto border border-gray-300 bg-custom-dark rounded-md mt-4"
                        >
                            <div class="flex justify-center">
                                <table
                                    class="min-w-150 table-auto border-collapse"
                                >
                                    <thead class="bg-[#004466]">
                                        <tr>
                                            <th
                                                scope="col"
                                                class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider"
                                            >
                                                Publishers
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider"
                                            >
                                                Niches
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider"
                                            >
                                                DA
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider"
                                            >
                                                DR
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider"
                                            >
                                                Traffic
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider"
                                            >
                                                Country
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider"
                                            >
                                                Price
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider"
                                            >
                                                Order Now
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200"
                                    >
                                        @foreach($publishers as $publisher)
                                        <tr>
                                            <td
                                                class="px-2 py-2 border border-gray-300 whitespace-nowrap"
                                            >
                                                <a
                                                    href="#"
                                                    class="text-white hover:underline"
                                                    >{{ $publisher->website_url }}</a
                                                >
                                            </td>
                                            <td
                                                class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900"
                                            >
                                                {{ is_array($publisher->niches) ? implode(', ', $publisher->niches) : $publisher->niches }}
                                            </td>
                                            <td
                                                class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900"
                                            >
                                                {{ $publisher->moz_da }}
                                            </td>
                                            <td
                                                class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900"
                                            >
                                                {{ $publisher->ahref_dr }}
                                            </td>
                                            <td
                                                class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900"
                                            >
                                                {{ $publisher->traffic }}
                                            </td>
                                            <td
                                                class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900"
                                            >
                                                {{ $publisher->country }}
                                            </td>
                                            <td
                                                class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900"
                                            >
                                                {{ $publisher->price }}
                                            </td>
                                            <td
                                                class="px-2 py-2 border border-gray-300 whitespace-nowrap"
                                            >
                                                <div
                                                    class="flex justify-center"
                                                >
                                                    <form
                                                        action="{{ route('cart.add', ['publisherId' => $publisher->id]) }}"
                                                        method="POST"
                                                    >
                                                        @csrf
                                                        <input
                                                            type="hidden"
                                                            name="publisher_id"
                                                            value="{{ $publisher->id }}"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            name="website_url"
                                                            value="{{ $publisher->website_url }}"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            name="price"
                                                            value="{{ $publisher->price }}"
                                                        />
                                                        <button
                                                            type="submit"
                                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                                        >
                                                            Order Now
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-custom-blue-150">
                <div class="mb-4">
                    <h5 class="text-lg font-bold text-[#004466] text-center">
                        Browse our database of 10K+ Social Publishers
                    </h5>
                </div>
                <div class="container mx-auto p-4">
                    <!-- Horizontal Menu -->
                    <div class="flex justify-center mb-4 space-x-4">
                        <button
                            onclick="switchTable('telegram')"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg"
                            id="telegram-btn"
                        >
                            <i class="fab fa-telegram-plane"></i> Telegram
                        </button>
                        <button
                            onclick="switchTable('facebook')"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg"
                            id="facebook-btn"
                        >
                            <i class="fab fa-facebook-f"></i> Facebook
                        </button>
                        <button
                            onclick="switchTable('instagram')"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg"
                            id="instagram-btn"
                        >
                            <i class="fab fa-instagram"></i> Instagram
                        </button>
                        <button
                            onclick="switchTable('twitter')"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg"
                            id="twitter-btn"
                        >
                            <i class="fab fa-twitter"></i> Twitter
                        </button>
                        <button
                            onclick="switchTable('whatsapp')"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg"
                            id="whatsapp-btn"
                        >
                            <i class="fab fa-whatsapp"></i> Whatsapp
                        </button>
                        <button
                            onclick="switchTable('tiktok')"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg"
                            id="tiktok-btn"
                        >
                            <i class="fab fa-tiktok"></i> Tiktok
                        </button>
                        <button
                            onclick="switchTable('youtube')"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg"
                            id="tiktok-btn"
                        >
                            <i class="fab fa-tiktok"></i> Youtube
                        </button>
                    </div>

                    <!-- Main Section with Vertical Toggle Menu -->
                    <div class="flex">
                        <!-- Vertical Drawer Menu -->
                        <div
                            class="flex flex-col items-start p-4 bg-gray-100 rounded-lg space-y-4"
                        >
                            <button
                                onclick="switchTable('telegram')"
                                class="relative flex items-center justify-center w-12 h-12 text-gray-800 bg-gray-200 hover:bg-blue-200 rounded-lg transition-all duration-300 group"
                            >
                                <i class="fab fa-telegram-plane"></i>
                                <span
                                    class="absolute left-14 px-2 py-1 bg-white rounded-md shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                >
                                    Telegram
                                </span>
                            </button>

                            <button
                                onclick="switchTable('facebook')"
                                class="relative flex items-center justify-center w-12 h-12 text-gray-800 bg-gray-200 hover:bg-blue-200 rounded-lg transition-all duration-300 group"
                            >
                                <i class="fab fa-facebook-f"></i>
                                <span
                                    class="absolute left-14 px-2 py-1 bg-white rounded-md shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                >
                                    Facebook
                                </span>
                            </button>

                            <button
                                onclick="switchTable('instagram')"
                                class="relative flex items-center justify-center w-12 h-12 text-gray-800 bg-gray-200 hover:bg-blue-200 rounded-lg transition-all duration-300 group"
                            >
                                <i class="fab fa-instagram"></i>
                                <span
                                    class="absolute left-14 px-2 py-1 bg-white rounded-md shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                >
                                    Instagram
                                </span>
                            </button>

                            <button
                                onclick="switchTable('twitter')"
                                class="relative flex items-center justify-center w-12 h-12 text-gray-800 bg-gray-200 hover:bg-blue-200 rounded-lg transition-all duration-300 group"
                            >
                                <i class="fab fa-twitter"></i>
                                <span
                                    class="absolute left-14 px-2 py-1 bg-white rounded-md shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                >
                                    Twitter
                                </span>
                            </button>

                            <button
                                onclick="switchTable('whatsapp')"
                                class="relative flex items-center justify-center w-12 h-12 text-gray-800 bg-gray-200 hover:bg-blue-200 rounded-lg transition-all duration-300 group"
                            >
                                <i class="fab fa-whatsapp"></i>
                                <span
                                    class="absolute left-14 px-2 py-1 bg-white rounded-md shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                >
                                    Whatsapp
                                </span>
                            </button>

                            <button
                                onclick="switchTable('tiktok')"
                                class="relative flex items-center justify-center w-12 h-12 text-gray-800 bg-gray-200 hover:bg-blue-200 rounded-lg transition-all duration-300 group"
                            >
                                <i class="fab fa-tiktok"></i>
                                <span
                                    class="absolute left-14 px-2 py-1 bg-white rounded-md shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                >
                                    Tiktok
                                </span>
                            </button>
                            <button
                                onclick="switchTable('youtube')"
                                class="relative flex items-center justify-center w-12 h-12 text-gray-800 bg-gray-200 hover:bg-blue-200 rounded-lg transition-all duration-300 group"
                            >
                                <i class="fab fa-youtube"></i>
                                <span
                                    class="absolute left-14 px-2 py-1 bg-white rounded-md shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                >
                                    Youtube
                                </span>
                            </button>
                        </div>

                        <!-- Tables Section -->
                        <div class="flex-grow p-4">
                            <!-- Telegram Table -->
                            <table
                                class="min-w-full bg-white border border-gray-300"
                                id="telegram-table"
                            >
                                <thead>
                                    <tr class="bg-gray-200">
                                        <th class="px-4 py-2 border">
                                            Channel
                                        </th>
                                        <th class="px-4 py-2 border">
                                            Channel URL
                                        </th>
                                        <th class="px-4 py-2 border">Niches</th>
                                        <th class="px-4 py-2 border">
                                            Members
                                        </th>
                                        <th class="px-4 py-2 border">
                                            Category
                                        </th>
                                        <th class="px-4 py-2 border">
                                            Target Audience
                                        </th>
                                        <th class="px-4 py-2 border">
                                            Post Types
                                        </th>
                                        <th class="px-4 py-2 border">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @dd($telegramspublishers) --}}
                                  {{-- @foreach($telegramspublishers as $telegramspublisher)
                                    <tr>
                                        <td class="px-4 py-2 border">
                                            {{ $telegramspublisher->telegram_channel_name }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $telegramspublisher->telegram_channel_url }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $telegramspublisher->niches_themes }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $telegramspublisher->telegram_channel_members }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $telegramspublisher->influencer_category }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $telegramspublisher->target_audience }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $telegramspublisher->post_types }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $telegramspublisher->price }}
                                        </td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>

                            <!-- Facebook Table -->
                            <table
                                class="min-w-full bg-white border border-gray-300 hidden"
                                id="facebook-table"
                            >
                                <thead>
                                    <tr class="bg-gray-200">
                                        <th class="px-4 py-2 border">
                                            Page Name
                                        </th>
                                        <th class="px-4 py-2 border">
                                            Page URL
                                        </th>
                                        <th class="px-4 py-2 border">Niches</th>
                                        <th class="px-4 py-2 border">
                                            Followers
                                        </th>
                                        <th class="px-4 py-2 border">
                                            Category
                                        </th>
                                        <th class="px-4 py-2 border">
                                            Target Audience
                                        </th>
                                        <th class="px-4 py-2 border">
                                            Post Types
                                        </th>
                                        <th class="px-4 py-2 border">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach($facebookspublishers as
                                    $facebookspublisher) --}}
                                    {{-- <tr>
                                        <td class="px-4 py-2 border">
                                            {{ $facebookspublisher->facebook_page_name }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $facebookspublisher->facebook_page_url }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $facebookspublisher->niches_themes }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $facebookspublisher->number_of_followers }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $facebookspublisher->influencer_category }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $facebookspublisher->target_audience }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $facebookspublisher->post_types }}
                                        </td>
                                        <td class="px-4 py-2 border">
                                            {{ $facebookspublisher->price }}
                                        </td>
                                    </tr> --}}
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>

                            <!-- Add other tables similarly -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start::Services Content -->
            <section class="py-12 bg-gray-900 text-gray-100 sm:py-12 lg:py-16">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="max-w-xl mx-auto text-center xl:max-w-2xl">
                        <h2
                            class="text-3xl font-bold leading-tight text-gray-50 sm:text-4xl xl:text-5xl mb-6"
                        >
                            We are just getting started!
                        </h2>
                        <p class="mb-4">
                            We are creating a tool that helps you be more
                            productive and efficient when building websites and
                            webapps
                        </p>
                    </div>
                    <div
                        class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-6 w-full"
                    >
                        <!-- Card 1 -->
                        <div
                            class="bg-white rounded-lg shadow-lg p-6 text-center"
                        >
                            <h2 class="text-xl text-gray-600 font-bold mb-4">
                                Advertiser or Brand
                            </h2>
                            <p class="text-gray-600 mb-4">
                                I am an SEO or media buying professional
                                interested in paid content partnerships such as
                                sponsored posts, link insertion, and banner
                                advertising.
                            </p>
                            <a href="{{ route('guest.page') }}">
                                <button
                                    class="bg-blue-500 text-white px-4 py-2 rounded"
                                >
                                    Get Started
                                </button>
                            </a>
                        </div>

                        <!-- Card 1 -->
                        <div
                            class="bg-white rounded-lg shadow-lg p-6 text-center"
                        >
                            <h2 class="text-xl text-gray-600 font-bold mb-4">
                                Advertiser or Brand
                            </h2>
                            <p class="text-gray-600 mb-4">
                                I am an SEO or media buying professional
                                interested in paid content partnerships such as
                                sponsored posts, link insertion, and banner
                                advertising.
                            </p>
                            <a href="{{ route('guest.page') }}">
                                <button
                                    class="bg-blue-500 text-white px-4 py-2 rounded"
                                >
                                    Get Started
                                </button>
                            </a>
                        </div>

                        <!-- Card 1 -->
                        <div
                            class="bg-white rounded-lg shadow-lg p-6 text-center"
                        >
                            <h2 class="text-xl text-gray-600 font-bold mb-4">
                                Advertiser or Brand
                            </h2>
                            <p class="text-gray-600 mb-4">
                                I am an SEO or media buying professional
                                interested in paid content partnerships such as
                                sponsored posts, link insertion, and banner
                                advertising.
                            </p>
                            <a href="{{ route('guest.page') }}">
                                <button
                                    class="bg-blue-500 text-white px-4 py-2 rounded"
                                >
                                    Get Started
                                </button>
                            </a>
                        </div>

                        <!-- Card 1 -->
                        <div
                            class="bg-white rounded-lg shadow-lg p-6 text-center"
                        >
                            <h2 class="text-xl text-gray-600 font-bold mb-4">
                                Advertiser or Brand
                            </h2>
                            <p class="text-gray-600 mb-4">
                                I am an SEO or media buying professional
                                interested in paid content partnerships such as
                                sponsored posts, link insertion, and banner
                                advertising.
                            </p>
                            <a href="{{ route('guest.page') }}">
                                <button
                                    class="bg-blue-500 text-white px-4 py-2 rounded"
                                >
                                    Get Started
                                </button>
                            </a>
                        </div>

                        <!-- Card 1 -->
                        <div
                            class="bg-white rounded-lg shadow-lg p-6 text-center"
                        >
                            <h2 class="text-xl text-gray-600 font-bold mb-4">
                                Advertiser or Brand
                            </h2>
                            <p class="text-gray-600 mb-4">
                                I am an SEO or media buying professional
                                interested in paid content partnerships such as
                                sponsored posts, link insertion, and banner
                                advertising.
                            </p>
                            <a href="{{ route('guest.page') }}">
                                <button
                                    class="bg-blue-500 text-white px-4 py-2 rounded"
                                >
                                    Get Started
                                </button>
                            </a>
                        </div>

                        <!-- Card 1 -->
                        <div
                            class="bg-white rounded-lg shadow-lg p-6 text-center"
                        >
                            <h2 class="text-xl text-gray-600 font-bold mb-4">
                                Advertiser or Brand
                            </h2>
                            <p class="text-gray-600 mb-4">
                                I am an SEO or media buying professional
                                interested in paid content partnerships such as
                                sponsored posts, link insertion, and banner
                                advertising.
                            </p>
                            <a href="{{ route('guest.page') }}">
                                <button
                                    class="bg-blue-500 text-white px-4 py-2 rounded"
                                >
                                    Get Started
                                </button>
                            </a>
                        </div>

                        <!-- Card 1 -->
                        <div
                            class="bg-white rounded-lg shadow-lg p-6 text-center"
                        >
                            <h2 class="text-xl text-gray-600 font-bold mb-4">
                                Advertiser or Brand
                            </h2>
                            <p class="text-gray-600 mb-4">
                                I am an SEO or media buying professional
                                interested in paid content partnerships such as
                                sponsored posts, link insertion, and banner
                                advertising.
                            </p>
                            <a href="{{ route('guest.page') }}">
                                <button
                                    class="bg-blue-500 text-white px-4 py-2 rounded"
                                >
                                    Get Started
                                </button>
                            </a>
                        </div>

                        <!-- Card 1 -->
                        <div
                            class="bg-white rounded-lg shadow-lg p-6 text-center"
                        >
                            <h2 class="text-xl text-gray-600 font-bold mb-4">
                                Advertiser or Brand
                            </h2>
                            <p class="text-gray-600 mb-4">
                                I am an SEO or media buying professional
                                interested in paid content partnerships such as
                                sponsored posts, link insertion, and banner
                                advertising.
                            </p>
                            <a href="{{ route('guest.page') }}">
                                <button
                                    class="bg-blue-500 text-white px-4 py-2 rounded"
                                >
                                    Get Started
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End::Services Content -->

            <!-- Niche Markets Section -->

            <main class="pt-16">
                <!-- Hero Section -->
                <section
                    class="relative bg-gradient-to-br from-blue-900 to-indigo-800 text-white overflow-hidden"
                >
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div
                        class="absolute inset-0 bg-cover bg-center"
                        style="
                            background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
                        "
                    ></div>

                    <div
                        class="container mx-auto px-4 py-24 md:py-32 relative z-10"
                    >
                        <div
                            class="flex flex-col md:flex-row items-center justify-between"
                        >
                            <!-- Left Side: Company Info -->
                            <div class="w-full md:w-1/2 mb-12 md:mb-0">
                                <h1
                                    class="text-5xl md:text-6xl font-bold mb-6 leading-tight"
                                >
                                    Innovate.<br />Transform.<br />Succeed.
                                </h1>
                                <p class="text-xl mb-8 text-gray-300">
                                    Empowering businesses with cutting-edge
                                    solutions for a digital future.
                                </p>
                                <div
                                    class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4"
                                >
                                    <a
                                        href="#"
                                        class="bg-white text-blue-900 font-semibold px-8 py-3 rounded-full hover:bg-blue-100 transition duration-300 text-center"
                                        >Get Started</a
                                    >
                                    <a
                                        href="#"
                                        class="border-2 border-white text-white font-semibold px-8 py-3 rounded-full hover:bg-white hover:text-blue-900 transition duration-300 text-center"
                                        >Learn More</a
                                    >
                                </div>
                            </div>

                            <!-- Right Side: Features -->
                            <div class="w-full md:w-1/2 md:pl-12">
                                <div
                                    class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl p-8 shadow-2xl"
                                >
                                    <h2 class="text-2xl font-semibold mb-6">
                                        Why MyCompany?
                                    </h2>
                                    <ul class="space-y-4">
                                        <li class="flex items-center">
                                            <svg
                                                class="w-6 h-6 mr-3 text-yellow-400"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M13 10V3L4 14h7v7l9-11h-7z"
                                                ></path>
                                            </svg>
                                            <span
                                                >Lightning-fast
                                                Performance</span
                                            >
                                        </li>
                                        <li class="flex items-center">
                                            <svg
                                                class="w-6 h-6 mr-3 text-green-400"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                                ></path>
                                            </svg>
                                            <span>Bank-grade Security</span>
                                        </li>
                                        <li class="flex items-center">
                                            <svg
                                                class="w-6 h-6 mr-3 text-purple-400"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"
                                                ></path>
                                            </svg>
                                            <span>AI-powered Insights</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Decorative Element -->
                    <div class="absolute bottom-0 left-0 right-0">
                        <svg
                            viewBox="0 0 1440 120"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                                fill="white"
                            />
                        </svg>
                    </div>
                </section>

                <!-- ... (rest of your main content) ... -->
            </main>

            <!-- Advertiser Section -->
            <div class="bg-[#667788] dark:bg-bgdark py-10 mt-8" id="advertiser">
                <div class="container mx-auto text-center">
                    <h2
                        class="text-3xl font-bold text-gray-800 dark:text-white mb-4"
                    >
                        Why Choose Medialytica?
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                        Boost your traffic, make more sales, and grow your
                        business. Explore our link-building services and fortify
                        your backlink portfolio.
                    </p>
                    <div class="grid lg:grid-cols-2 gap-6 items-center">
                        <div class="flex justify-center">
                            <img
                                src="{{
                                    asset('backend/assets/Contact-banner.jpg')
                                }}"
                                class="shadow-lg object-cover h-80 w-360"
                                alt="Advertiser meeting"
                            />
                        </div>
                        <div class="text-left space-y-4">
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                We have taken time to build an extensive network
                                of publishers, media outlets, and influencers.
                            </p>
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                We are committed to transparency and open
                                communication through regular updates and
                                detailed reports.
                            </p>
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                We assign every project a dedicated Account
                                Manager for efficiency and personalized support.
                            </p>
                            <p
                                class="flex items-center text-lg text-gray-700 dark:text-gray-300"
                            >
                                <svg
                                    class="w-6 h-6 text-blue-500 mr-2"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z"
                                    />
                                </svg>
                                We have fulfilled thousands of orders,
                                demonstrating our credibility and track record
                                of excellence
                            </p>
                            <a
                                href="#"
                                class="inline-block mt-6 py-3 px-6 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600 transition duration-300"
                            >
                                Contact Us
                                <i
                                    class="ri-arrow-right-line rtl:rotate-180"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::Advertiser Section -->

            <!-- Brand Growth Section -->
            <div class="py-16 bg-white">
                <div class="container mx-auto text-center">
                    <h2 class="text-3xl font-bold text-blue-900 mb-12">
                        We Are Here to Grow Your Brand Exponentially
                    </h2>
                    <div
                        class="grid grid-cols-1 sm:grid-cols-4 lg:grid-cols-3 xl:grid-cols-4 gap-8"
                    >
                        <!-- Service Card Template Start -->
                        <div
                            class="bg-custom-dark hover:bg-custom-dark p-6 rounded-lg shadow-lg text-center transition-colors duration-300"
                        >
                            <div
                                class="icon-container p-4 rounded-full mb-4 inline-block"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-8 h-8 text-white"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <rect
                                        x="2"
                                        y="2"
                                        width="20"
                                        height="20"
                                        rx="2"
                                        ry="2"
                                    ></rect>
                                    <line x1="8" y1="6" x2="16" y2="6"></line>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                    <line x1="8" y1="18" x2="16" y2="18"></line>
                                </svg>
                            </div>
                            <h3
                                class="card-title text-xl font-semibold mb-2 text-white"
                            >
                                Sponsored Posts
                            </h3>
                            <p class="text-gray-300">
                                Elevate your brand's presence with content that
                                resonates. Reach the right audience, drive
                                engagement and impact.
                            </p>
                        </div>
                        <!-- Service Card Template End -->

                        <!-- Repeat the Service Card Template for other services -->
                        <div
                            class="bg-custom-dark hover:bg-custom-dark p-6 rounded-lg shadow-lg text-center transition-colors duration-300"
                        >
                            <div
                                class="icon-container p-4 rounded-full mb-4 inline-block"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-8 h-8 text-white"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zM2 22c0-1.1.9-2 2-2h16c1.1 0 2 .9 2 2v1H2v-1z"
                                    />
                                </svg>
                            </div>
                            <h3
                                class="card-title text-xl font-semibold mb-2 text-white"
                            >
                                Link Insertion & Exchanges
                            </h3>
                            <p class="text-gray-300">
                                We are focused on contextual relevance, quality
                                assurance, SEO benefits, customized strategies
                                and search engine visibility.
                            </p>
                        </div>

                        <div
                            class="bg-custom-dark hover:bg-custom-dark p-6 rounded-lg shadow-lg text-center transition-colors duration-300"
                        >
                            <div
                                class="icon-container p-4 rounded-full mb-4 inline-block"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-8 h-8 text-white"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M3 3h18v18H3V3zm2 2v14h14V5H5zm8 4h3v6h-2v-3h-1v3H8v-3H7v3H5v-3H4v6H3v-8h6V9H4v2H3V5h14v6H13z"
                                    />
                                </svg>
                            </div>
                            <h3
                                class="card-title text-xl font-semibold mb-2 text-white"
                            >
                                Banner Advertising
                            </h3>
                            <p class="text-gray-300">
                                Elevate your online presence through banner
                                advertising, focusing on targeted placement,
                                measurable results, adaptability, and
                                customization.
                            </p>
                        </div>

                        <div
                            class="bg-custom-dark hover:bg-custom-dark p-6 rounded-lg shadow-lg text-center transition-colors duration-300"
                        >
                            <div
                                class="icon-container p-4 rounded-full mb-4 inline-block"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-8 h-8 text-white"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M5 20h14v-2H5v2zm14-9h-4v-2c0-2.22-1.78-4-4-4s-4 1.78-4 4v2H5c-1.1 0-2 .9-2 2v5h18v-5c0-1.1-.9-2-2-2z"
                                    />
                                </svg>
                            </div>
                            <h3
                                class="card-title text-xl font-semibold mb-2 text-white"
                            >
                                CPM Campaigns
                            </h3>
                            <p class="text-gray-300">
                                Drive conversions, we are focused on precision
                                targeting, strategic ad placement, budget
                                efficiency, transparent reporting, and
                                customization.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!-- Start:Footer Content-->
    <footer class="bg-custom-dark">
        <div class="container mx-auto p-0 md:p-8 xl:px-0">
            <div class="mx-auto max-w-7xl px-6 pb-10 pt-16">
                <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="space-y-4">
                        <div>
                            <a href="/">
                                <div
                                    class="flex items-center space-x-2 text-2xl font-medium"
                                >
                                    <span>
                                        <img
                                            src="https://www.svgrepo.com/show/452102/slack.svg"
                                            alt="AI Logo"
                                            width="64"
                                            height="64"
                                            class="w-16"
                                        />
                                    </span>
                                    <span class="text-white">Medialytica</span>
                                </div>
                            </a>
                        </div>
                        <div class="max-w-md pr-16 text-md text-gray-200">
                            Enhance productivity and efficiency with
                            cutting-edge artificial intelligence solutions for
                            your business operations.
                        </div>
                        <div class="flex space-x-2">
                            <a
                                href=""
                                target="_blank"
                                class="text-gray-200 hover:text-gray-200"
                            >
                                <span class="sr-only">Linkedin</span
                                ><svg
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                    class="h-6 w-6"
                                    aria-hidden="true"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </a>
                            <a
                                href=""
                                target="_blank"
                                class="text-gray-200 hover:text-gray-200"
                            >
                                <span class="sr-only">Twitter</span
                                ><svg
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                    class="h-6 w-6"
                                    aria-hidden="true"
                                >
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                                    ></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0"
                    >
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3
                                    class="text-md font-semibold leading-6 text-white"
                                >
                                    Our Solutions
                                </h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a
                                            href="/aiplatform"
                                            class="text-md leading-6 text-gray-300 hover:text-gray-50"
                                            >AI Platform
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/aialgorithms"
                                            class="text-md leading-6 text-gray-300 hover:text-gray-50"
                                            >AI Algorithms
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/industryapplications"
                                            class="text-md leading-6 text-gray-300 hover:text-gray-50"
                                            >Industry Applications
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <h3
                                    class="text-md font-semibold leading-6 text-white"
                                >
                                    Use Cases
                                </h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a
                                            href="/predictiveanalysis"
                                            class="text-md leading-6 text-gray-300 hover:text-gray-50"
                                            >Predictive Analysis
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/customerexperience"
                                            class="text-md leading-6 text-gray-300 hover:text-gray-50"
                                            >Customer Experience
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/automation"
                                            class="text-md leading-6 text-gray-300 hover:text-gray-50"
                                            >Automation
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3
                                    class="text-md font-semibold leading-6 text-white"
                                >
                                    Resources
                                </h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a
                                            href="/pricing"
                                            class="text-md leading-6 text-gray-300 hover:text-gray-50"
                                            >Pricing
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/blog"
                                            class="text-md leading-6 text-gray-300 hover:text-gray-50"
                                            >Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/casestudies"
                                            class="text-md leading-6 text-gray-300 hover:text-gray-50"
                                            >Case Studies
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/terms"
                                            class="text-md leading-6 text-gray-300 hover:text-gray-50"
                                            >Terms of Service
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/privacy"
                                            class="text-md leading-6 text-gray-300 hover:text-gray-50"
                                            >Privacy Policy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <h3
                                    class="text-md font-semibold leading-6 text-white"
                                >
                                    Company
                                </h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a
                                            href="/aboutus"
                                            class="text-md leading-6 text-gray-300 hover:text-gray-50"
                                            >About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/careers"
                                            class="text-md leading-6 text-gray-300 hover:text-gray-50"
                                            >Careers
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/contactus"
                                            class="text-md leading-6 text-gray-300 hover:text-gray-50"
                                            >Contact Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="mt-16 border-t border-gray-400/30 pt-8 sm:mt-20 lg:mt-24"
                >
                    <div class="text-md text-center text-white">
                        Copyright © 2024 . Crafted with
                        <span class="text-gray-50">♥</span> by AI enthusiasts at
                        <a rel="noopener" href="/">AIOps. </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End:Footer Content-->

    <!-- Back To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
    </div>

    <div id="responsive-overlay"></div>
    <!-- Tabulator JS -->
    <script src="{{
            asset('backend/assets/libs/tabulator-tables/js/tabulator.min.js')
        }}"></script>

    <!-- Choices JS -->
    <script src="{{
            asset(
                'backend/assets/libs/choices.js/public/assets/scripts/choices.min.js'
            )
        }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const tables = [
                "telegram",
                "facebook",
                "instagram",
                "twitter",
                "whatsapp",
                "tiktok",
                "youtube",
            ];
            let activeTable = "telegram"; // Default table

            // Function to switch tables
            function switchTable(table) {
                if (tables.includes(table)) {
                    activeTable = table;
                    renderTables();
                }
            }

            // Function to render tables based on activeTable
            function renderTables() {
                tables.forEach((t) => {
                    const tableElement = document.getElementById(`${t}-table`);
                    if (tableElement) {
                        tableElement.style.display =
                            t === activeTable ? "table" : "none";
                    }
                });
            }

            // Add event listeners to buttons
            document.querySelectorAll(".table-button").forEach((button) => {
                button.addEventListener("click", () => {
                    const tableName = button.getAttribute("data-table");
                    switchTable(tableName);
                });
            });

            // Initial rendering
            renderTables();
        });
    </script>

    <script>
        function placeOrder(publisherId) {
            fetch('{{ route('order.place') }}', {  // Use named route for the URL
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ publisher_id: publisherId }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Order placed successfully!');
                } else {
                    alert('There was an error placing the order.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('There was an error placing the order.');
            });
        }
    </script>

    <!-- JavaScript for Incremental Counters -->
    <script>
        function incrementCounter(elementId, targetNumber, duration) {
            const element = document.getElementById(elementId);
            let count = 0;
            const increment = targetNumber / (duration / 100);

            const interval = setInterval(() => {
                count += increment;
                if (count >= targetNumber) {
                    count = targetNumber;
                    clearInterval(interval);
                }
                element.innerText = Math.floor(count);
            }, 100);
        }

        window.onload = () => {
            incrementCounter("registeredWebsites", 10000, 2000);
            incrementCounter("contentCreators", 850000, 3000);
            incrementCounter("registeredAdvertisers", 10000, 2000);
            incrementCounter("tasksCompleted", 10000, 2000);
        };
    </script>
</html>
