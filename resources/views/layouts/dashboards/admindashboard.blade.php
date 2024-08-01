<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title',
            Auth::user()->user_role == 'superadmin' ? 'SuperAdmin Dashboard' :
            (Auth::user()->user_role == 'admin' ? 'Admin Dashboard' : 'Dashboard')
        )
    </title>
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
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Function to handle toggling
            function setupMenuToggle(menuButtonId, menuItemsId, iconId) {
                const menuButton = document.getElementById(menuButtonId);
                const menuItems = document.getElementById(menuItemsId);
                const toggleIcon = document.getElementById(iconId);

                menuButton.addEventListener('click', function () {
                    const isExpanded = menuItems.classList.contains('block');

                    // Toggle the visibility of the menu items
                    menuItems.classList.toggle('hidden', !isExpanded);
                    menuItems.classList.toggle('block', isExpanded);

                    // Rotate the icon based on the menu state
                    toggleIcon.style.transform = isExpanded ? 'rotate(180deg)' : 'rotate(0deg)';
                });
            }

            // Set up the menu toggles
            setupMenuToggle('publishers-menu', 'publishers-menu-items', 'toggle-icon');
            setupMenuToggle('social-publishers-menu', 'social-publishers-menu-items', 'social-toggle-icon');
            setupMenuToggle('admin-menu', 'admin-menu-items', 'admin-toggle-icon');
            setupMenuToggle('editor-menu', 'editor-menu-items', 'editor-toggle-icon');
            setupMenuToggle('user-menu', 'user-menu-items', 'user-toggle-icon');
            setupMenuToggle('user-roles-menu', 'user-roles-menu-items', 'user-roles-toggle-icon');
            setupMenuToggle('user-permissions-menu', 'user-permissions-menu-items', 'user-permissions-toggle-icon');
        });
        </script> --}}
</head>



