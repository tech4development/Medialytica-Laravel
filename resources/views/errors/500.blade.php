<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 Error</title>
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

<body class="authentication-page !h-full">

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" class="mx-auto" >
            <canvas class="error-basic-background"></canvas>
            <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
                <h1 class="block font-bold text-primary text-9xl dark:text-primary">500</h1>
                <p class="mt-3 text-2xl font-bold text-gray-800 dark:text-white">Oops, something went wrong.</p>
                <p class="text-gray-600 dark:text-white/70">Internal Server 500 Error. We are fixing the problem. Please try again later.</p>
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

    <!-- popperjs -->
    <script src="{{ asset('backend/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <!-- Custom-Switcher JS -->
    <script src="{{ asset('backend/assets/js/custom-switcher.js') }}"></script>

    <!-- Preline JS -->
    <script src="{{ asset('backend/assets/libs/preline/preline.js') }}"></script>

    <!-- Particles JS -->
    <script src="{{ asset('backend/assets/libs/particlesjs/particles.min.js') }}"></script>

    <!-- Internal 401-Error JS -->
    <script src="{{ asset('backend/assets/js/401-error.js') }}"></script>

    <script>
        function redirectUser() {
            // Check if the user is authenticated and their role is available
            const userRole = @json(auth()->user()->role ?? 'guest');

            let redirectUrl;

            switch (userRole.toLowerCase()) {
                case 'super admin':
                    redirectUrl = '{{ route('superadmin.dashboard') }}'; // URL for super admin dashboard
                    break;
                case 'admin':
                    redirectUrl = '{{ route('admin.dashboard') }}'; // URL for admin dashboard
                    break;
                case 'publisher':
                    redirectUrl = '{{ route('publisher.dashboard') }}'; // URL for publisher dashboard
                    break;
                case 'socialpublisher':
                    redirectUrl = '{{ route('socialpublisher.dashboard') }}'; // URL for social publisher dashboard
                    break;
                case 'editor':
                    redirectUrl = '{{ route('editor.dashboard') }}'; // URL for editor dashboard
                    break;
                case 'user':
                    redirectUrl = '{{ route('user.dashboard') }}'; // URL for user dashboard
                    break;
                default:
                    redirectUrl = '{{ url('/') }}'; // URL for home
            }

            window.location.href = redirectUrl;
        }
    </script>


</body>

</html>
