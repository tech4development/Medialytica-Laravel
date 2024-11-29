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

 <!-- Primary CSS -->
 @vite('resources/css/app.css') <!-- Loads the main CSS file via Vite -->

 <!-- Compiled Tailwind CSS -->
 <link href="{{ asset('build/assets/style.css') }}" rel="stylesheet" />

 <!-- FontAwesome for Icons -->
 <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

 <!-- Keen Slider CSS -->
 <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />

 <!-- Alpine.js for Interactive Components -->
 <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.2.2/dist/cdn.min.js" defer></script>
</head>
{{--
@include('partials.header') --}}

<body class="error-page flex h-full bg-[#01004c] bg-white !py-0">
 <div class="bg-bg-white grid w-full grid-cols-12 gap-6">
  <div class="relative col-span-12 hidden bg-white lg:col-span-6 lg:block">
   <div class="cover relative z-[1] h-full w-full bg-[#004466] p-10">
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
        <h1 class="block text-2xl font-bold text-gray-800">Log In</h1>
        <p class="mt-3 text-sm text-gray-600">
         Don't have an account yet?
         <a class="font-medium text-[#004466] decoration-2 hover:underline" href="{{ route('register') }}">
          Register here
         </a>
        </p>
       </div>

       <div class="mt-5">
        <button type="button"
         class="dark:bg-bgdark inline-flex w-full items-center justify-center gap-2 rounded-sm border bg-white px-3 py-2 align-middle text-sm font-medium text-gray-700 shadow-sm transition-all hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-[#004466] focus:ring-offset-0 focus:ring-offset-white dark:border-white/10 dark:hover:bg-black/20 dark:hover:text-white dark:focus:ring-offset-white/10">
         <img src="{{ asset('backend/assets/google.webp') }}" class="h-4 w-4" alt="google-img"> Sign in with Google
        </button>

        <div
         class="flex items-center py-3 text-xs uppercase text-gray-400 before:flex-[1_1_0%] before:border-t before:border-gray-200 after:flex-[1_1_0%] after:border-t after:border-gray-200 ltr:before:mr-6 ltr:after:ml-6 rtl:before:ml-6 rtl:after:mr-6 dark:before:border-white/10 dark:after:border-white/10">
         Or
        </div>

        <!-- Form -->
        <div>
         <form method="POST" action="{{ route('login') }}" class="space-y-4">
          @csrf
          <!-- Form Group -->
          <div>
           <label for="email" class="mb-2 block text-sm">Email address</label>
           <div class="relative">
            <input type="email" id="email" name="email" value="{{ old('email') }}"
             class="block w-full rounded-sm border-[#004466] px-3 py-2 text-sm focus:border-[#004466] focus:ring-[#004466]"
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
            <label for="password" class="mb-2 block text-sm">Password</label>
            <a class="text-sm font-medium text-[#004466] decoration-2 hover:underline" href="forgot.html">Forgot
             password?</a>
           </div>
           <div class="relative">
            <input type="password" id="password" name="password"
             class="block w-full rounded-sm border-[#004466] px-3 py-2 text-sm focus:border-[#004466] focus:ring-[#004466]"
             required minlength="8">
           </div>
           @error('password')
            <span class="text-sm text-red-600">{{ $message }}</span>
           @enderror
          </div>
          <!-- End Form Group -->

          <button type="submit"
           class="inline-flex w-full items-center justify-center gap-2 rounded-sm border border-transparent bg-[#004466] px-3 py-2 text-sm font-semibold text-white transition-all hover:bg-[#b78700] focus:outline-none focus:ring-0 focus:ring-[#004466] focus:ring-offset-0">
           Log in
          </button>

          <p class="mt-3 text-center text-sm text-gray-600">
           Don't have an account yet?
           <a class="font-medium text-[#004466] decoration-2 hover:underline" href="{{ route('register') }}">
            Register here
           </a>
          </p>
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
 </div>



</body>



</html>