<body class="">



    <div class="page">

        <!-- Start::app-sidebar -->
        <aside class="app-sidebar" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                @yield('sidebar')
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
                    @yield('nav')
                    <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg></div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Dashboard</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide  has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-home-8-line side-menu__icon"></i>
                                <span class="side-menu__label">Home</span>

                            </a>
                        </li>
                        <!-- End::slide -->



                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Users</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <!-- Main Menu Item -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item" id="publishers-menu">
                                    <i class="ri-inbox-line side-menu__icon"></i>
                                    <span class="side-menu__label">Publishers</span>
                                    <svg class="w-4 h-4 ml-auto transform transition-transform duration-200" id="toggle-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 15L10 11L14 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <!-- Collapsible Menu Items -->
                                <ul id="publishers-menu-items" class="hidden mt-2 space-y-1">
                                    <li>
                                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">View All</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">Edit Users</a>
                                    </li>
                                    <!-- Add more items as needed -->
                                </ul>
                            </li>

                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <!-- Main Menu Item for Social Publishers -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item" id="social-publishers-menu">
                                    <i class="ri-cpu-line side-menu__icon"></i>
                                    <span class="side-menu__label">Social Publishers</span>
                                    <svg class="w-4 h-4 ml-auto transform transition-transform duration-200" id="social-toggle-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 15L10 11L14 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <!-- Collapsible Menu Items -->
                                <ul id="social-publishers-menu-items" class="hidden mt-2 space-y-1">
                                    <li>
                                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">View All</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">Edit Users</a>
                                    </li>
                                    <!-- Add more items as needed -->
                                </ul>
                            </li>


                        </li>
                        <!-- End::slide -->
                        <!-- Main Menu Item for Admin -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item" id="admin-menu">
                                <i class="ri-cpu-line side-menu__icon"></i>
                                <span class="side-menu__label">Admin</span>
                                <svg class="w-4 h-4 ml-auto transform transition-transform duration-200" id="admin-toggle-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 15L10 11L14 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <!-- Collapsible Menu Items -->
                            <ul id="admin-menu-items" class="hidden mt-2 space-y-1">
                                <li>
                                    <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">View All</a>
                                </li>
                                <li>
                                    <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">Add Users</a>
                                </li>
                                <li>
                                    <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">Edit Users</a>
                                </li>
                                <!-- Add more items as needed -->
                            </ul>
                        </li>

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <!-- Main Menu Item for Editor -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item" id="editor-menu">
                                    <i class="ri-cpu-line side-menu__icon"></i>
                                    <span class="side-menu__label">Editor</span>
                                    <svg class="w-4 h-4 ml-auto transform transition-transform duration-200" id="editor-toggle-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 15L10 11L14 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <!-- Collapsible Menu Items -->
                                <ul id="editor-menu-items" class="hidden mt-2 space-y-1">
                                    <li>
                                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">View Users</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">Add Users</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">Edit Users</a>
                                    </li>
                                    <!-- Add more items as needed -->
                                </ul>
                            </li>


                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <!-- Main Menu Item for User -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item" id="user-menu">
                                    <i class="ri-cpu-line side-menu__icon"></i>
                                    <span class="side-menu__label">User</span>
                                    <svg class="w-4 h-4 ml-auto transform transition-transform duration-200" id="user-toggle-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 15L10 11L14 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <!-- Collapsible Menu Items -->
                                <ul id="user-menu-items" class="hidden mt-2 space-y-1">
                                    <li>
                                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">View User</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">Add User</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">Edit User</a>
                                    </li>
                                    <!-- Add more items as needed -->
                                </ul>
                            </li>


                        </li>
                        <!-- End::slide -->



                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Settings</span></li>
                        <!-- End::slide__category -->

                        <li class="slide has-sub">
                            <!-- Main Menu Item for User Roles -->
                            <li class="slide has-sub">
                                <a href="{{ route('roles.show') }}" class="side-menu__item" id="user-roles-menu">
                                    <i class="ri-map-pin-user-line side-menu__icon"></i>
                                    <span class="side-menu__label">User Roles</span>
                                    <svg class="w-4 h-4 ml-auto transform transition-transform duration-200" id="user-roles-toggle-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 15L10 11L14 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <!-- Collapsible Menu Items -->
                                <ul id="user-roles-menu-items" class="hidden mt-2 space-y-1">
                                    <li>
                                        <a href="{{ route('roles.show') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">Add Roles</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('roles.show') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">View Roles</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('roles.show') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">Edit Roles</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('roles.show') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">Manage Roles</a>
                                    </li>
                                    <!-- Add more items as needed -->
                                </ul>
                            </li>

                            <!-- Main Menu Item for User Permissions -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item" id="user-permissions-menu">
                                    <i class="ri-map-pin-user-line side-menu__icon"></i>
                                    <span class="side-menu__label">User Permissions</span>
                                    <svg class="w-4 h-4 ml-auto transform transition-transform duration-200" id="user-permissions-toggle-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 15L10 11L14 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <!-- Collapsible Menu Items -->
                                <ul id="user-permissions-menu-items" class="hidden mt-2 space-y-1">
                                    <li>
                                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">Add Permissions</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">View Permissions</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">Edit Permissions</a>
                                    </li>
                                    <li>
                                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">Manage Permissions</a>
                                    </li>
                                    <!-- Add more items as needed -->
                                </ul>
                            </li>

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
                                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                    @csrf
                                    <a href="{{ route('logout') }}" class="ti-dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="ti ti-logout text-lg"></i>
                                        Log Out
                                    </a>
                                </form>
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
                <a class="responsive-logo-dark" href="" aria-label="Brand"><img
                    src="{{asset('../assets/img/brand-logos/desktop-logo.png')}}" alt="logo" class="mx-auto"></a>
                <a class="responsive-logo-light" href="" aria-label="Brand"><img
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
            @yield('content')

        </div>

        <!-- ========== Search Modal ========== -->
        <div id="search-modal" class="hs-overlay ti-modal hidden">
            @yield('search-modal')
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Function to handle toggling
        function setupMenuToggle(menuButtonId, menuItemsId, iconId) {
            const menuButton = document.getElementById(menuButtonId);
            const menuItems = document.getElementById(menuItemsId);
            const toggleIcon = document.getElementById(iconId);

            menuButton.addEventListener('click', function () {
                // Check if the menu is currently expanded
                const isExpanded = !menuItems.classList.contains('hidden');

                // Toggle the visibility of the menu items
                menuItems.classList.toggle('hidden', isExpanded);
                menuItems.classList.toggle('block', !isExpanded);

                // Rotate the icon based on the menu state
                toggleIcon.style.transform = isExpanded ? 'rotate(0deg)' : 'rotate(180deg)';
            });
        }

        // Set up the menu toggles
        setupMenuToggle('publishers-menu', 'publishers-menu-items', 'publishers-toggle-icon');
        setupMenuToggle('social-publishers-menu', 'social-publishers-menu-items', 'social-publishers-toggle-icon');
        setupMenuToggle('admin-menu', 'admin-menu-items', 'admin-toggle-icon');
        setupMenuToggle('editor-menu', 'editor-menu-items', 'editor-toggle-icon');
        setupMenuToggle('user-menu', 'user-menu-items', 'user-toggle-icon');
        setupMenuToggle('user-roles-menu', 'user-roles-menu-items', 'user-roles-toggle-icon');
        setupMenuToggle('user-permissions-menu', 'user-permissions-menu-items', 'user-permissions-toggle-icon');
    });
    </script>


</html>
