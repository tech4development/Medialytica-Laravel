<!DOCTYPE html>
<html lang="en" class="h-full" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medialytica</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('backend/assets/img/brand-logos/favicon.ico')}}">

  <!-- Style Css -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">

  <!-- Simplebar Css -->
  <link id="style" href="{{asset('backend/assets/libs/simplebar/simplebar.min.css')}}" rel="stylesheet">

  <!-- Color Picker Css -->
  <link rel="stylesheet" href="{{asset('backend/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">

  <!-- Swiper Css -->
  <link rel="stylesheet" href="{{asset('backend/assets/libs/swiper/swiper-bundle.min.css')}}">

   <!-- popperjs -->
      <script src="{{asset('backend/assets/libs/@popperjs/core/umd/popper.min.js')}}"></script>

      <!-- Color Picker JS -->
      <script src="{{asset('backend/assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script>

      <!-- Swiper JS -->
      <script src="{{asset('backend/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

      <!-- sidebar JS -->
      <script src="{{asset('backend/assets/js/defaultmenu.js')}}"></script>

      <!-- Internal Landing JS -->
      <script src="{{asset('backend/assets/js/landing.js')}}"></script>

      <!-- Switch JS -->
      <script src="{{asset('backend/assets/js/switch.js')}}"></script>

      <!-- Preline JS -->
      <script src="{{asset('backend/assets/libs/preline/preline.js')}}"></script>

      <!-- Simplebar JS -->
      <script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>

    <!-- Tabulator Css -->
    <link rel="stylesheet" href="{{asset('backend/assets/libs/tabulator-tables/css/tabulator.min.css')}}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{asset('backend/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">
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

