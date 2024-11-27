<!-- Start Navigation -->
<nav class="border-white-200 border-white-300 border-b bg-white py-2.5 dark:bg-gray-900">
 <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between px-4">
  <a href="#" class="flex items-center">
   <img src="{{ asset('backend/assets/LOGO-no-backround.webp') }}" class="mr-3 h-6 sm:h-9" alt="Medialytica Logo">
  </a>
  <div class="flex items-center space-x-2 lg:order-2">
   <a href="{{ route('login') }}"
    class="dark:[#004466] rounded-lg bg-[#004466] px-3 py-1 text-sm font-medium text-white hover:bg-[#004466] focus:outline-none focus:ring-4 focus:ring-[#004466] dark:hover:bg-[#004466] dark:focus:ring-[#004466] lg:px-4 lg:py-2">Login</a>
   <a href="{{ route('register') }}"
    class="rounded-lg bg-[#b78700] px-3 py-1 text-sm font-medium text-white hover:bg-[#b78700] focus:outline-none focus:ring-4 focus:ring-[#b78700] dark:bg-[#b78700] dark:hover:bg-[#b78700] dark:focus:ring-[#b78700] lg:px-4 lg:py-2">Register</a>
   <button id="hamburger-btn"
    class="ml-1 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 lg:hidden">
    <span class="sr-only">Open main menu</span>
    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
     <path fill-rule="evenodd"
      d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
      clip-rule="evenodd"></path>
    </svg>
   </button>
  </div>
  <div id="mobile-menu" class="hidden w-full items-center justify-between lg:order-1 lg:flex lg:w-auto">
   <ul class="mt-4 flex flex-col font-medium lg:mt-0 lg:flex-row lg:space-x-2">
    <li class="border-b border-white py-1"><a href="#"
      class="font-semi block pl-1 pr-2 text-gray-700 hover:text-[#b78700] hover:underline">Home</a>
    </li>

    <!-- Services Dropdown -->
    <li class="group relative border-b border-white py-1">
     <a href="{{ route('services') }}"
      class="font-semi block flex items-center pl-1 pr-2 text-gray-700 hover:text-[#b78700] hover:underline"
      id="services-menu">
      Services
      <svg class="ml-1 h-4 w-4 text-gray-700" fill="currentColor" viewBox="0 0 20 20"
       xmlns="http://www.w3.org/2000/svg">
       <path fill-rule="evenodd"
        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
        clip-rule="evenodd"></path>
      </svg>
     </a>
     <ul
      class="absolute left-0 z-10 mt-2 grid hidden h-[400px] w-[400px] grid-cols-2 gap-4 bg-white text-gray-700 shadow-lg group-hover:block"
      id="services-submenu">

      <!-- First column with 5 items -->
      <li>
       <a href="{{ route('guest.posts') }}"
        class="hover:underline-[#b78700] block flex items-center px-4 py-2 text-gray-700 hover:text-[#b78700] hover:underline">
        Guest Posting
       </a>
      </li>
      <li>
       <a href="{{ route('sponsored.posts') }}"
        class="hover:underline-[#b78700] block flex items-center px-4 py-2 text-gray-700 hover:text-[#b78700] hover:underline">
        Sponsored Posts
       </a>
      </li>
      <li>
       <a href="{{ route('influencer.marketing') }}"
        class="hover:underline-[#b78700] block flex items-center px-4 py-2 text-gray-700 hover:text-[#b78700] hover:underline">
        Influencer Marketing
       </a>
      </li>
      <li>
       <a href="{{ route('digital.marketing') }}"
        class="hover:underline-[#b78700] block flex items-center px-4 py-2 text-gray-700 hover:text-[#b78700] hover:underline">
        Digital Marketing
       </a>
      </li>
      <li>
       <a href="{{ route('outdoor.advertising') }}"
        class="hover:underline-[#b78700] block flex items-center px-4 py-2 text-gray-700 hover:text-[#b78700] hover:underline">
        Outdoor Advertising
       </a>
      </li>

      <!-- Second column with the remaining 5 items -->
      <li>
       <a href="{{ route('cpm.campaigns') }}"
        class="hover:underline-[#b78700] block flex items-center px-4 py-2 text-gray-700 hover:text-[#b78700] hover:underline">
        CPM Campaigns
       </a>
      </li>
      <li>
       <a href="{{ route('banner.advertising') }}"
        class="hover:underline-[#b78700] block flex items-center px-4 py-2 text-gray-700 hover:text-[#b78700] hover:underline">
        Banner Advertising
       </a>
      </li>
      <li>
       <a href="#"
        class="hover:underline-[#b78700] block flex items-center px-4 py-2 text-gray-700 hover:text-[#b78700] hover:underline">

       </a>
      </li>
      <li>
       <a href="{{ route('tvradio.advertising') }}"
        class="hover:underline-[#b78700] block flex items-center px-4 py-2 text-gray-700 hover:text-[#b78700] hover:underline">
        TV/Radio Advertising
       </a>
      </li>
      <li>
       <a href="{{ route('writeforme') }}"
        class="hover:underline-[#b78700] block flex items-center px-4 py-2 text-gray-700 hover:text-[#b78700] hover:underline">
        Write For Me
       </a>
      </li>
     </ul>
    </li>

    <li class="border-b border-white py-1"><a href="#"
      class="font-semi block pl-1 pr-2 text-gray-700 hover:text-[#b78700] hover:underline">What We
      Do</a></li>
    <li class="border-b border-white py-1"><a href="#"
      class="font-semi block pl-1 pr-2 text-gray-700 hover:text-[#b78700] hover:underline">For
      Advertisers</a></li>
    <li class="border-b border-white py-1"><a href="#"
      class="font-semi block pl-1 pr-2 text-gray-700 hover:text-[#b78700] hover:underline">For
      Publishers</a></li>
    <li class="border-b border-white py-1"><a href="#"
      class="font-semi block pl-1 pr-2 text-gray-700 hover:text-[#b78700] hover:underline">For
      Social Publishers</a></li>
    <!-- About Us Dropdown -->
    <li class="group relative border-b border-white py-1">
     <a href="{{ route('aboutus') }}"
      class="font-semi block flex items-center pl-1 pr-2 text-gray-700 hover:text-[#b78700] hover:underline"
      id="about-us-menu">
      About Us
      <svg class="ml-1 h-4 w-4 text-gray-700" fill="currentColor" viewBox="0 0 20 20"
       xmlns="http://www.w3.org/2000/svg">
       <path fill-rule="evenodd"
        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
        clip-rule="evenodd"></path>
      </svg>
     </a>
     <ul class="absolute left-0 z-10 mt-2 hidden h-[200px] w-[200px] bg-white text-gray-700 shadow-lg group-hover:block"
      id="about-us-submenu">
      <li><a href="{{ route('whoweare') }}" class="block px-4 py-2 hover:text-[#b78700] hover:underline">Who We Are</a>
      </li>
      <li><a href="#" class="block px-4 py-2 hover:text-[#b78700] hover:underline">Our Blog</a>
      </li>
      <li><a href="{{ route('niches') }}" class="block px-4 py-2 hover:text-[#b78700] hover:underline">Our Niches</a>
      </li>
      <li><a href="{{ route('faqs') }}" class="block px-4 py-2 hover:text-[#b78700] hover:underline">FAQs</a></li>
      <li><a href="{{ route('writeforme') }}" class="block px-4 py-2 hover:text-[#b78700] hover:underline">Write For
        Me</a></li>

     </ul>
    </li>
    <li class="border-b border-white py-1"><a href="#"
      class="font-semi block pl-1 pr-2 text-gray-700 hover:text-[#b78700] hover:underline">Contact
      Us</a></li>
   </ul>
  </div>
 </div>
