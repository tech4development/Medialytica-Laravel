   <!-- Start::Header -->
   <header class="header custom-sticky !top-0 !w-full">
    @yield('header')
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
