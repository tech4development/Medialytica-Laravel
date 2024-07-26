<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('backend/assets/img/brand-logos/favicon.ico')}}">

    <!-- Main JS -->
    <script src="{{asset('backend/assets/js/main.js')}}"></script>

    <!-- Style Css -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">

    <!-- Simplebar Css -->
    <link rel="stylesheet" href="{{asset('backend/assets/libs/simplebar/simplebar.min.css')}}">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{asset('backend/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">




</head>



<body class="">



    <div class="page">

        <!-- Start::app-sidebar -->
        <aside class="app-sidebar" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="" class="">
                    <img src="{{ asset('backend/assets/img/brand-logos/desktop-logo.png') }}" alt="logo" class="main-logo desktop-logo">
                    <img src="{{ asset('backend/assets/img/brand-logos/toggle-logo.png') }}" alt="logo" class="main-logo toggle-logo">
                    <img src="{{ asset('backend/assets/img/brand-logos/desktop-logo.png') }}" alt="logo" class="main-logo desktop-dark">
                    <img src="{{ asset('backend/assets/img/brand-logos/toggle-dark.png') }}" alt="logo" class="main-logo toggle-dark">

                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->

            <div class="main-sidebar " id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg></div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide  has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-home-8-line side-menu__icon"></i>
                                <span class="side-menu__label">Dashboard</span>

                            </a>
                        </li>
                        <!-- End::slide -->



                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Users</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-inbox-line side-menu__icon"></i>
                                <span class="side-menu__label">Publishers</span>

                            </a>

                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-cpu-line side-menu__icon"></i>
                                <span class="side-menu__label">Social Publishers</span>

                            </a>

                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-file-text-line side-menu__icon"></i>
                                <span class="side-menu__label">Editors</span>

                            </a>

                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-stack-line side-menu__icon"></i>
                                <span class="side-menu__label">Users</span>

                            </a>

                        </li>
                        <!-- End::slide -->



                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Settings</span></li>
                        <!-- End::slide__category -->

                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-map-pin-user-line side-menu__icon"></i>
                                <span class="side-menu__label">User Roles</span>

                            </a>
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-map-pin-user-line side-menu__icon"></i>
                                <span class="side-menu__label">User Permisiions</span>

                            </a>
                        </li>


                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Profile</span></li>
                        <!-- End::slide__category -->



                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-pie-chart-2-line side-menu__icon"></i>
                                <span class="side-menu__label">Edit Pofile</span>

                            </a>

                        </li>
                        <!-- End::slide -->


                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Exit</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-book-open-line side-menu__icon"></i>
                                <span class="side-menu__label">Log Out</span>

                            </a>
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-book-open-line side-menu__icon"></i>
                                <span class="side-menu__label">Home</span>

                            </a>

                        </li>
                        <!-- End::slide -->



                    </ul>

                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::Header -->
        <header class="header custom-sticky !top-0 !w-full">
          <nav class="main-header" aria-label="Global">
            <div class="header-content">
              <div class="header-left">
                <!-- Navigation Toggle -->
                <div class="">
                  <button type="button" class="sidebar-toggle !w-100 !h-100">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="ri-arrow-right-circle-line header-icon"></i>
                  </button>
                </div>
                <!-- End Navigation Toggle -->
              </div>

              <div class="responsive-logo">
                <a class="responsive-logo-dark" href="index.html" aria-label="Brand"><img
                    src="{{asset('../assets/img/brand-logos/desktop-logo.png')}}" alt="logo" class="mx-auto"></a>
                <a class="responsive-logo-light" href="index.html" aria-label="Brand"><img
                    src="{{asset('../assets/img/brand-logos/desktop-dark.png')}}" alt="logo" class="mx-auto"></a>
              </div>

              <div class="header-right">
                <div class="responsive-headernav">
                  <div class="header-nav-right">
                    <div class="header-search">
                      <button aria-label="button" type="button" data-hs-overlay="#search-modal"
                        class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                        <i class="ri-search-2-line header-icon"></i>
                      </button>
                    </div>
                    <div class="header-theme-mode hidden sm:block">
                      <a aria-label="anchor" class="hs-dark-mode-active:hidden flex hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                        href="javascript:;" data-hs-theme-click-value="dark">
                        <i class="ri-moon-line header-icon"></i>
                      </a>
                      <a aria-label="anchor" class="hs-dark-mode-active:flex hidden hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                        href="javascript:;" data-hs-theme-click-value="light">
                        <i class="ri-sun-line header-icon"></i>
                      </a>
                    </div>

                    <div class="header-profile hs-dropdown ti-dropdown" data-hs-dropdown-placement="bottom-right">
                      <button id="dropdown-profile" type="button"
                        class="hs-dropdown-toggle ti-dropdown-toggle gap-2 p-0 flex-shrink-0 h-8 w-8 rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                        <img class="inline-block rounded-full ring-2 ring-white dark:ring-white/10"
                          src="{{asset('backend/assets/img/users/1.jpg')}}" alt="Image Description">
                      </button>

                      <div class="hs-dropdown-menu ti-dropdown-menu border-0 w-[20rem]" aria-labelledby="dropdown-profile">
                        <div class="ti-dropdown-header !bg-primary flex">
                          <div class="ltr:mr-3 rtl:ml-3">
                            <img class="avatar shadow-none rounded-full !ring-transparent"
                              src="{{asset('backend/assets/img/users/1.jpg')}}" alt="profile-img">
                          </div>
                          <div>
                            <p class="ti-dropdown-header-title !text-white">John Doe</p>
                            <p class="ti-dropdown-header-content !text-white/50">Admin</p>
                          </div>
                        </div>
                        <div class="mt-2 ti-dropdown-divider">
                            <a href="{{ route('profile.edit') }}" class="ti-dropdown-item">
                                <i class="ti ti-user-circle text-lg"></i>
                                {{ __('Profile') }}
                            </a>


                          <a href="profile-settings.html" class="ti-dropdown-item">
                            <i class="ti ti-adjustments-horizontal text-lg"></i>
                            Settings
                          </a>

                          <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf

                            <a href="{{ route('logout') }}" class="ti-dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="ti ti-logout text-lg"></i>
                                Log Out
                            </a>
                        </form>

                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </nav>
        </header>
        <!-- End::Header -->

        <div class="content">

            <!-- Start::main-content -->
            <div class="main-content">

                <!-- Page Header -->
                <div class="block justify-between page-header md:flex">
                    <div>
                        <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> {{ ucfirst(Auth::user()->role) }} Dashboard</h3>
                    </div>
                    <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-sm">
                          <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                            Home
                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                          </a>
                        </li>
                        <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                            {{ ucfirst(Auth::user()->role) }} Dashboard
                        </li>
                    </ol>
                </div>
                <!-- Page Header Close -->


                <!-- Start::row-1 -->

                <div class="grid grid-cols-12 gap-x-5">
                    <div class="col-span-12 xxxl:col-span-2 md:col-span-4">
                        <div class="box">
                            <div class="box-body">
                                <div class="flex space-x-4 rtl:space-x-reverse">
                                    <div class="flex items-center justify-center ecommerce-icon px-0">
                                        <span class="rounded-sm p-4 bg-primary/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg1" height="24px"
                                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path
                                                    d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="">
                                        <div class="mb-2">Total Orders</div>
                                        <div class="text-gray-500 dark:text-white/70 mb-1 text-xs">
                                            <span
                                                class="text-gray-800 font-semibold text-xl leading-none align-bottom dark:text-white">
                                                12,088
                                            </span>
                                        </div>
                                        <div>
                                            <span class="text-xs mb-0">Increased by <span
                                                    class="text-success">+12.2%</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xxxl:col-span-2 md:col-span-4">
                        <div class="box">
                            <div class="box-body">
                                <div class="flex space-x-4 rtl:space-x-reverse">
                                    <div class="flex items-center justify-center ecommerce-icon px-0">
                                        <span class="rounded-sm p-4 bg-secondary/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg2"
                                                enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24"
                                                width="24px" fill="#000000">
                                                <g>
                                                    <rect fill="none" height="24" width="24"></rect>
                                                    <path
                                                        d="M18,6h-2c0-2.21-1.79-4-4-4S8,3.79,8,6H6C4.9,6,4,6.9,4,8v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8C20,6.9,19.1,6,18,6z M12,4c1.1,0,2,0.9,2,2h-4C10,4.9,10.9,4,12,4z M18,20H6V8h2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8h4v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8 h2V20z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="">
                                        <div class="mb-2">Total Sales</div>
                                        <div class="text-gray-500 dark:text-white/70 mb-1 text-xs">
                                            <span
                                                class="text-gray-800 font-semibold text-xl leading-none align-bottom dark:text-white">
                                                10,500
                                            </span>
                                        </div>
                                        <div>
                                            <span class="text-xs mb-0">Decreased by
                                                <span class="text-danger">-1.41%</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xxxl:col-span-2 md:col-span-4">
                        <div class="box">
                            <div class="box-body">
                                <div class="flex space-x-4 rtl:space-x-reverse">
                                    <div class="flex items-center justify-center ecommerce-icon px-0">
                                        <span class="rounded-sm p-4 bg-danger/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg3" height="24px"
                                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path
                                                    d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="">
                                        <div class="mb-2">Total Visitors</div>
                                        <div class="text-gray-500 dark:text-white/70 mb-1 text-xs">
                                            <span
                                                class="text-gray-800 font-semibold text-xl leading-none align-bottom dark:text-white">
                                                2,56,259
                                            </span>
                                        </div>
                                        <div>
                                            <span class="text-xs mb-0">Increased by <span
                                                    class="text-success">+2.5%</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xxxl:col-span-2 md:col-span-4">
                        <div class="box">
                            <div class="box-body">
                                <div class="flex space-x-4 rtl:space-x-reverse">
                                    <div class="flex items-center justify-center ecommerce-icon px-0">
                                        <span class="rounded-sm p-4 bg-warning/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg4" height="24px"
                                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path
                                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="">
                                        <div class="mb-2">Total Income</div>
                                        <div class="text-gray-500 dark:text-white/70 mb-1 text-xs">
                                            <span
                                                class="text-gray-800 font-semibold text-xl leading-none align-bottom dark:text-white">
                                                $69,270
                                            </span>
                                        </div>
                                        <div>
                                            <span class="text-xs mb-0">Increased by <span
                                                    class="text-success">+2.58%</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xxxl:col-span-2 md:col-span-4">
                        <div class="box">
                            <div class="box-body">
                                <div class="flex space-x-4 rtl:space-x-reverse">
                                    <div class="flex items-center justify-center ecommerce-icon px-0">
                                        <span class="rounded-sm p-4 bg-info/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg5"
                                                enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24"
                                                width="24px" fill="#000000">
                                                <path d="M0,0h24v24H0V0z" fill="none" />
                                                <g>
                                                    <path
                                                        d="M19.5,3.5L18,2l-1.5,1.5L15,2l-1.5,1.5L12,2l-1.5,1.5L9,2L7.5,3.5L6,2v14H3v3c0,1.66,1.34,3,3,3h12c1.66,0,3-1.34,3-3V2 L19.5,3.5z M15,20H6c-0.55,0-1-0.45-1-1v-1h10V20z M19,19c0,0.55-0.45,1-1,1s-1-0.45-1-1v-3H8V5h11V19z" />
                                                    <rect height="2" width="6" x="9" y="7" />
                                                    <rect height="2" width="2" x="16" y="7" />
                                                    <rect height="2" width="6" x="9" y="10" />
                                                    <rect height="2" width="2" x="16" y="10" />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="">
                                        <div class="mb-2">Total Expenses</div>
                                        <div class="text-gray-500 dark:text-white/70 mb-1 text-xs">
                                            <span
                                                class="text-gray-800 font-semibold text-xl leading-none align-bottom dark:text-white">
                                                $21,520
                                            </span>
                                        </div>
                                        <div>
                                            <span class="text-xs mb-0">Decreased by <span
                                                    class="text-danger">-14.9%</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xxxl:col-span-2 md:col-span-4">
                        <div class="box">
                            <div class="box-body">
                                <div class="flex space-x-4 rtl:space-x-reverse">
                                    <div class="flex items-center justify-center ecommerce-icon px-0">
                                        <span class="rounded-sm p-4 bg-success/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white svg6" height="24px"
                                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path
                                                    d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="">
                                        <div class="mb-2">Total Products</div>
                                        <div class="text-gray-500 dark:text-white/70 mb-1 text-xs">
                                            <span
                                                class="text-gray-800 font-semibold text-xl leading-none align-bottom dark:text-white">
                                                45,280
                                            </span>
                                        </div>
                                        <div>
                                            <span class="text-xs mb-0">Increased by <span class="
                                                    text-success">+1.31%</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-span-12 xxl:col-span-3">
                        <div class="box">
                            <div class="box-header">
                                <div class="flex justify-between">
                                    <h5 class="box-title my-auto">Recent Orders</h5>
                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger1" type="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu"
                                            aria-labelledby="hs-dropdown-custom-icon-trigger1">
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Another Action</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Something else
                                                here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-span-12 xxl:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <div class="sm:flex justify-between">
                                    <h5 class="box-title my-auto">Order Vs Sales</h5>
                                    <div class="inline-flex rounded-md shadow-sm">
                                        <button type="button"
                                            class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-primary">
                                            1D
                                        </button>
                                        <button type="button"
                                            class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                            1W
                                        </button>
                                        <button type="button"
                                            class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                            1M
                                        </button>
                                        <button type="button"
                                            class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                            3M
                                        </button>
                                        <button type="button"
                                            class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                            6M
                                        </button>
                                        <button type="button"
                                            class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                            1Y
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <div id="earnings"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xxl:col-span-3">
                        <div class="box">
                            <div class="box-header">
                                <div class="flex justify-between">
                                    <h5 class="box-title my-auto">Top Customers</h5>
                                    <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button type="button" class="ti-btn m-0 rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            View All</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-span-12 xxl:col-span-5">
                        <div class="box">
                            <div class="box-header">
                                <div class="sm:flex">
                                    <h5 class="box-title my-auto">Task List</h5>
                                    <nav class="sm:flex sm:space-x-2 space-y-2 sm:space-y-0 rtl:space-x-reverse ltr:ml-auto rtl:mr-auto"
                                        aria-label="Tabs" role="tablist">
                                        <button type="button"
                                            class=" hs-tab-active:text-info hs-tab-active:bg-info/20 dark:hs-tab-active:bg-info/20 dark:hs-tab-active:text-info py-2 px-3 inline-flex items-center w-full justify-center gap-2 leading-none font-medium text-center text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:text-white/70 dark:hover:text-gray-300 active"
                                            id="active-item" data-hs-tab="#taskactive" aria-controls="taskactive"
                                            role="tab">
                                            Active
                                        </button>
                                        <button type="button"
                                            class=" hs-tab-active:text-info hs-tab-active:bg-info/20 dark:hs-tab-active:bg-info/20 dark:hs-tab-active:text-info py-2 px-3 inline-flex items-center w-full justify-center gap-2 leading-none font-medium text-center text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:text-white/70 dark:hover:text-gray-300"
                                            id="completed-item" data-hs-tab="#completed" aria-controls="completed"
                                            role="tab">
                                            Completed
                                        </button>
                                        <button type="button"
                                            class=" hs-tab-active:text-info hs-tab-active:bg-info/20 dark:hs-tab-active:bg-info/20 dark:hs-tab-active:text-info py-2 px-3 inline-flex items-center w-full justify-center gap-2 leading-none font-medium text-center text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:text-white/70 dark:hover:text-gray-300"
                                            id="cancelled-item" data-hs-tab="#cancelled" aria-controls="cancelled"
                                            role="tab">
                                            Cancelled
                                        </button>
                                    </nav>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-span-12 xxl:col-span-4">
                        <div class="box">
                            <div class="box-header flex">
                                <h5 class="box-title my-auto">Top Selling Products</h5>
                                <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                    <button aria-label="button" id="hs-dropdown-custom-icon-trigger3" type="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                        <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                                    <div class="hs-dropdown-menu ti-dropdown-menu"
                                        aria-labelledby="hs-dropdown-custom-icon-trigger3">
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Another Action</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0)">Something else
                                            here</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-span-12 xxl:col-span-3">
                        <div class="box">
                            <div class="box-header">
                                <div class="flex justify-between">
                                    <h5 class="box-title my-auto">Customer Reviews</h5>
                                    <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button type="button"
                                            class="ti-btn rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            View All</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start::row-2 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="box orders-table">
                            <div class="box-header">
                                <div class="sm:flex justify-between">
                                    <h5 class="box-title my-auto">Products Overview</h5>
                                    <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                                        <button id="hs-dropdown-custom-icon-trigger" type="button"
                                            class="hs-dropdown-toggle px-2 py-1 ti-btn ti-btn-primary">Sort
                                            By<i class="ri-arrow-down-s-line align-middle"></i></button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu"
                                            aria-labelledby="hs-dropdown-custom-icon-trigger">
                                            <a class="ti-dropdown-item" href="javascript:void(0)">New</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">popular</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Relevant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->



            </div>
            <!-- Start::main-content -->

        </div>

        <!-- ========== Search Modal ========== -->
        <div id="search-modal" class="hs-overlay ti-modal hidden">
          <div class="ti-modal-box">
            <div class="ti-modal-content">
              <div class="ti-modal-body">
                <div class="header-search">
                  <label for="icon" class="sr-only">Search</label>
                  <div class="relative">
                    <div class="search-btn">
                      <i class="ri ri-search-2-line search-btn-icon"></i>
                    </div>
                    <input type="text" id="icon" name="icon" class="py-2 ltr:pl-11 rtl:pr-11 ti-form-input focus:z-10"
                      placeholder="Search">
                    <div class="voice-search">
                      <i class="ri ri-mic-2-line voice-btn-icon"></i>
                    </div>
                    <div class="search-dropdown">
                      <i class="ri ri-more-2-line search-dropdown-btn-icon"></i>
                    </div>
                  </div>
                </div>

              </div>
              <div class="ti-modal-footer">
                <div class="inline-flex rounded-md shadow-sm">
                  <button type="button" class="ti-btn-group py-1 ti-btn-soft-primary dark:border-white/10">
                    Search
                  </button>
                  <button type="button" class="ti-btn-group py-1 ti-btn-primary dark:border-white/10">
                    Clear Recents
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ========== END Search Modal ========== -->
    </div>



    <!-- Apex Charts JS -->
    <script src="{{asset('backend/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Index JS -->
    <script src="{{asset('backend/assets/js/index-2.js')}}"></script>

    <!-- Switch JS -->
    <script src="{{asset('backend/assets/js/switch.js')}}"></script>

    <!-- Preline JS -->
    <script src="{{asset('backend/assets/libs/preline/preline.js')}}"></script>

    <!-- Simplebar JS -->
    <script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('backend/assets/js/custom.js')}}"></script>

    <!-- Custom-Switcher JS -->
    <script src="{{asset('backend/assets/js/custom-switcher.js')}}"></script>

      <!-- sidebar JS -->
      <script src="{{asset('backend/assets/js/defaultmenu.js')}}"></script>

    <!-- popperjs -->
    <script src="{{asset('backend/assets/libs/@popperjs/core/umd/popper.min.js')}}"></script>


    <!-- Color Picker JS -->
    <script src="{{asset('backend/assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script>


    <!-- sticky JS -->
    <script src="{{asset('backend/assets/js/sticky.js')}}"></script>


    <!-- Back To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
    </div>

    <div id="responsive-overlay"></div>


</body>

</html>
