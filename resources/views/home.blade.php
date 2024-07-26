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
            <div class="relative bg-cover bg-center h-screen" style="background-image: url('path-to-your-background-image.jpg');">
                <div class="absolute inset-0 bg-black opacity-50"></div>
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
            <h2 class="text-4xl font-bold mb-8">Our Achievements</h2>
            <div class="flex flex-col md:flex-row justify-around items-center gap-8">
                <div class="flex-1">
                    <h3 class="text-5xl font-bold text-blue-500">10k+</h3>
                    <p class="text-xl text-gray-700">Registered Websites</p>
                </div>
                <div class="flex-1">
                    <h3 class="text-5xl font-bold text-blue-500">850k+</h3>
                    <p class="text-xl text-gray-700">Content Creators</p>
                </div>
                <div class="flex-1">
                    <h3 class="text-5xl font-bold text-blue-500">10k+</h3>
                    <p class="text-xl text-gray-700">Registered Advertisers</p>
                </div>
                <div class="flex-1">
                    <h3 class="text-5xl font-bold text-blue-500">10k+</h3>
                    <p class="text-xl text-gray-700">Tasks Completed</p>
                </div>
            </div>
        </div>

        <!-- New Section -->
        <div class="relative bg-cover bg-center h-screen" style="background-image: url('pexels-tima-miroshnichenko-5685765.jpg');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="container mx-auto h-full flex flex-col justify-center items-center px-6 py-12 relative z-10">
                <h2 class="text-4xl font-bold text-white text-center mb-8">Are you an Advertiser or a Media Buyer?</h2>
                <p class="text-xl text-white text-center mb-8">Boost your traffic, make more sales, and grow your business. Explore our link-building services and fortify your backlink portfolio.</p>

                <div class="bg-white bg-opacity-90 p-6 rounded-lg shadow-lg text-center max-w-lg">
                    <ul class="list-disc list-inside text-gray-800 mb-4">
                        <li class="mb-2">Browse our database with 10K+ publishers</li>
                        <li class="mb-2">Select a site and make your order</li>
                        <li class="mb-2">Get your content published within 24 hours</li>
                        <li>Free account, no fees, no credit card needed</li>
                    </ul>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Get Started as an Advertiser</button>
                </div>
            </div>
        </div>

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

      </div>
      <!-- End::main-content -->

    </div>

    <!-- Back To Top -->
    <div class="scrollToTop">
      <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
    </div>

    <div id="responsive-overlay"></div>



  </body>

</html>

