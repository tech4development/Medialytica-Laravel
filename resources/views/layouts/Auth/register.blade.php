<!DOCTYPE html>
<html lang="en" dir="ltr" class="h-full">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Register</title>
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

<body class="dark:bg-bgdark flex h-full bg-white !py-0">
 <div class="grid w-full grid-cols-12 gap-6">
  <div class="relative col-span-12 hidden lg:col-span-6 lg:block">
   <div class="cover relative z-[1] h-full w-full p-10">
    {{-- <a href="index.html" class="header- logo">
                    <img src="../assets/img/brand-logos/desktop-light.png" alt="logo" class="ltr:ml-auto rtl:mr-auto block">
                </a> --}}
    {{-- <div class="authentication-page justify-center w-full max-w-7xl mx-auto p-0">
                    <img src="{{asset('backend/assets/img/authentication/2.png')}}" alt="logo" class="mx-auto h-[500px]">
                </div> --}}
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
     <div class="mt-3">
      <div class="p-2 sm:p-7">
       <div class="text-center">
        <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Register</h1>
        <p class="mt-3 text-sm text-gray-600 dark:text-white/70">
         Already have an account?
         <a class="text-primary font-medium decoration-2 hover:underline" href="{{ route('login') }}">
          Log in here
         </a>
        </p>
       </div>

       <div class="mt-5">
        <a href="{{ route('google-auth') }}">
         <button type="button"
          class="focus:ring-primary dark:bg-bgdark inline-flex w-full items-center justify-center gap-2 rounded-sm border bg-white px-3 py-2 align-middle text-sm font-medium text-gray-700 shadow-sm transition-all hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white dark:border-white/10 dark:text-white/70 dark:hover:bg-black/20 dark:hover:text-white dark:focus:ring-offset-white/10">
          <img src="{{ asset('backend/assets/google.png') }}" class="h-4 w-4" alt="google-img">Sign in with Google
         </button>
        </a>


        <div
         class="flex items-center py-3 text-xs uppercase text-gray-400 before:flex-[1_1_0%] before:border-t before:border-gray-200 after:flex-[1_1_0%] after:border-t after:border-gray-200 ltr:before:mr-6 ltr:after:ml-6 rtl:before:ml-6 rtl:after:mr-6 dark:text-white/70 dark:before:border-white/10 dark:after:border-white/10">
         Or</div>

        <!-- Form -->
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
         @csrf
         <div class="grid gap-y-4">

          <div>
           <label for="role" class="mb-2 block text-sm dark:text-white">Select Role</label>
           <select name="role" id="role" required
            class="focus:border-primary focus:ring-primary dark:bg-bgdark block w-full rounded-sm border-gray-200 px-3 py-2 text-sm dark:border-white/10 dark:text-white/70">
            <option value="publisher">Publisher</option>
            <option value="socialpublisher">Social Publisher</option>
           </select>
          </div>

          <!-- Form Group -->
          <div>
           <label for="name" class="mb-2 block text-sm dark:text-white">Full Name</label>
           <div class="relative">
            <input type="text" id="name" name="name" value="{{ old('name') }}"
             class="focus:border-primary focus:ring-primary dark:bg-bgdark block w-full rounded-sm border-gray-200 px-3 py-2 text-sm dark:border-white/10 dark:text-white/70"
             required>
           </div>
           @error('name')
            <span class="text-sm text-red-600">{{ $message }}</span>
           @enderror
          </div>
          <!-- End Form Group -->

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
           <label for="password" class="mb-2 block text-sm dark:text-white">Password</label>
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

          <!-- Form Group -->
          <div>
           <label for="password_confirmation" class="mb-2 block text-sm dark:text-white">Confirm Password</label>
           <div class="relative">
            <input type="password" id="password_confirmation" name="password_confirmation"
             class="focus:border-primary focus:ring-primary dark:bg-bgdark block w-full rounded-sm border-gray-200 px-3 py-2 text-sm dark:border-white/10 dark:text-white/70"
             required minlength="8">
           </div>
           @error('password_confirmation')
            <span class="text-sm text-red-600">{{ $message }}</span>
           @enderror
          </div>
          <!-- End Form Group -->

          <!-- Checkbox -->
          <div class="flex items-center">
           <input id="terms" type="checkbox" name="terms" required
            class="text-primary focus:ring-primary dark:bg-bgdark h-4 w-4 rounded border-gray-300 dark:border-white/10">
           <label for="terms" class="ml-2 text-sm text-gray-600 dark:text-white">
            I agree to the <a href="#" class="text-primary hover:underline">terms and conditions</a>.
           </label>
          </div>
          <!-- End Checkbox -->

          <div class="mt-4 flex items-center justify-between">
           <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900 dark:text-white">
            Already registered?
           </a>

           <button type="submit"
            class="bg-primary hover:bg-primary-dark focus:ring-primary inline-flex items-center rounded-md border border-transparent px-4 py-2 text-sm font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2">
            Register
           </button>
          </div>
         </div>
        </form>
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