</nav>
<!-- End Navigation -->







<!-- Script -->

<script>
 document.addEventListener("DOMContentLoaded", () => {
  const hamburgerBtn = document.getElementById("hamburger-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  hamburgerBtn.addEventListener("click", () => {
   mobileMenu.classList.toggle("hidden");
  });
 });
</script>
<!-- Script -->

<!-- Script to toggle submenus -->
<script>
 // Toggle Services Submenu
 document.getElementById('services-menu').addEventListener('click', function(event) {
  event.preventDefault();
  document.getElementById('services-submenu').classList.toggle('hidden');
 });

 // Toggle About Us Submenu
 document.getElementById('about-us-menu').addEventListener('click', function(event) {
  event.preventDefault();
  document.getElementById('about-us-submenu').classList.toggle('hidden');
 });
</script>

<script>
 document.addEventListener('DOMContentLoaded', function() {
  const servicesMenu = document.getElementById('services-menu');
  const aboutUsMenu = document.getElementById('about-us-menu');
  const servicesSubmenu = document.getElementById('services-submenu');
  const aboutUsSubmenu = document.getElementById('about-us-submenu');

  // Click event for the Services dropdown
  servicesMenu.addEventListener('click', function(e) {
   e.preventDefault();
   servicesSubmenu.classList.toggle('hidden');
  });

  // Click event for the About Us dropdown
  aboutUsMenu.addEventListener('click', function(e) {
   e.preventDefault();
   aboutUsSubmenu.classList.toggle('hidden');
  });
 });
</script>

















