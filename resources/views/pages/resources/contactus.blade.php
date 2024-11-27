@extends('layouts.master')

@section('title', 'Guest Posting')

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
     <svg class="size-4 dark:text-neutral mx-2 shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
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
       <svg class="size-4 dark:text-neutral mx-2 shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
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
    class="border-white-700 text-white-400 mb-5 rounded-lg border px-4 py-2 text-sm transition duration-300 ease-in-out hover:text-gray-500 dark:border-gray-300 dark:text-gray-300 dark:hover:text-gray-400">
    Medialytica
   </a>
   <h1
    class="font-display text-white-300 mx-auto max-w-4xl text-5xl font-bold tracking-normal dark:text-gray-300 sm:text-7xl">

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
   <p class="mx-auto mt-12 w-full py-12 text-center text-lg leading-relaxed text-white dark:text-gray-300">
    We connect content creators to advertisers and are committed to helping both parties succeed in the digital space.

    We publish advertisers’ content on 10K+ high-quality, high-authority sites within 24 hours.

    We do genuine manual outreach to create long-term link-building connections for our clients.

    We will help content creators get discovered by advertisers and monetize their content.
   </p>

   {{-- <a
    class="mt-8 rounded-xl bg-orange-600 px-4 py-3 font-medium text-white transition hover:bg-orange-500 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-600 sm:mt-10"
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

  <section class="bg-blue-50 dark:bg-slate-800" id="contact">
   <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">

    <div class="flex items-stretch justify-center">
     <div class="grid md:grid-cols-2">
      <div class="h-full pr-6">
       <p class="mb-12 mt-3 text-lg text-gray-600 dark:text-slate-400">
        Class aptent taciti sociosqu ad
        litora torquent per conubia nostra, per inceptos himenaeos. Duis nec ipsum orci. Ut scelerisque
        sagittis ante, ac tincidunt sem venenatis ut.
       </p>
       <ul class="mb-6 md:mb-0">
        <li class="flex">
         <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
           stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
           <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
           <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
           </path>
          </svg>
         </div>
         <div class="mb-4 ml-4">
          <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Our Address
          </h3>
          <p class="text-gray-600 dark:text-slate-400">1230 Maecenas Street Donec Road</p>
          <p class="text-gray-600 dark:text-slate-400">New York, EEUU</p>
         </div>
        </li>
        <li class="flex">
         <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
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
          <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Contact
          </h3>
          <p class="text-gray-600 dark:text-slate-400">Mobile: +1 (123) 456-7890</p>
          <p class="text-gray-600 dark:text-slate-400">Mail: tailnext@gmail.com</p>
         </div>
        </li>
        <li class="flex">
         <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
           stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
           <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
           <path d="M12 7v5l3 3"></path>
          </svg>
         </div>
         <div class="mb-4 ml-4">
          <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Working
           hours</h3>
          <p class="text-gray-600 dark:text-slate-400">Monday - Friday: 08:00 - 17:00</p>
          <p class="text-gray-600 dark:text-slate-400">Saturday &amp; Sunday: 08:00 - 12:00</p>
         </div>
        </li>
       </ul>
      </div>
      <div class="card h-fit max-w-6xl p-5 md:p-12" id="form">
       <h2 class="mb-4 text-2xl font-bold dark:text-white">Ready to Get Started?</h2>
       <form id="contactForm">
        <div class="mb-6">
         <div class="mx-0 mb-1 sm:mb-4">
          <div class="mx-0 mb-1 sm:mb-4">
           <label for="name" class="pb-1 text-xs uppercase tracking-wider"></label><input type="text"
            id="name" autocomplete="given-name" placeholder="Your name"
            class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"
            name="name">
          </div>
          <div class="mx-0 mb-1 sm:mb-4">
           <label for="email" class="pb-1 text-xs uppercase tracking-wider"></label><input type="email"
            id="email" autocomplete="email" placeholder="Your email address"
            class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"
            name="email">
          </div>
         </div>
         <div class="mx-0 mb-1 sm:mb-4">
          <label for="textarea" class="pb-1 text-xs uppercase tracking-wider"></label>
          <textarea id="textarea" name="textarea" cols="30" rows="5" placeholder="Write your message..."
           class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"></textarea>
         </div>
        </div>
        <div class="text-center">
         <button type="submit" class="font-xl w-full rounded-md bg-blue-800 px-6 py-3 text-white sm:mb-0">Send
          Message</button>
        </div>
       </form>
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
   <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
    <div class="mt-16 lg:mt-20">
     <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
      <div class="overflow-hidden rounded-lg">
       <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11672.945750644447!2d-122.42107853750231!3d37.7730507907087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858070cc2fbd55%3A0xa71491d736f62d5c!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2sus!4v1619524992238!5m2!1sen!2sus"
        width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div>
       <div class="mx-auto max-w-full overflow-hidden rounded-lg">
        <div class="px-6 py-4">
         <h3 class="text-lg font-medium text-gray-900">Our Address</h3>
         <p class="mt-1 text-gray-600">123 Main St, San Francisco, CA 94105</p>
        </div>
        <div class="border-t border-gray-200 px-6 py-4">
         <h3 class="text-lg font-medium text-gray-900">Hours</h3>
         <p class="mt-1 text-gray-600">Monday - Friday: 9am - 5pm</p>
         <p class="mt-1 text-gray-600">Saturday: 10am - 4pm</p>
         <p class="mt-1 text-gray-600">Sunday: Closed</p>
        </div>
        <div class="border-t border-gray-200 px-6 py-4">
         <h3 class="text-lg font-medium text-gray-900">Contact</h3>
         <p class="mt-1 text-gray-600">Email: info@example.com</p>
         <p class="mt-1 text-gray-600">Phone: +1 23494 34993</p>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>

  <!-- End: Advertisers -->


















 </div>
@endsection

@section('js_content')



@endsection
