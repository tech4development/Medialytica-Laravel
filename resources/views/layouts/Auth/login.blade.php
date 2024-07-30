<!DOCTYPE html>
<html lang="en" dir="ltr" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

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

<body class="error-page flex h-full !py-0 bg-white dark:bg-bgdark">
    <div class="grid grid-cols-12 gap-6 w-full">
        <div class="lg:col-span-6 col-span-12 hidden lg:block relative">
            <div class="cover relative w-full h-full z-[1] p-10">
                <a href="index.html" class="header-logo">
                    <img src="../assets/img/brand-logos/desktop-dark.png" alt="logo" class="ltr:ml-auto rtl:mr-auto block">
                </a>
                <div class="authentication-page justify-center w-full max-w-7xl mx-auto p-0">
                    <img src="../assets/img/authentication/2.png" alt="logo" class="mx-auto h-[500px]">
                </div>
            </div>
        </div>
        <div class="lg:col-span-6 col-span-12">
            <div class="authentication-page w-full">
                <!-- ========== MAIN CONTENT ========== -->
                <main id="content" class="w-full max-w-md mx-auto p-6">
                    <a href="index.html" class="header-logo lg:hidden">
                        <img src="../assets/img/brand-logos/desktop-logo.png" alt="logo" class="mx-auto block dark:hidden">
                        <img src="../assets/img/brand-logos/desktop-dark.png" alt="logo" class="mx-auto hidden dark:block">
                    </a>
                    <div class="mt-7">
                        <div class="p-4 sm:p-7">
                            <div class="text-center">
                                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Log In</h1>
                                <p class="mt-3 text-sm text-gray-600 dark:text-white/70">
                                    Don't have an account yet?
                                    <a class="text-primary decoration-2 hover:underline font-medium" href="{{ route('register') }}">
                                        Register here
                                    </a>
                                </p>
                            </div>

                            <div class="mt-5">
                                <button type="button"
                                    class="w-full py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10">
                                    <img src="../assets/img/authentication/social/1.png" class="w-4 h-4" alt="google-img"> Sign in with Google
                                </button>

                                <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 ltr:before:mr-6 rtl:before:ml-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 ltr:after:ml-6 rtl:after:mr-6 dark:text-white/70 dark:before:border-white/10 dark:after:border-white/10">
                                    Or
                                </div>

                                <!-- Form -->
                                <div>
                                    <form method="POST" action="{{ route('login') }}" class="space-y-4">
                                        @csrf
                                        <!-- Form Group -->
                                        <div>
                                            <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                                            <div class="relative">
                                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                                    class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                                    required>
                                            </div>
                                            @error('email')
                                                <span class="text-red-600 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div>
                                            <div class="flex justify-between items-center">
                                                <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                                                <a class="text-sm text-primary decoration-2 hover:underline font-medium" href="forgot.html">Forgot password?</a>
                                            </div>
                                            <div class="relative">
                                                <input type="password" id="password" name="password"
                                                    class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                                    required minlength="8">
                                            </div>
                                            @error('password')
                                                <span class="text-red-600 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Checkbox -->
                                        {{-- <div class="flex items-center">
                                            <div class="flex">
                                                <input id="remember-me" name="remember-me" type="checkbox"
                                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-primary pointer-events-none focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:checked:bg-primary dark:checked:border-primary dark:focus:ring-offset-white/10">
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <label for="remember-me" class="text-sm dark:text-white">Remember me</label>
                                            </div>
                                        </div> --}}
                                        <!-- End Checkbox -->

                                        <button type="submit"
                                            class="w-full py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary-dark focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10">
                                            Log in
                                        </button>
                                    </form>
                                </div>
                                <!-- End Form -->
                            </div>
                        </div>
                    </div>
                </main>
                <!-- ========== END MAIN CONTENT ========== -->
            </div>
        </div>
    </div>

    <!-- popperjs -->
    <script src="{{asset('backend/assets/libs/@popperjs/core/umd/popper.min.js')}}"></script>

    <!-- Custom-Switcher JS -->
    <script src="{{asset('backend/assets/js/custom-switcher.js')}}"></script>

    <!-- Preline JS -->
    <script src="{{asset('backend/assets/libs/preline/preline.js')}}"></script>

</body>

</html>
