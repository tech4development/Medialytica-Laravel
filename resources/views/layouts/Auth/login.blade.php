<!DOCTYPE html>
<html lang="en" dir="ltr" class="h-full">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login</title>
 <meta name="description" content="">
 <meta name="keywords" content="">

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

<body class="error-page flex h-full bg-[#01004c] bg-white !py-0">
 <div class="grid w-full grid-cols-12 gap-6 bg-[#01004c]">
  <div class="relative col-span-12 hidden bg-[#01004c] lg:col-span-6 lg:block">
   <div class="cover relative z-[1] h-full w-full bg-[#01004c] p-10">

   </div>
  </div>
  <div class="col-span-12 lg:col-span-6">
   <div class="authentication-page w-full">
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" class="mx-auto w-full max-w-md p-6">
     {{-- <a href="index.html" class="header-logo lg:hidden">
                        <img src="../assets/img/brand-logos/desktop-logo.png" alt="logo" class="mx-auto block dark:hidden">
                        <img src="../assets/img/brand-logos/desktop-dark.png" alt="logo" class="mx-auto hidden dark:block">
                    </a> --}}
     <div class="mt-4">
      <div class="p-4 sm:p-7">
       <div class="text-center">
        <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Log In</h1>
        <p class="mt-3 text-sm text-gray-600 dark:text-white/70">
         Don't have an account yet?
         <a class="text-primary font-medium decoration-2 hover:underline" href="{{ route('register') }}">
          Register here
         </a>
        </p>
       </div>

       <div class="mt-5">
        <button type="button"
         class="focus:ring-primary dark:bg-bgdark inline-flex w-full items-center justify-center gap-2 rounded-sm border bg-white px-3 py-2 align-middle text-sm font-medium text-gray-700 shadow-sm transition-all hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white dark:border-white/10 dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-white dark:focus:ring-offset-white/10">
         <img src="{{ asset('backend/assets/google.png') }}" class="h-4 w-4" alt="google-img"> Sign in with Google
        </button>

        <div
         class="flex items-center py-3 text-xs uppercase text-gray-400 before:flex-[1_1_0%] before:border-t before:border-gray-200 after:flex-[1_1_0%] after:border-t after:border-gray-200 ltr:before:mr-6 ltr:after:ml-6 rtl:before:ml-6 rtl:after:mr-6 dark:text-white/70 dark:before:border-white/10 dark:after:border-white/10">
         Or
        </div>

        <!-- Form -->
        <div>
         <form method="POST" action="{{ route('login') }}" class="space-y-4">
          @csrf
          <!-- Form Group -->
          <div>
           <label for="email" class="mb-2 block text-sm dark:text-white">Email address</label>
           <div class="relative">
            <input type="email" id="email" name="email" value="{{ old('email') }}"
             class="focus:border-primary focus:ring-primary dark:bg-bgdark block w-full rounded-sm border-gray-200 px-3 py-2 text-sm dark:border-white/10 dark:text-white/70"
             required>
           </div>
           @error('email')
            <span class="text-sm text-red-600">{{ $message }}</span>
           @enderror
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div>
           <div class="flex items-center justify-between">
            <label for="password" class="mb-2 block text-sm dark:text-white">Password</label>
            <a class="text-primary text-sm font-medium decoration-2 hover:underline" href="forgot.html">Forgot
             password?</a>
           </div>
           <div class="relative">
            <input type="password" id="password" name="password"
             class="focus:border-primary focus:ring-primary dark:bg-bgdark block w-full rounded-sm border-gray-200 px-3 py-2 text-sm dark:border-white/10 dark:text-white/70"
             required minlength="8">
           </div>
           @error('password')
            <span class="text-sm text-red-600">{{ $message }}</span>
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
           class="bg-primary hover:bg-primary-dark focus:ring-primary inline-flex w-full items-center justify-center gap-2 rounded-sm border border-transparent px-3 py-2 text-sm font-semibold text-white transition-all focus:outline-none focus:ring-0 focus:ring-offset-0 dark:focus:ring-offset-white/10">
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
 <script src="{{ asset('backend/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

 <!-- Custom-Switcher JS -->
 <script src="{{ asset('backend/assets/js/custom-switcher.js') }}"></script>

 <!-- Preline JS -->
 <script src="{{ asset('backend/assets/libs/preline/preline.js') }}"></script>

</body>

</html>