{{-- <nav class="fixed top-0 z-50 w-full bg-white shadow-md" x-data="{ open: false }">
 <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
  <div class="relative flex h-16 items-center justify-between border-b border-gray-200">
   <!-- Logo -->
   <div class="flex items-center">
    <div class="flex-shrink-0">
     <img class="h-8 w-auto" src={{ asset('backend/assets/LOGO-no-backround.png') }} alt="Medialytica" />
    </div>

    <!-- Desktop Links (hidden on mobile) -->
    <div class="hidden lg:ml-10 lg:block lg:flex">
     <div class="flex space-x-1 overflow-x-auto">
      <a class="rounded-md bg-gray-100 px-3 py-2 text-sm font-medium text-gray-900" href="{{ route('home') }}"
       aria-current="page">Home</a>
      <a class="relative rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-gray-700"
       href="{{ route('services') }}">Services
       <div class="absolute mt-2 hidden w-48 rounded-md border border-gray-200 bg-white shadow-lg group-hover:block">
        <ul class="space-y-2 p-2">
         <li>
          <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="{{ route('guest.posts') }}">Guest
           Posting</a>
         </li>
         <li>
          <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
           href="{{ route('sponsored.posts') }}">Sponsored Posts</a>
         </li>
         <li>
          <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
           href="{{ route('influencer.marketing') }}">Influencer Marketing</a>
         </li>
         <li>
          <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
           href="{{ route('outdoor.advertising') }}">Outdoor Advertising</a>
         </li>
         <li>
          <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
           href="{{ route('digital.marketing') }}">Digital Marketing</a>
         </li>
         <li>
          <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="{{ route('link.insertion') }}">Link
           Insertion & Exchanges</a>
         </li>
         <li>
          <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
           href="{{ route('social.publishers') }}">Social Publishers</a>
         </li>
         <li>
          <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
           href="{{ route('banner.advertising') }}">Banner Advertising</a>
         </li>
         <li>
          <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="{{ route('writeforme') }}">Write For
           Me</a>
         </li>
         <li>
          <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
           href="{{ route('tvradio.advertising') }}">TV/Radio Advertising</a>
         </li>
        </ul>
       </div>
      </a>
      <a class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-gray-700"
       href="{{ route('whatwedo') }}">What We Do</a>
      <a class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-gray-700"
       href="{{ route('for.advertisers') }}">For Advertisers</a>
      <a class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-gray-700"
       href="{{ route('for.publishers') }}">For Publishers</a>
      <a class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-gray-700"
       href="{{ route('for.socialpublishers') }}">For Social Publishers</a>
      <a class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-gray-700"
       href="{{ route('aboutus') }}">About Us</a>
     </div>
    </div>
   </div>
  </div>

  <!-- Desktop Login/Signup (hidden on mobile) -->
  <div class="ml-auto hidden lg:block">
   <div class="flex items-center space-x-2">
    <a class="rounded-md bg-[#01004c] px-3 py-2 text-sm font-medium text-white hover:bg-[#b78700]"
     href="{{ route('login') }}">Login</a>
    <a class="rounded-md bg-[#b78700] px-3 py-2 text-sm font-medium text-white hover:bg-[#01004c]"
     href="{{ route('register') }}">Register</a>
   </div>
  </div>


  <!-- Mobile Menu Toggle Button -->
  <div class="-mr-2 flex lg:hidden">
   <button
    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500"
    type="button" aria-expanded="false" @click="open = !open">
    <span class="sr-only">Open main menu</span>
    <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
     stroke="currentColor">
     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
    </svg>
   </button>
  </div>
 </div>

 <!-- Mobile Menu (hidden by default, shown when toggled) -->
 <div class="lg:hidden" x-show="open" x-cloak>
  <div class="space-y-1 border-t border-gray-200 bg-white px-4 pb-3 pt-4">
   <a class="block rounded-md px-3 py-2 font-medium text-gray-900 hover:bg-gray-100"
    href="{{ route('home') }}">Home</a>
   <a class="block rounded-md px-3 py-2 font-medium text-gray-900 hover:bg-gray-100"
    href="{{ route('services') }}">Services</a>
   <a class="block rounded-md px-3 py-2 font-medium text-gray-900 hover:bg-gray-100"
    href="{{ route('whatwedo') }}">What We Do</a>
   <a class="block rounded-md px-3 py-2 font-medium text-gray-900 hover:bg-gray-100"
    href="{{ route('for.advertisers') }}">For Advertisers</a>
   <a class="block rounded-md px-3 py-2 font-medium text-gray-900 hover:bg-gray-100"
    href="{{ route('for.publishers') }}">For Publishers</a>
   <a class="block rounded-md px-3 py-2 font-medium text-gray-900 hover:bg-gray-100"
    href="{{ route('for.socialpublishers') }}">For Social Publishers</a>
   <a class="block rounded-md px-3 py-2 font-medium text-gray-900 hover:bg-gray-100"
    href="{{ route('aboutus') }}">About Us</a>
  </div>

  <!-- Mobile Login/Signup Buttons -->
  <div class="px-4 pb-3">
   <a class="block rounded-md bg-blue-500 px-3 py-2 text-center font-medium text-white"
    href="{{ route('login') }}">Login</a>
   <a class="mt-2 block rounded-md bg-green-500 px-3 py-2 text-center font-medium text-white"
    href="{{ route('register') }}">Register</a>
  </div>
 </div>
</nav> --}}
