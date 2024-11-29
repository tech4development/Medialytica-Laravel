@extends('layouts.master')

@section('title', 'Contact Us')

@section('css')

@endsection

@section('content')
 <div class="main-body bg-white">
  <!-- Dynamic Breadcrumb -->
  <nav aria-label="Breadcrumb" class="mb-0 mt-0 flex bg-[#004466] px-4 py-2">
   <ol class="flex items-center whitespace-nowrap text-white">
    <!-- Home -->
    <li class="inline-flex items-center">
     <a href="{{ url('/') }}"
      class="flex items-center text-sm hover:text-white focus:text-[#004466] focus:outline-none dark:text-neutral-500 dark:hover:text-[#004466] dark:focus:text-[#004466]">
      Home
     </a>
     <svg class="size-4 dark:text-neutral text-white-400 mx-2 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
      height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
      stroke-linejoin="round">
      <path d="m9 18 6-6-6-6"></path>
     </svg>
    </li>

    @php
     $segments = request()->segments(); // Get all URL segments
    @endphp

    <!-- Dynamic Breadcrumb Links -->
    @foreach ($segments as $index => $segment)
     @if ($index + 1 < count($segments))
      <!-- Intermediate Links -->
      <li class="inline-flex items-center">
       <a href="{{ url(implode('/', array_slice($segments, 0, $index + 1))) }}"
        class="flex items-center text-sm text-white hover:text-[#004466] focus:text-[#004466] focus:outline-none dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500">
        {{ ucwords(str_replace('-', ' ', $segment)) }}
       </a>
       <svg class="size-4 dark:text-neutral text-white-400 mx-2 shrink-0" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"></path>
       </svg>
      </li>
     @else
      <!-- Current Page -->
      <li class="inline-flex items-center truncate text-sm font-semibold text-white dark:text-neutral-200"
       aria-current="page">
       {{ ucwords(str_replace('-', ' ', $segment)) }}
      </li>
     @endif
    @endforeach
   </ol>
  </nav>
  <!-- End Breadcrumb -->




  <!-- Start:Main Section -->
  <div
   class="flex w-full flex-1 flex-col items-center justify-center bg-[#004466] via-teal-50 to-green-50/50 px-4 py-20 text-center dark:from-gray-800 dark:via-gray-700 dark:to-gray-800">
   <a href=""
    class="border-white-700 hover:text-white-500 dark:text-white-300 dark:hover:text-white-400 mb-5 rounded-lg border px-4 py-2 text-sm text-white transition duration-300 ease-in-out dark:border-gray-300">
    Medialytica
   </a>
   <h1
    class="font-display text-white-300 dark:text-white-300 mx-auto max-w-4xl text-5xl font-bold tracking-normal sm:text-7xl">

    <span class="relative whitespace-nowrap text-orange-500 dark:text-orange-300">
     <svg aria-hidden="true" viewBox="0 0 418 42"
      class="absolute left-0 top-2/3 h-[0.58em] w-full fill-orange-500 dark:fill-orange-300/60"
      preserveAspectRatio="none">
      <path
       d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.780 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.540-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.810 23.239-7.825 27.934-10.149 28.304-14.005 .417-4.348-3.529-6-16.878-7.066Z">
      </path>
     </svg>
     <span class="relative"> Contact Us</span>
    </span>
   </h1>
   <p class="dark:text-white-300 mx-auto mt-12 w-full py-12 text-center text-lg leading-relaxed text-white">
    We connect content creators to advertisers.
    <br><br>
    Contact us today for tech and media services including Contextual Guest Posts, Link Insertion, Niche Edits, Banner
    Advertising, Influencer Marketing, Product Placement in Films and Music Videos, CPM Campaigns, SEO, TV and Radio
    advertising, Outdoor Advertising, Website & Software Development, and Performance-Based Marketing.
   </p>

   {{-- <a
    class="mt-8 rounded-xl bg-orange px-4 py-3 font-medium text-white transition hover:bg-orange-500 dark:bg-gray-800 dark:text-white-300 dark:hover:bg-gray sm:mt-10"
    href="">Get started</a> --}}
  </div>
  <!-- End:Main Section -->




  <!-- Start: Publishers -->
  <!-- Header Section -->
  <div class="mb-4 mt-20 flex w-full items-center justify-center">
   <!-- Left Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>

   <!-- Heading with hover effect -->
   <h2
    class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] dark:text-white">
    Get in Touch
   </h2>

   <!-- Right Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>
  </div>
  <!-- End Header Section -->

  <section class="bg-[#004466]" id="contact">
   <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

    <!-- Success Message -->
    {{-- @if (session('success'))
     <div class="mb-4 rounded-lg bg-green-500 p-4 text-white">
      {{ session('success') }}
     </div>
    @endif --}}


    <div class="flex items-stretch justify-center">
     <div class="grid md:grid-cols-2">
      <div class="h-full pr-6">
       <p class="mb-12 mt-3 text-lg text-white">
        We’d love to hear from you. Whether you have a quick question, an inquiry, or just want to say hello, reach out
        to us today.
       </p>
       <ul class="mb-6 md:mb-0">
        <li class="flex">
         <div class="text-white-50 flex h-10 w-10 items-center justify-center rounded bg-[#b78700]">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
           stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
           <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
           <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
           </path>
          </svg>
         </div>
         <div class="mb-4 ml-4">
          <h3 class="text-white-900 mb-2 text-lg font-medium leading-6 dark:text-white">Our Address
          </h3>
          <p class="text-white">Runda, Tala Road - Off Kiambu Road</p>
          <p class="text-white">Nairobi, Kenya</p>
         </div>
        </li>
        <li class="flex">
         <div class="text-white-50 flex h-10 w-10 items-center justify-center rounded bg-[#b78700]">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
           stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
           <path
            d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
           </path>
           <path d="M15 7a2 2 0 0 1 2 2"></path>
           <path d="M15 3a6 6 0 0 1 6 6"></path>
          </svg>
         </div>
         <div class="mb-4 ml-4">
          <h3 class="text-white-900 mb-2 text-lg font-medium leading-6 dark:text-white">Contact
          </h3>
          <p class="text-white">Mobile: +254 725966032

          </p>
          <p class="text-white">Email: letstalk@medialytica.com</p>
         </div>
        </li>
        <li class="flex">
         <div class="text-white-50 flex h-10 w-10 items-center justify-center rounded bg-[#b78700]">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
           stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
           <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
           <path d="M12 7v5l3 3"></path>
          </svg>
         </div>
         <div class="mb-4 ml-4">
          <h3 class="text-white-900 mb-2 text-lg font-medium leading-6 dark:text-white">Working
           hours</h3>
          <p class="text-white">Monday - Friday: 08:00 - 17:00</p>
          <p class="text-white">Saturday &amp; Sunday: 08:00 - 12:00</p>
         </div>
        </li>
       </ul>
      </div>
      <div class="card h-fit max-w-6xl p-5 md:p-12" id="form">
       <h2 class="-mt-10 mb-4 text-center text-2xl font-bold text-white">Ready to Get Started?</h2>
       <!-- Form Card -->
       <div class="flex flex-col rounded-xl border border-gray-300 bg-white p-4 sm:p-6 lg:p-8">
        <!-- Success Message -->
        @if (session('success'))
         <div id="success-message" class="mb-4 rounded-lg bg-green-500 p-4 text-white">
          {{ session('success') }}
         </div>
        @endif

        <h2 class="text-gray mb-8 text-center text-xl font-semibold">Fill in the form</h2>
        <form action="{{ route('contactus.store') }}" method="POST">
         @csrf
         <div class="grid gap-4">
          <!-- Grid -->
          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
           <div>
            <label class="sr-only" for="first_name">First Name</label>
            <input
             class="block w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm placeholder-gray-400 focus:border-blue-500 focus:ring-blue-500"
             id="first_name" name="first_name" type="text" placeholder="First Name" required>
           </div>
           <div>
            <label class="sr-only" for="last_name">Last Name</label>
            <input
             class="block w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm placeholder-gray-400 focus:border-blue-500 focus:ring-blue-500"
             id="last_name" name="last_name" type="text" placeholder="Last Name" required>
           </div>
          </div>
          <!-- End Grid -->
          <div>
           <label class="sr-only" for="email">Email</label>
           <input
            class="block w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm placeholder-gray-400 focus:border-blue-500 focus:ring-blue-500"
            id="email" name="email" type="email" placeholder="Email" required>
          </div>
          <div>
           <label class="sr-only" for="message">Message</label>
           <textarea
            class="block w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm placeholder-gray-400 focus:border-blue-500 focus:ring-blue-500"
            id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
          </div>
         </div>
         <button type="submit"
          class="hover:bg-yellow mt-4 w-full rounded-lg bg-yellow-500 px-4 py-3 text-sm font-medium text-white focus:ring-4 focus:ring-yellow-400">
          Submit
         </button>
        </form>
       </div>
       <!-- End Form Card -->

      </div>
     </div>
    </div>
   </div>
  </section>

  <!--End: Publishers -->

  <!-- Start: Advertisers -->
  <!-- Header Section -->
  <div class="mb-4 mt-20 flex w-full items-center justify-center">
   <!-- Left Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>

   <!-- Heading with hover effect -->
   <h2
    class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] dark:text-white">
    Our Location
   </h2>

   <!-- Right Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>
  </div>
  <!-- End Header Section -->

  <section class="bg-gray-100">
   <div class="mx-auto -mt-10 max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
    <div class="mt-16 lg:mt-20">
     <div class="grid grid-cols-1 gap-8 md:grid-cols-1">
      <!-- Removed unnecessary divs for performance -->
      <div class="overflow-hidden rounded-lg">
       <!-- iframe with lazy loading enabled -->
       <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9955.094698361625!2d36.833908396186644!3d-1.2300533134744576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f179a08f92317%3A0x176220d1b30ee92c!2sTech%20For%20Development!5e0!3m2!1sen!2ske!4v1732888399450!5m2!1sen!2ske"
        width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy">
       </iframe>
      </div>
     </div>
    </div>
   </div>
  </section>


  <!-- End: Advertisers -->


















 </div>
@endsection

@section('js_content')

 <script>
  window.onload = function() {
   // Check if the success message exists
   var successMessage = document.getElementById('success-message');
   if (successMessage) {
    // Scroll to the success message section
    successMessage.scrollIntoView({
     behavior: 'smooth',
     block: 'center'
    });
   }
  };
 </script>


@endsection
