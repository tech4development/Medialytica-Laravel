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

        <!-- Advertisers Section -->
           <div class="bg-white dark:bg-bgdark" id="about">
            <div class="section container mx-auto">
              <div class="grid lg:grid-cols-2 gap-6">
                <div class="relative bg-gradient-radial from-gray-100 to-white dark:from-black/20 dark:to-bgdark">
                  <div class="relative h-96 overflow-clip py-10 sm:h-[32rem] lg:p-20">
                    <img src="../assets/img/landing/3.png"
                      class="mx-auto h-80 w-96 rounded-t-sm object-cover object-top shadow-2xl dark:border-transparent sm:h-[28rem]"
                      alt="">
                  </div>
                </div>
                <div class="my-auto">
                  <div class="space-y-2">
                    <h2
                      class="section-title text-center text-3xl font-bold text-gray-800 dark:text-white md:text-4xl lg:text-5xl">
                      <span class="">Mobile Responsive View</span>
                    </h2>
                    <h5 class="font-medium text-2xl text-gray-800 dark:text-white">We Help to Build Your Dream Project.</h5>
                    <h6 class="font-normal text-base">Meet our team who are experts in Web designing and Development.</h6>
                    <p class="text-base text-gray-500 dark:text-white/70">
                      It is a long established fact that a reader will be distracted by the readable content of a page
                      when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                      distribution of letters, as opposed to using 'Content here, content here', making it look like
                      readable English. .
                    </p>
                    <p class="text-base text-gray-500 dark:text-white/70">
                      There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form, by injected humour, or randomised words which don't look even slightly
                      believable. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
                      structures, to generate Lorem Ipsum which looks reasonable.
                    </p>
                  </div>
                  <a href="about.html" class="py-2 px-3 ti-btn m-0 ti-btn-primary mt-6">
                    Read More <i class="ri-arrow-right-line rtl:rotate-180"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- End::Advertisers Section -->

        <!-- Start::Publishers Section-->
        <div class="" id="our-mission">
            <div class="section container mx-auto">
              <div class="grid lg:grid-cols-2 gap-6">
                <div class="my-auto">
                  <div class="space-y-2">
                    <h2
                      class="section-title text-center text-3xl font-bold text-gray-800 dark:text-white md:text-4xl lg:text-5xl">
                      <span class="">Responsive Template</span>
                    </h2>
                    <div class="space-y-3">
                      <p class="text-base text-gray-500 dark:text-white/70">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. .
                      </p>
                    </div>
                    <div class="space-y-3">
                      <p class="text-base text-gray-500 dark:text-white/70">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
                        structures, to generate Lorem Ipsum which looks reasonable.
                      </p>
                    </div>
                  </div>
                  <a href="about.html" class="py-2 px-3 ti-btn m-0 ti-btn-primary mt-6">
                    Get Started <i class="ri-arrow-right-line rtl:rotate-180"></i>
                  </a>
                </div>
                <div class="relative bg-gradient-radial from-white to-gray-100 dark:from-bgdark dark:to-black/20">
                  <div class="relative h-96 overflow-clip py-10 sm:h-[32rem] lg:p-20">
                    <img src="../assets/img/landing/4.png"
                      class="mx-auto h-80 w-96 rounded-t-sm border object-cover object-top shadow-2xl dark:border-transparent sm:h-[28rem]"
                      alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End::Publishers Content -->

        <!-- Start::Social Publishers -->
        <div class="bg-white dark:bg-bgdark" id="about">
            <div class="section container mx-auto">
              <div class="grid lg:grid-cols-2 gap-6">
                <div class="relative bg-gradient-radial from-gray-100 to-white dark:from-black/20 dark:to-bgdark">
                  <div class="relative h-96 overflow-clip py-10 sm:h-[32rem] lg:p-20">
                    <img src="../assets/img/landing/3.png"
                      class="mx-auto h-80 w-96 rounded-t-sm object-cover object-top shadow-2xl dark:border-transparent sm:h-[28rem]"
                      alt="">
                  </div>
                </div>
                <div class="my-auto">
                  <div class="space-y-2">
                    <h2
                      class="section-title text-center text-3xl font-bold text-gray-800 dark:text-white md:text-4xl lg:text-5xl">
                      <span class="">Mobile Responsive View</span>
                    </h2>
                    <h5 class="font-medium text-2xl text-gray-800 dark:text-white">We Help to Build Your Dream Project.</h5>
                    <h6 class="font-normal text-base">Meet our team who are experts in Web designing and Development.</h6>
                    <p class="text-base text-gray-500 dark:text-white/70">
                      It is a long established fact that a reader will be distracted by the readable content of a page
                      when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                      distribution of letters, as opposed to using 'Content here, content here', making it look like
                      readable English. .
                    </p>
                    <p class="text-base text-gray-500 dark:text-white/70">
                      There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form, by injected humour, or randomised words which don't look even slightly
                      believable. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
                      structures, to generate Lorem Ipsum which looks reasonable.
                    </p>
                  </div>
                  <a href="about.html" class="py-2 px-3 ti-btn m-0 ti-btn-primary mt-6">
                    Read More <i class="ri-arrow-right-line rtl:rotate-180"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
         <!-- Start::row-2 -->
         <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
              <div class="box">
                <div class="box-header">
                    <h2 class="text-3xl font-bold mb-8 text-center">Browse our database of 10K+ Publishers</h2>
                </div>
                <div class="box-body space-y-3">
                  <div class="sortable-data">
                    <div class="sm:grid grid-cols-12 gap-6 space-y-2 sm:space-y-0">
                      <div class="col-span-12 lg:!col-span-2 sm:col-span-3">
                        <select id="sort-field" class="ti-form-select " data-trigger>
                          <option value="publisher_name" selected>Publishers</option>
                          <option value="niches">Niches</option>
                          <option value="da">DA</option>
                          <option value="dr">DR</option>
                          <option value="traffic">Traffic</option>
                          <option value="country">Country</option>
                          <option value="price">Price</option>
                        </select>
                      </div>
                      {{-- <div class="col-span-12 lg:!col-span-2 sm:col-span-3">
                        <select id="sort-direction" class="ti-form-select" data-trigger>
                          <option value="asc" selected>asc</option>
                          <option value="desc">desc</option>
                        </select>
                      </div> --}}
                      <button type="button" class="ti-btn ti-btn-primary py-2 col-span-12 lg:!col-span-2 sm:col-span-3" id="sort-trigger">Filter</button>
                    </div>
                  </div>
                  <div class="overflow-hidden table-bordered">
                    <div id="sort-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"><div class="container mx-auto py-12">
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2 border-b-2 border-gray-300">Publishers</th>
                                        <th class="px-4 py-2 border-b-2 border-gray-300">Niches</th>
                                        <th class="px-4 py-2 border-b-2 border-gray-300">DA</th>
                                        <th class="px-4 py-2 border-b-2 border-gray-300">DR</th>
                                        <th class="px-4 py-2 border-b-2 border-gray-300">Traffic</th>
                                        <th class="px-4 py-2 border-b-2 border-gray-300">Country</th>
                                        <th class="px-4 py-2 border-b-2 border-gray-300">Price</th>
                                        <th class="px-4 py-2 border-b-2 border-gray-300">Order Now</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4 py-2 border-b border-gray-200">Publisher 1</td>
                                        <td class="px-4 py-2 border-b border-gray-200">Tech</td>
                                        <td class="px-4 py-2 border-b border-gray-200">50</td>
                                        <td class="px-4 py-2 border-b border-gray-200">60</td>
                                        <td class="px-4 py-2 border-b border-gray-200">20,000</td>
                                        <td class="px-4 py-2 border-b border-gray-200">USA</td>
                                        <td class="px-4 py-2 border-b border-gray-200">$150</td>
                                        <td class="px-4 py-2 border-b border-gray-200">
                                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                                Order Now
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 border-b border-gray-200">Publisher 2</td>
                                        <td class="px-4 py-2 border-b border-gray-200">Health</td>
                                        <td class="px-4 py-2 border-b border-gray-200">45</td>
                                        <td class="px-4 py-2 border-b border-gray-200">55</td>
                                        <td class="px-4 py-2 border-b border-gray-200">15,000</td>
                                        <td class="px-4 py-2 border-b border-gray-200">UK</td>
                                        <td class="px-4 py-2 border-b border-gray-200">$100</td>
                                        <td class="px-4 py-2 border-b border-gray-200">
                                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                                Order Now
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 border-b border-gray-200">Publisher 3</td>
                                        <td class="px-4 py-2 border-b border-gray-200">Finance</td>
                                        <td class="px-4 py-2 border-b border-gray-200">55</td>
                                        <td class="px-4 py-2 border-b border-gray-200">65</td>
                                        <td class="px-4 py-2 border-b border-gray-200">25,000</td>
                                        <td class="px-4 py-2 border-b border-gray-200">Canada</td>
                                        <td class="px-4 py-2 border-b border-gray-200">$200</td>
                                        <td class="px-4 py-2 border-b border-gray-200">
                                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                                Order Now
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>

                        </div>
                    </div></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End::row-2 -->



                <!-- Start::Services Content -->
                <div class="" id="services">
                    <div class="section container mx-auto space-y-6">
                    <div class="text-center max-w-[80rem] mx-auto mb-12">
                        <h2
                        class="justify-center section-title text-center text-3xl font-bold text-gray-800 dark:text-white md:text-4xl lg:text-5xl">
                        <span class="px-3">Our
                            Services</span>
                        </h2>
                        <p class="text-center text-gray-500 dark:text-white/70 text-base mt-4">Lorem ipsum dolor sit, amet
                        consectetur adipisicing
                        elit. Pariatur quam saepe enim maxime! Eligendi quas itaque voluptatibus, aspernatur illo, natus cumque
                        odio, molestiae obcaecati ducimus sit ratione recusandae perferendis culpa?</p>
                    </div>
                    <div class="grid md:grid-cols-2 lg:!grid-cols-4 gap-6">
                        <div class="box landing-service text-center mb-0">
                        <div class="box-body">
                            <div class="landing-service-img mb-4 avatar avatar-lg rounded-full bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-transparent stroke-white" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                            </svg>
                            </div>
                            <div>
                            <h3 class="text-gray-800 dark:text-white text-xl font-semibold my-auto mb-2">Design Quality</h3>
                            <p class="text-gray-500 dark:text-white/70 text-base">Lorem ipsum dolor sit, amet consectetur
                                adipisicing
                                elit. Pariatur quam saepe enim maxime!</p>
                            </div>
                        </div>
                        </div>
                        <div class="box landing-service text-center mb-0">
                        <div class="box-body">
                            <div class="landing-service-img mb-4 avatar avatar-lg rounded-full bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-transparent stroke-white" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                            </svg>
                            </div>
                            <div class="">
                            <h3 class="text-gray-800 dark:text-white text-xl font-semibold my-auto mb-2">Customization</h3>
                            <p class="text-gray-500 dark:text-white/70 text-base">Lorem ipsum dolor sit, amet consectetur
                                adipisicing
                                elit. Pariatur quam saepe enim maxime! </p>
                            </div>
                        </div>
                        </div>
                        <div class="box landing-service text-center mb-0">
                        <div class="box-body">
                            <div class="landing-service-img mb-4 avatar avatar-lg rounded-full bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-transparent stroke-white" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                            </div>
                            <div class="">
                            <h3 class="text-gray-800 dark:text-white text-xl font-semibold my-auto mb-2">Documentation</h3>
                            <p class="text-gray-500 dark:text-white/70 text-base">Lorem ipsum dolor sit, amet consectetur
                                adipisicing
                                elit. Pariatur quam saepe enim maxime!</p>
                            </div>
                        </div>
                        </div>
                        <div class="box landing-service text-center mb-0">
                        <div class="box-body">
                            <div class="landing-service-img mb-4 avatar avatar-lg rounded-full bg-primary p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-transparent stroke-white" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m0-3l-3-3m0 0l-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75" />
                            </svg>
                            </div>
                            <div class="">
                            <h3 class="text-gray-800 dark:text-white text-xl font-semibold my-auto mb-2">Regular Updates</h3>
                            <p class="text-gray-500 dark:text-white/70 text-base">Lorem ipsum dolor sit, amet consectetur
                                adipisicing
                                elit. Pariatur quam saepe enim maxime! </p>
                            </div>
                        </div>
                        </div>
                        <div class="box landing-service text-center mb-0">
                            <div class="box-body">
                            <div class="landing-service-img mb-4 avatar avatar-lg rounded-full bg-primary p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-transparent stroke-white" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m0-3l-3-3m0 0l-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75" />
                                </svg>
                            </div>
                            <div class="">
                                <h3 class="text-gray-800 dark:text-white text-xl font-semibold my-auto mb-2">Regular Updates</h3>
                                <p class="text-gray-500 dark:text-white/70 text-base">Lorem ipsum dolor sit, amet consectetur
                                adipisicing
                                elit. Pariatur quam saepe enim maxime! </p>
                            </div>
                            </div>
                        </div>
                        <div class="box landing-service text-center mb-0">
                            <div class="box-body">
                            <div class="landing-service-img mb-4 avatar avatar-lg rounded-full bg-primary p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-transparent stroke-white" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m0-3l-3-3m0 0l-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75" />
                                </svg>
                            </div>
                            <div class="">
                                <h3 class="text-gray-800 dark:text-white text-xl font-semibold my-auto mb-2">Regular Updates</h3>
                                <p class="text-gray-500 dark:text-white/70 text-base">Lorem ipsum dolor sit, amet consectetur
                                adipisicing
                                elit. Pariatur quam saepe enim maxime! </p>
                            </div>
                            </div>
                        </div>
                        <div class="box landing-service text-center mb-0">
                            <div class="box-body">
                            <div class="landing-service-img mb-4 avatar avatar-lg rounded-full bg-primary p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-transparent stroke-white" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m0-3l-3-3m0 0l-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75" />
                                </svg>
                            </div>
                            <div class="">
                                <h3 class="text-gray-800 dark:text-white text-xl font-semibold my-auto mb-2">Regular Updates</h3>
                                <p class="text-gray-500 dark:text-white/70 text-base">Lorem ipsum dolor sit, amet consectetur
                                adipisicing
                                elit. Pariatur quam saepe enim maxime! </p>
                            </div>
                            </div>
                        </div>
                        <div class="box landing-service text-center mb-0">
                            <div class="box-body">
                            <div class="landing-service-img mb-4 avatar avatar-lg rounded-full bg-primary p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-transparent stroke-white" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m0-3l-3-3m0 0l-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75" />
                                </svg>
                            </div>
                            <div class="">
                                <h3 class="text-gray-800 dark:text-white text-xl font-semibold my-auto mb-2">Regular Updates</h3>
                                <p class="text-gray-500 dark:text-white/70 text-base">Lorem ipsum dolor sit, amet consectetur
                                adipisicing
                                elit. Pariatur quam saepe enim maxime! </p>
                            </div>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
                <!-- End::Services Content -->





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
     <!-- Tabulator JS -->
     <script src="{{asset('backend/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>

     <!-- Choices JS -->
     <script src="{{asset('backend/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>


  </body>

</html>

