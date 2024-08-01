<nav class="main-menu-container nav nav-pills flex-column sub-open">
    @yield('nav')
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
        <li class="slide  has-sub">
            <a href="javascript:void(0);" class="side-menu__item">
                <i class="ri-home-8-line side-menu__icon"></i>
                <span class="side-menu__label">Dashboard</span>
            </a>
        </li>
        <!-- End::slide -->

        <!-- Start::slide__category -->
        <li class="slide__category"><span class="category-name">Users</span></li>
        <!-- End::slide -->

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
            <a href="{{ route('superadmin.roles') }}" class="side-menu__item">
                <i class="ri-map-pin-user-line side-menu__icon"></i>
                <span class="side-menu__label">User Roles</span>
            </a>
            <a href="{{ route('superadmin.roles') }}" class="side-menu__item">
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
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <a href="{{ route('logout') }}" class="ti-dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="ti ti-logout text-lg"></i>
                        Log Out
                    </a>
                </form>
            </a>
            <a href="javascript:void(0);" class="side-menu__item">
                <i class="ri-book-open-line side-menu__icon"></i>
                <span class="side-menu__label">Home</span>
            </a>
        </li>
        <!-- End::slide -->
    </ul>
</nav>
