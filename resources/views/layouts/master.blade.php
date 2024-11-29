<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="Master template for Laravel application">
 <title>@yield('title', 'Default Title')</title>

 <!-- Bootstrap or any other framework CSS -->
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

 <!-- Favicon -->
 <link href="{{ asset('backend/assets/logo.png') }}" rel="shortcut icon" />

 <!-- Page-Specific Styles -->
 @yield('css')

 <!-- Custom CSS -->
 <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

  body {
   font-family: 'Poppins', sans-serif;
   scroll-behavior: smooth;
   margin: 0;
   padding: 0;
   overflow-x: hidden;
   /* Prevent horizontal scrolling */
  }

  .container-full {
   width: 100%;
   margin: 0;
   padding: 0;
  }

  main {
   width: 100%;
   margin: 0;
   padding: 0;
  }
 </style>
</head>

<body>
 <!-- Header Section -->
 @include('partials.header')

 <!-- Main Content Section -->
 <main class="container-full">
  @yield('content')
 </main>

 <!-- Footer -->
 <footer>
  @include('partials.footer')
 </footer>

 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}"></script>
 @stack('scripts')
</body>

</html>