<body class="landing-body">


    <div class="landing-page-wrapper relative">

      <!-- Start::Header -->
      <header class="header custom-sticky !top-0 !w-full lg:hidden">
        <nav class="main-header" aria-label="Global">
          <div class="header-content justify-between">
            <div class="header-left">
              <!-- Navigation Toggle -->
              <div class="">
                <button type="button" class="sidebar-toggle">
                  <span class="sr-only">Toggle Navigation</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-headerprime" viewBox="0 0 24 24">
                    <path d="M24 0v24H0V0h24z" fill="none" opacity=".87"></path>
                    <path d="M18.41 16.59L13.82 12l4.59-4.59L17 6l-6 6 6 6 1.41-1.41zM6 6h2v12H6V6z"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div class="header-center">
              <!-- End Navigation Toggle -->
              <div class="responsive-logo my-auto">
                <a class="responsive-logo-light" href="index.html" aria-label="Brand"><img
                    src="../assets/img/brand-logos/desktop-logo.png" alt="logo" class="mx-auto"></a>
                <a class="responsive-logo-dark" href="index.html" aria-label="Brand"><img
                    src="../assets/img/brand-logos/desktop-dark.png" alt="logo" class="mx-auto"></a>
              </div>
            </div>
            <div class="header-right ltr:!ml-0 rtl:!mr-0">
              <button aria-label="button" type="button" class="hs-collapse-toggle ti-btn ti-btn-ghost-light m-0 py-1"
                id="headercollapse" data-hs-collapse="#headercollapse-heading">
                <i class="ri-more-2-line text-base"></i>
              </button>
              <div id="headercollapse-heading"
                class="hs-collapse w-full overflow-hidden transition-[height] duration-300 hidden absolute top-[4.45rem] inset-x-0 p-5 bg-white dark:bg-bgdark"
                aria-labelledby="headercollapse">
                <div class="flex space-x-3 rtl:space-x-reverse">
                  <a href="signup.html" class="ti-btn w-[6.375rem] ti-btn-dark m-0 p-2">Sign
                    Up</a>
                  <a href="signin.html" class="ti-btn w-[6.375rem] m-0 p-2 ti-btn-primary">Get Started</a>
                  <a aria-label="anchor" href="javascript:void(0);" class="ti-btn m-0 p-2 px-3 ti-btn-secondary"
                    data-hs-overlay="#hs-overlay-switcher"><i class="ri-settings-2-line animate-spin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <!-- End::Header -->

      <!-- Start::app-sidebar -->
      <aside class="app-sidebar" id="sidebar">
        <div class="container mx-auto lg:p-6 !p-0">
          <!-- Start::main-sidebar -->
          <div class="main-sidebar">
            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
              <div class="landing-logo-container my-auto hidden lg:block">
                <div class="responsive-logo">
                  <a class="responsive-logo-light" href="index.html" aria-label="Brand"><img
                      src="../assets/img/brand-logos/desktop-logo.png" alt="logo" class="mx-auto"></a>
                  <a class="responsive-logo-dark" href="index.html" aria-label="Brand"><img
                      src="../assets/img/brand-logos/desktop-dark.png" alt="logo" class="mx-auto"></a>
                </div>
              </div>
              <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
              </div>
              <ul class="main-menu ltr:!ml-auto rtl:!mr-auto">
                <!-- Start::slide -->
                <li class="slide">
                  <a class="side-menu__item" href="#home">
                    <span class="side-menu__label">Home</span>
                  </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                  <a href="" class="side-menu__item">
                    <span class="side-menu__label">What We Do</span>
                  </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                  <a href="" class="side-menu__item forparent">
                    <span class="side-menu__label">Services</span>

                  </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                  <a href="" class="side-menu__item">
                    <span class="side-menu__label">For Advertisers</span>
                  </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                  <a href="" class="side-menu__item">
                    <span class="side-menu__label">For Publishers</span>
                  </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                  <a href="" class="side-menu__item">
                    <span class="side-menu__label">For Social Publishers</span>
                  </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                  <a href="" class="side-menu__item">
                    <span class="side-menu__label">Our Niches</span>
                  </a>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide">
                  <a href="" class="side-menu__item">
                    <span class="side-menu__label">Resourses</span>
                  </a>
                </li>
                <!-- End::slide -->

              </ul>
              <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
              </div>
              <div class="lg:flex hidden space-x-2 rtl:space-x-reverse">
                <a href="{{ route('login') }}" class="ti-btn w-[6.375rem] ti-btn-dark m-0 p-2">Log
                  In</a>
                <a href="{{ route('register') }}" class="ti-btn w-[6.375rem] m-0 p-2 ti-btn-primary">Register</a>

              </div>
            </nav>
            <!-- End::nav -->

          </div>
          <!-- End::main-sidebar -->
        </div>
      </aside>
      <!-- End::app-sidebar -->

      <!-- Start::main-content -->
      <div class="main-content landing-main !p-0">
                <div class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('backend/assets/Home Leaderboard.jpg') }}');">
                <!-- Gray overlay -->
                <div class="absolute inset-0 bg-gray-900 opacity-50"></div>                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="container mx-auto h-full flex flex-col justify-center items-center px-6 py-12 relative z-10">
                    <h1 class="text-5xl font-bold text-white text-center mb-12">We Connect Advertisers to Content Creators</h1>
                    <div class="flex flex-col md:flex-row gap-6 w-full">
                        <!-- Card 1 -->
                        <div class="flex-1 bg-white rounded-lg shadow-lg p-6 text-center">
                            <h2 class="text-xl font-bold mb-4">Advertiser or Brand</h2>
                            <p class="text-gray-600 mb-4">I am an SEO or media buying professional interested in paid content partnerships such as sponsored posts, link insertion, and banner advertising..</p>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded">Get Started</button>
                        </div>
                        <!-- Card 2 -->
                        <div class="flex-1 bg-white rounded-lg shadow-lg p-6 text-center">
                            <h2 class="text-xl font-bold mb-4">Media or Blog</h2>
                            <p class="text-gray-600 mb-4">I have a blog or website and would like to receive orders, publish promotional content, and get paid</p>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded">Get Started</button>
                        </div>
                        <!-- Card 3 -->
                        <div class="flex-1 bg-white rounded-lg shadow-lg p-6 text-center">
                            <h2 class="text-xl font-bold mb-4">Social Publishers</h2>
                            <p class="text-gray-600 mb-4">I am a charismatic influencer or social media bigwig. I would like to showcase branded content on my social pages and get paid.</p>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded">Get Started</button>
                        </div>
                        <!-- Card 4 -->
                        <div class="flex-1 bg-white rounded-lg shadow-lg p-6 text-center">
                            <h2 class="text-xl font-bold mb-4">Write for me</h2>
                            <p class="text-gray-600 mb-4">I am a business person or brand manager and would like professional SEO-friendly blog articles to promote my products and services.</p>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- New Section with Counters -->
        <div class="container mx-auto py-12 text-center">
            <h2 class="text-3xl font-bold mb-8">Our Achievements</h2>
            <div class="flex flex-col md:flex-row justify-around items-center gap-8">
                <div class="flex-1">
                    <h3 class="text-3xl font-bold text-blue-500">10k+</h3>
                    <p class="text-xl text-gray-700">Registered Websites</p>
                </div>
                <div class="flex-1">
                    <h3 class="text-3xl font-bold text-blue-500">850k+</h3>
                    <p class="text-xl text-gray-700">Content Creators</p>
                </div>
                <div class="flex-1">
                    <h3 class="text-3xl font-bold text-blue-500">10k+</h3>
                    <p class="text-xl text-gray-700">Registered Advertisers</p>
                </div>
                <div class="flex-1">
                    <h3 class="text-3xl font-bold text-blue-500">10k+</h3>
                    <p class="text-xl text-gray-700">Tasks Completed</p>
                </div>
            </div>
        </div>



        <!-- Advertiser Section -->
        <div class="bg-white dark:bg-bgdark py-10" id="advertiser">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">Are you an Advertiser or a Media Buyer?</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                    Boost your traffic, make more sales, and grow your business. Explore our link-building services and fortify your backlink portfolio.
                </p>
                <div class="grid lg:grid-cols-2 gap-6 items-center">
                    <div class="flex justify-center">
                        <img src="{{ asset('backend/assets/advertisers.jpg') }}" class="shadow-lg object-cover h-60 w-360" alt="Advertiser meeting">
                    </div>
                    <div class="text-left space-y-4">
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            Browse our database with 10K+ publishers
                        </p>
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            Select a site and make your order
                        </p>
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            Get your content published within 24 hours
                        </p>
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            Free account, no fees, no credit card needed
                        </p>
                        <a href="#"
                           class="inline-block mt-6 py-3 px-6 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600 transition duration-300">
                            Get Started as an Advertiser <i class="ri-arrow-right-line rtl:rotate-180"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::Advertiser Section -->

        <!-- Advertiser Section -->
        <div class="bg-white dark:bg-bgdark py-10" id="advertiser">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">Are you an Advertiser or a Media Buyer?</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                    Boost your traffic, make more sales, and grow your business. Explore our link-building services and fortify your backlink portfolio.
                </p>
                <div class="grid lg:grid-cols-2 gap-6 items-center">
                    <!-- Image on the Left -->
                    <div class="flex justify-center lg:order-2">
                        <img src="{{ asset('backend/assets/Contact-banner.jpg') }}" class="shadow-lg object-cover h-60 w-360" alt="Advertiser meeting">
                    </div>
                    <!-- Text on the Right -->
                    <div class="text-left space-y-4 lg:order-1">
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            Browse our database with 10K+ publishers
                        </p>
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            Select a site and make your order
                        </p>
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            Get your content published within 24 hours
                        </p>
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            Free account, no fees, no credit card needed
                        </p>
                        <a href="#"
                           class="inline-block mt-6 py-3 px-6 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600 transition duration-300">
                            Get Started as an Advertiser <i class="ri-arrow-right-line rtl:rotate-180"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::Advertiser Section -->





        <!-- Social Publisher Section -->
        <div class="bg-white dark:bg-bgdark py-10" id="advertiser">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">Are you an Advertiser or a Media Buyer?</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                    Boost your traffic, make more sales, and grow your business. Explore our link-building services and fortify your backlink portfolio.
                </p>
                <div class="grid lg:grid-cols-2 gap-6 items-center">
                    <div class="flex justify-center">
                        <img src="{{ asset('backend/assets/advertisers.jpg') }}" class="shadow-lg object-cover h-60 w-360" alt="Advertiser meeting">
                    </div>
                    <div class="text-left space-y-4">
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            Browse our database with 10K+ publishers
                        </p>
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            Select a site and make your order
                        </p>
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            Get your content published within 24 hours
                        </p>
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            Free account, no fees, no credit card needed
                        </p>
                        <a href="#"
                           class="inline-block mt-6 py-3 px-6 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600 transition duration-300">
                            Get Started as an Advertiser <i class="ri-arrow-right-line rtl:rotate-180"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::Social Publisher Section -->

      </div>
    </div>

      <!-- End::main-content -->
    <div class="">
          <!-- Start::Services Content -->
          <div id="services" class="container mx-auto py-12" style="background-color: #F5F7FA; 100">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">What We Do</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-4 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Service Card Template Start -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="2" ry="2"></rect>
                            <line x1="8" y1="6" x2="16" y2="6"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                            <line x1="8" y1="18" x2="16" y2="18"></line>
                        </svg>
                    </div>
                    <h3 class="card-title text-xl font-semibold mb-2">Sponsored Posts</h3>
                    <p class="text-gray-600">Elevate your brand's presence with content that resonates. Reach the right audience, drive engagement and impact.</p>
                </div>
                <!-- Service Card Template End -->
                <!-- Repeat the Service Card Template for other services by changing the content inside the divs -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zM2 22c0-1.1.9-2 2-2h16c1.1 0 2 .9 2 2v1H2v-1z"/>
                        </svg>
                    </div>
                    <h3 class="card-title text-xl font-semibold mb-2">Link Insertion & Exchanges</h3>
                    <p class="text-gray-600">We are focused on contextual relevance, quality assurance, SEO benefits, customized strategies and search engine visibility.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 3h18v18H3V3zm2 2v14h14V5H5zm8 4h3v6h-2v-3h-1v3H8v-3H7v3H5v-3H4v6H3v-8h6V9H4v2H3V5h14v6H13z"/>
                        </svg>
                    </div>
                    <h3 class="card-title text-xl font-semibold mb-2">Banner Advertising</h3>
                    <p class="text-gray-600">Elevate your online presence through banner advertising, focusing on targeted placement, measurable results, adaptability, and customization.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 20h14v-2H5v2zm14-9h-4v-2c0-2.22-1.78-4-4-4s-4 1.78-4 4v2H5c-1.1 0-2 .9-2 2v5h18v-5c0-1.1-.9-2-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="card-title text-xl font-semibold mb-2">CPM Campaigns</h3>
                    <p class="text-gray-600">Drive conversions, we are focused on precision targeting, strategic ad placement, budget efficiency, transparent reporting, and customization.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a10 10 0 1 1-7.07 17.07A10 10 0 0 1 12 2zm1 14.5h-2v-2h2v2zm0-4h-2v-6h2v6z"/>
                        </svg>
                    </div>
                    <h3 class="card-title text-xl font-semibold mb-2">Social Publishers</h3>
                    <p class="text-gray-600">Ready to harness the power of influencers and social publishers to take your brand to new heights? Let's discuss how our influencer marketing solutions can help you achieve your business goals.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                        </svg>
                    </div>
                    <h3 class="card-title text-xl font-semibold mb-2">TV/Radio Advertising</h3>
                    <p class="text-gray-600">Let's Take Your Message to the Airwaves. Ready to elevate your brand's visibility through TV and radio advertising? Let's explore how we can help you achieve your advertising goals.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M5 12a7 7 0 1 0 14 0M5 12a7 7 0 0 1 14 0"/>
                        </svg>
                    </div>
                    <h3 class="card-title text-xl font-semibold mb-2">Write For Me Services</h3>
                    <p class="text-gray-600">Save time and get your message across effectively. Our content experts will create high-quality, customized content tailored to your brand and audience.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a10 10 0 1 1-7.07 17.07A10 10 0 0 1 12 2zm1 14.5h-2v-2h2v2zm0-4h-2v-6h2v6z"/>
                        </svg>
                    </div>
                    <h3 class="card-title text-xl font-semibold mb-2">Content Strategy</h3>
                    <p class="text-gray-600">Unlock your brand's full potential with our comprehensive content strategy services, tailored to engage, inform, and convert your audience.</p>
                </div>
            </div>
        </div>
        <!-- End::Services Content -->

        <!-- Niche Markets Section -->
        <div class="relative bg-white">
        <div class="container mx-auto py-12 bg-white">
            <div class="text-center max-w-2xl mx-auto mb-12 pt-12">
                <h2 class="text-3xl font-bold text-gray-800 mt-8">Our Niche Markets</h2>
                <p class="text-gray-600">We have diverse niches to accommodate a broad audience and all your content needs.</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-8 text-center">
                <!-- General Posts -->
                <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">General Posts</h3>
                </div>

                <!-- Betting and Casinos -->
                <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="6" width="20" height="12" rx="2" ry="2"></rect>
                            <line x1="2" y1="10" x2="22" y2="10"></line>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Betting and Casinos</h3>
                </div>

                <!-- Real Estate -->
                <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 12l2-2 3 3 4-4 4 4 4-4 2 2v7H3v-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Real Estate</h3>
                </div>

                <!-- Automotive -->
                <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="11" width="18" height="10" rx="2" ry="2"></rect>
                            <path d="M16 1l-4 4-4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Automotive</h3>
                </div>

                <!-- FinTech -->
                <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="10" rx="2" ry="2"></rect>
                            <line x1="12" y1="4" x2="12" y2="20"></line>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">FinTech</h3>
                </div>

                <!-- Fashion -->
                <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M12 2v4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Fashion</h3>
                </div>

                <!-- Fitness -->
                <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20"></path>
                            <line x1="4" y1="12" x2="20" y2="12"></line>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Fitness</h3>
                </div>

                <!-- Gadgets & Appliances -->
                <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="11" width="18" height="10" rx="2" ry="2"></rect>
                            <line x1="7" y1="11" x2="7" y2="17"></line>
                            <line x1="17" y1="11" x2="17" y2="17"></line>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Gadgets & Appliances</h3>
                </div>

                <!-- CBD -->
                <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M16 8v8"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">CBD</h3>
                </div>

                <!-- Active Lifestyles -->
                <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Active Lifestyles</h3>
                </div>
                 <!-- Active Lifestyles -->
                 <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Active Lifestyles</h3>
                </div>
                 <!-- Active Lifestyles -->
                 <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Active Lifestyles</h3>
                </div>
                 <!-- Active Lifestyles -->
                 <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Active Lifestyles</h3>
                </div>
                 <!-- Active Lifestyles -->
                 <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Active Lifestyles</h3>
                </div>
                 <!-- Active Lifestyles -->
                 <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Active Lifestyles</h3>
                </div>
                 <!-- Active Lifestyles -->
                 <div class="flex flex-col items-center">
                    <div class="icon-container p-4 rounded-full mb-4 inline-block text-[#D4AF37]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Active Lifestyles</h3>
                </div>

            </div>

        </div>
        <div class="text-center">
            <a href="#"
               class=" w-full max-w-xs py-3 px-6 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600 transition duration-300 text-center">
                CLICK HERE TO VIEW OUR NICHE MARKETS
            </a>
        </div>
        </div>

        <!-- Write For Me Section -->
        {{-- <div class="relative bg-blue">
        <div class="bg-blue py-12">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 text-white mb-8 md:mb-0">
                    <h2 class="text-3xl font-bold mb-4">Write For Me</h2>
                    <p class="mb-4">
                        We write professional SEO articles, web page copy, and guest articles to expand your digital footprint and visibility on the internet.
                    </p>
                    <p>
                        <a href="#" class="text-[#00c0ff] hover:underline">Contact us</a> today for a continuous supply of tailored digital PR content, quality essays, product descriptions, and guest blogs to help you establish a digital presence and build authority in your niche.
                    </p>
                    <div class="mt-6">
                        <a href="#" class="bg-[#D4AF37] text-white py-2 px-6 rounded-full inline-flex items-center hover:bg-[#b8962f] transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 20h9"></path>
                                <path d="M12 4V20"></path>
                            </svg>
                            WRITE FOR ME
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="/mnt/data/write for me.png" alt="Write For Me Image" class="w-64 h-64 rounded-full">
                </div>
            </div>
        </div>
        </div> --}}

        <img src="{{ asset('backend/assets/Contact-banner.jpg') }}" class="shadow-lg object-cover h-60 w-360" alt="Advertiser meeting">

        <!-- Advertiser Section -->
        <div class="bg-[#667788] dark:bg-bgdark py-10 mt-8" id="advertiser">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">Why Choose Medialytica?</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                    Boost your traffic, make more sales, and grow your business. Explore our link-building services and fortify your backlink portfolio.
                </p>
                <div class="grid lg:grid-cols-2 gap-6 items-center">
                    <div class="flex justify-center">
                        <img src="../assets/img/advertiser.png" class="rounded-lg shadow-lg object-cover" alt="Advertiser meeting">
                    </div>
                    <div class="text-left space-y-4">
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            We have taken time to build an extensive network of publishers, media outlets, and influencers.
                        </p>
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            We are committed to transparency and open communication through regular updates and detailed reports.
                        </p>
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            We assign every project a dedicated Account Manager for efficiency and personalized support.
                        </p>
                        <p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
                            </svg>
                            We have fulfilled thousands of orders, demonstrating our credibility and track record of excellence

                        </p>
                        <a href="#"
                           class="inline-block mt-6 py-3 px-6 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600 transition duration-300">
                           Contact Us <i class="ri-arrow-right-line rtl:rotate-180"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::Advertiser Section -->
    </div>



  </body>

    <!-- Start:Footer Content-->
    {{-- <footer class="section !pb-0 bg-bgdark">
      <div class=" border-b border-white/10 dark:border-white/10 pb-8">
        <div class="container mx-auto">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 lg:col-span-4">
              <div class="space-y-4 px-4">
                <div>
                  <h6 class="text-white text-lg leading-none">About</h6>
                  <hr class="w-10 border-t-4 border-primary inline-block mx-auto">
                </div>
                <img src="../assets/img/brand-logos/desktop-dark.png" class="w-auto" alt="img">
                <p class="text-base text-gray-400 dark:text-gray-400">Lorem, ipsum dolor sit amet consectetur
                  adipisicing
                  elit. Magni reprehenderit tenetur sapiente, corrupti voluptatibus numquam asperiores temporibus id
                  molestiae cum voluptate nam.</p>
                <div class="flex space-x-1 rtl:space-x-reverse">
                  <button aria-label="button" type="button"
                    class="m-0 rounded-full p-2 ti-btn ti-btn-outline !border-0 bg-white/5 dark:bg-white/5 text-gray-400 dark:text-gray-400">
                    <i class="ri ri-github-line text-lg leading-none"></i>
                  </button>
                  <button aria-label="button" type="button"
                    class="m-0 rounded-full p-2 ti-btn ti-btn-outline !border-0 bg-white/5 dark:bg-white/5 text-gray-400 dark:text-gray-400">
                    <i class="ri ri-instagram-line text-lg leading-none"></i>
                  </button>
                  <button aria-label="button" type="button"
                    class="m-0 rounded-full p-2 ti-btn ti-btn-outline !border-0 bg-white/5 dark:bg-white/5 text-gray-400 dark:text-gray-400">
                    <i class="ri ri-twitter-line text-lg leading-none"></i>
                  </button>
                  <button aria-label="button" type="button"
                    class="m-0 rounded-full p-2 ti-btn ti-btn-outline !border-0 bg-white/5 dark:bg-white/5 text-gray-400 dark:text-gray-400">
                    <i class="ri ri-linkedin-line text-lg leading-none"></i>
                  </button>
                  <button aria-label="button" type="button"
                    class="m-0 rounded-full p-2 ti-btn ti-btn-outline !border-0 bg-white/5 dark:bg-white/5 text-gray-400 dark:text-gray-400">
                    <i class="ri ri-google-line text-lg leading-none"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-4">
              <div class="grid lg:grid-cols-2 gap-6">
                <div class="space-y-3 px-4">
                  <div>
                    <h6 class="text-white text-lg leading-none">Our Services</h6>
                    <hr class="w-10 border-t-4 border-primary inline-block mx-auto">
                  </div>
                  <ul class="space-y-3 text-gray-400 dark:text-gray-400">
                    <li><a href="javascript:void(0);">Our Team</a></li>
                    <li><a href="javascript:void(0);">Contact US</a></li>
                    <li><a href="javascript:void(0);">About</a></li>
                    <li><a href="javascript:void(0);">Services</a></li>
                    <li><a href="javascript:void(0);">Blog</a></li>
                    <li><a href="javascript:void(0);">Terms and Services</a></li>
                  </ul>
                </div>
                <div class="space-y-3 px-4">
                  <div>
                    <h6 class="text-white text-lg leading-none">Our Pages</h6>
                    <hr class="w-10 border-t-4 border-primary inline-block mx-auto">
                  </div>
                  <ul class="space-y-3 text-gray-400 dark:text-gray-400">
                    <li><a href="javascript:void(0);">Email</a></li>
                    <li><a href="javascript:void(0);">Profile</a></li>
                    <li><a href="javascript:void(0);">Timeline</a></li>
                    <li><a href="javascript:void(0);">Projects</a></li>
                    <li><a href="javascript:void(0);">Contacts</a></li>
                    <li><a href="javascript:void(0);">Protfolio</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-4">
              <div class="space-y-3 px-4">
                <div>
                  <h6 class="text-white text-lg leading-none">Contact Us</h6>
                  <hr class="w-10 border-t-4 border-primary inline-block mx-auto">
                </div>
                <ul class="space-y-3 text-gray-400 dark:text-gray-400">
                  <li> <a href="javascript:void(0)" class="inline-flex"><i
                        class="text-white ri-home-8-line ltr:mr-2 rtl:ml-2"></i> New
                      York, Weq
                      Street, NY 10012, US</a> </li>
                  <li> <a href="javascript:void(0)" class="inline-flex"><i
                        class="text-white ri-mail-line ltr:mr-2 rtl:ml-2"></i>info12323@example.com</a></li>
                  <li> <a href="javascript:void(0)" class="inline-flex"><i
                        class="text-white ri-phone-line ltr:mr-2 rtl:ml-2"></i> + 01
                      234 567 88</a>
                  </li>
                  <li> <a href="javascript:void(0)" class="inline-flex"><i
                        class="text-white ri-printer-line ltr:mr-2 rtl:ml-2"></i> + 01
                      234 567
                      89</a> </li>
                  <li> <a href="javascript:void(0)" class="inline-flex"><i
                        class="text-white ri-global-line ltr:mr-2 rtl:ml-2"></i>
                      https://Synto.com/</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <p class="text-center text-white">Copyright © <span id="year">2022</span> <a href="javascript:void(0)"
            class="text-primary"> Synto</a>. Designed with <span class="ri ri-heart-fill text-red-500"></span> by <a
            class="text-primary" href="javascript:void(0)"> Spruko </a> All rights reserved </p>
      </div>
    </footer> --}}
    <!-- End:Footer Content-->


    <!-- Back To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
      </div>

      <div id="responsive-overlay"></div>
       <!-- Tabulator JS -->
       <script src="{{asset('backend/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>

       <!-- Choices JS -->
       <script src="{{asset('backend/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>


</html>

