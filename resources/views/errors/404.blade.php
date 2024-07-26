<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Error</title>
    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/img/brand-logos/favicon.ico') }}">

    <!-- Main JS -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">

    <!-- Simplebar Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/simplebar/simplebar.min.css') }}">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">
</head>

<body class="authentication-page !h-full">

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" class="mx-auto">
        <canvas class="error-basic-background"></canvas>
        <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
            <h1 class="block font-bold text-primary text-9xl dark:text-primary">404</h1>
            <p class="mt-3 text-2xl font-bold text-gray-800 dark:text-white">Oops, something went wrong.</p>
            <p class="text-gray-600 dark:text-white/70">Sorry, we couldn't find your page.</p>

            <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
                <a
                    id="redirect-link"
                    class="w-full sm:w-auto inline-flex justify-center items-center gap-x-3 text-center bg-primary hover:bg-primary border border-transparent text-white text-sm font-medium rounded-sm focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 focus:ring-offset-white transition py-2 px-3 dark:focus:ring-offset-white/10"
                    href="javascript:void(0);"
                    onclick="redirectUser()">
                    <i class="ri-arrow-left-line"></i>
                    Get Back to Home
                </a>
            </div>
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- Scripts -->
    <script src="{{ asset('backend/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom-switcher.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/preline/preline.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/particlesjs/particles.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/401-error.js') }}"></script>

    <script>
        function redirectUser() {
            // Check if the user is authenticated and their role is available
            const userRole = @json(auth()->user()->role ?? 'guest');

            let redirectUrl;

            switch (userRole.toLowerCase()) {
                case 'super admin':
                case 'admin':
                case 'publisher':
                case 'socialpublisher':
                case 'editor':
                case 'user':
                    redirectUrl = '{{ route('dashboard') }}'; // URL for dashboard
                    break;
                default:
                    redirectUrl = '{{ url('/') }}'; // URL for home
            }

            window.location.href = redirectUrl;
        }
    </script>
</body>

</html>
