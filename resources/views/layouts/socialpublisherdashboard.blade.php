<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Publisher Dashboard</title>
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

            @if(Auth::user()->role === 'socialpublisher') <!-- Replace 'editor' with the role you want -->
                <div class="main-sidebar" id="sidebar-scroll">
                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills flex-column sub-open">
                        <div class="slide-left" id="slide-left">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg>
                        </div>
                        <ul class="main-menu">
                            <!-- Start::slide__category -->
                            <li class="slide__category"><span class="category-name">Social Publisher</span></li>
                            <!-- End::slide__category -->

                            <!-- Start::slide with expand/collapse functionality -->
                            <li class="slide has-sub" id="publisher-menu">
                                <a href="javascript:void(0);" class="side-menu__item" onclick="toggleMenu()">
                                    <i class="ri-file-text-line side-menu__icon"></i>
                                    <span class="side-menu__label">Social Publisher</span>
                                    <i class="ri ri-arrow-down-s-line side-menu__angle" id="menu-toggle-icon"></i>
                                </a>
                                <ul class="submenu" id="publisher-submenu">
                                    <!-- Start::slide -->
                                    <li class="slide">
                                        <a href="" class="side-menu__item">
                                            <i class="ri-file-add-line side-menu__icon"></i>
                                            <span class="side-menu__label">Add Details</span>
                                        </a>
                                    </li>
                                    <!-- End::slide -->

                                    <!-- Start::slide -->
                                    <li class="slide">
                                        <a href="" class="side-menu__item">
                                            <i class="ri-edit-line side-menu__icon"></i>
                                            <span class="side-menu__label">Edit Details</span>
                                        </a>
                                    </li>
                                    <!-- End::slide -->

                                    <!-- Start::slide -->
                                    <li class="slide">
                                        <a href="" class="side-menu__item">
                                            <i class="ri-refresh-line side-menu__icon"></i>
                                            <span class="side-menu__label">Update Details</span>
                                        </a>
                                    </li>
                                    <!-- End::slide -->
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide">
                                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                    @csrf
                                    <a href="{{ route('logout') }}" class="side-menu__item" onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="ri-logout-box-line side-menu__icon"></i>
                                        <span class="side-menu__label">Log Out</span>
                                    </a>
                                </form>
                            </li>

                            <!-- End::slide -->
                        </ul>



                    </nav>
                    <!-- End::nav -->
                </div>
            @else
                <div class="main-sidebar" id="sidebar-scroll">
                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills flex-column sub-open">
                        <div class="slide-left" id="slide-left">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg>
                        </div>
                        <ul class="main-menu">
                            <!-- Start::slide__category -->
                            <li class="slide__category"><span class="category-name">Main</span></li>
                            <!-- End::slide__category -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
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
                            </li>
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
                                    <span class="side-menu__label">User Permissions</span>
                                </a>
                            </li>

                            <!-- Start::slide__category -->
                            <li class="slide__category"><span class="category-name">Profile</span></li>
                            <!-- End::slide__category -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <i class="ri-pie-chart-2-line side-menu__icon"></i>
                                    <span class="side-menu__label">Edit Profile</span>
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
            @endif

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
                            <p class="ti-dropdown-header-title !text-white"> {{ ucfirst(Auth::user()->name) }}</p>
                            <p class="ti-dropdown-header-content !text-white/50"> {{ ucfirst(Auth::user()->role) }}</p>
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
                        <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">
                            {{ ucfirst(Auth::user()->role) }} Dashboard
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
                            {{ ucfirst(Auth::user()->role) }} Dashboard
                        </li>
                    </ol>
                </div>
                <!-- Page Header Close -->

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
                            <a href="{{ route('publisher.create') }}" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors duration-300">Add Publisher Details</a>
                        </div>

                        <!-- Edit Publisher Details Form Card -->
                        <div id="edit-card" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <h2 class="text-xl font-semibold text-gray-700">Edit Publisher Details</h2>
                            <p class="mt-2 text-gray-600">Update existing publisher details using the edit form.</p>
                            <!-- Link to the edit page -->
                            <a href="" class="mt-4 inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors duration-300">Edit Publisher Details</a>
                        </div>

                        <!-- Update Publisher Details Form Card -->

                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <h2 class="text-xl font-semibold text-gray-700">Update Publisher Details</h2>
                            <p class="mt-2 text-gray-600">Modify publisher details with the update form.</p>
                            <!-- Link to the update page -->
                            <a href="" class="mt-4 inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition-colors duration-300">Update Publisher Details</a>
                        </div>


                        <!-- Log Out Card -->
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <h2 class="text-xl font-semibold text-gray-700">Log Out</h2>
                            <p class="mt-2 text-gray-600">Sign out from the dashboard.</p>
                            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                @csrf
                                <a href="{{ route('logout') }}" class="mt-4 inline-block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition-colors duration-300" onclick="event.preventDefault(); this.closest('form').submit();">
                                    Log Out
                                </a>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- End::main-content -->

            </div>
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




    <script>
        function toggleMenu() {
            const submenu = document.getElementById('publisher-submenu');
            const icon = document.getElementById('menu-toggle-icon');

            if (submenu.style.display === 'block') {
                submenu.style.display = 'none';
                icon.classList.remove('ri-arrow-up-s-line');
                icon.classList.add('ri-arrow-down-s-line');
            } else {
                submenu.style.display = 'block';
                icon.classList.remove('ri-arrow-down-s-line');
                icon.classList.add('ri-arrow-up-s-line');
            }
        }

        // Initialize the menu to be expanded by default if needed
        document.addEventListener('DOMContentLoaded', (event) => {
            const submenu = document.getElementById('publisher-submenu');
            submenu.style.display = 'block'; // Set this to 'none' if you want it collapsed by default
        });
    </script>


    <!-- Back To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
    </div>

    <div id="responsive-overlay"></div>


</body>

</html>
