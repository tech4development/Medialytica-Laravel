@extends('layouts.master')

@section('title', 'Write For Me')

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



  <!-- Header Section -->
  <div class="my-10 mb-20 flex w-full items-center justify-center">
   <h2 class="text-3xl font-bold uppercase tracking-wide text-gray-800">
    Write For Me
   </h2>
  </div>
  <!-- End Header Section -->


  <!-- Start:Main Section -->
  <section class="bg-white px-2 py-32 md:px-0">
   <div class="container mx-auto -mt-40 max-w-6xl items-center px-8 xl:px-5">
    <div class="flex flex-wrap items-center sm:-mx-3">
     <div class="w-full md:w-1/2 md:px-3">
      <div
       class="w-full space-y-6 pb-6 sm:max-w-md sm:pr-5 md:space-y-4 md:pb-0 lg:max-w-lg lg:space-y-8 lg:pr-0 xl:space-y-9">
       <h1 class="text-2xl font-medium tracking-tight text-gray-900 sm:text-2xl md:text-2xl lg:text-2xl xl:text-2xl">
        Boost your search ranking through
        professionally written SEO-friendly blog posts. We are the final and decisive piece in your online content
        strategy.
       </h1>
       <p class="mx-auto text-base text-gray-500 sm:max-w-md md:max-w-3xl lg:text-xl">Contact us today and get a deal for
        continuous flow of original, compelling, and engaging content for your brand or business..</p>
       <div class="relative flex flex-col sm:flex-row sm:space-x-4">
        <a href="#_"
         class="flex items-center rounded-md bg-[#b78700] px-6 py-3 text-[#004466] hover:bg-[#b78706] hover:text-white">
         Contact Us
        </a>
        </a>
        <a href="#_"
         class="flex items-center rounded-md bg-[#004466] px-6 py-3 text-gray-300 hover:bg-[#004469] hover:text-white">
         Learn More
        </a>
       </div>
      </div>
     </div>
     <div class="w-full md:w-1/2">
      <div class="h-auto w-full overflow-hidden rounded-md shadow-xl sm:rounded-xl">
       <img
        src="https://images.unsplash.com/photo-1498049860654-af1a5c566876?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
      </div>
     </div>
    </div>
   </div>
  </section>

  <!-- End:Main Section -->



  <!-- Start: Cards Section -->
  <div class="bg-white py-16">
   <div class="container mx-auto text-center">
    <div class="mb-4 flex w-full items-center justify-center">
     <!-- Left Divider -->
     <span class="h-1 w-64 rounded bg-[#b78700]"></span>

     <!-- Heading with hover effect -->
     <h2
      class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] hover:text-white dark:text-white">
      Why Choose Our "Write for Me" Service?
     </h2>


     <!-- Right Divider -->
     <span class="h-1 w-64 rounded bg-[#b78700]"></span>
    </div>

    <p class="font-bold-300 mb-6 text-center text-lg italic text-gray-600 dark:text-gray-300">

    </p>


    <div class="grid grid-cols-1 gap-6 md:grid-cols-5">
     <!-- First Card -->
     <div class="border-gray border p-8">
      <div class="flex h-16 w-16 items-center justify-center rounded-full bg-[#004466] text-[#b78700] shadow-2xl">
       <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
         d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
         clip-rule="evenodd" />
       </svg>
      </div>
      <h2 class="mb-3 mt-6 text-left font-medium uppercase text-[#004466]"> An ever-updating mega database
      </h2>
      <p class="mb-3 text-left text-sm font-light text-gray-500">Discover unlimited options from our continuously
       curated publishers' database.</p>
      <a class="flex items-center text-left text-[#b78700] hover:text-[#004466]" href="/">More about us
       <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
         d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
         clip-rule="evenodd" />
       </svg>
      </a>
     </div>

     <!-- Second Card -->
     <div class="border-gray border p-8">
      <div class="flex h-16 w-16 items-center justify-center rounded-full bg-[#004466] text-[#b78700] shadow-2xl">
       <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
         d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
         clip-rule="evenodd" />
       </svg>
      </div>
      <h2 class="mb-3 mt-6 text-left font-medium uppercase text-[#004466]">Expansive Reach
      </h2>
      <p class="mb-3 text-left text-sm font-light text-gray-500">Access diverse market niches, expand your global
       reach, and accelerate business growth.</p>
      <a class="flex items-center text-left text-[#b78700] hover:text-[#004466]" href="/">More about us
       <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
         d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
         clip-rule="evenodd" />
       </svg>
      </a>
     </div>

     <!-- Third Card -->
     <div class="border-gray border p-8">
      <div class="flex h-16 w-16 items-center justify-center rounded-full bg-[#004466] text-[#b78700] shadow-2xl">
       <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
         d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
         clip-rule="evenodd" />
       </svg>
      </div>
      <h2 class="mb-3 mt-6 text-left font-medium uppercase text-[#004466]">Experienced Team
      </h2>
      <p class="mb-3 text-left text-sm font-light text-gray-500">Our team has a combined 10+ years of experience in
       media and technology.

      </p>
      <a class="flex items-center text-left text-[#b78700] hover:text-[#004466]" href="/">More about us
       <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
         d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
         clip-rule="evenodd" />
       </svg>
      </a>
     </div>
     <!-- Fourth Card -->
     <div class="border-gray border p-8">
      <div class="flex h-16 w-16 items-center justify-center rounded-full bg-[#004466] text-[#b78700] shadow-2xl">
       <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
         d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
         clip-rule="evenodd" />
       </svg>
      </div>
      <h2 class="mb-3 mt-6 text-left font-medium uppercase text-[#004466]">Flexible Pricing
      </h2>
      <p class="mb-3 text-left text-sm font-light text-gray-500">Achieve unmatched results on your budget.</p>
      <a class="flex items-center text-left text-[#b78700] hover:text-[#004466]" href="/">More about us
       <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
         d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
         clip-rule="evenodd" />
       </svg>
      </a>
     </div>

     <!-- Fifth Card -->
     <div class="border-gray border p-8">
      <div class="flex h-16 w-16 items-center justify-center rounded-full bg-[#004466] text-[#b78700] shadow-2xl">
       <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
         d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
         clip-rule="evenodd" />
       </svg>
      </div>
      <h2 class="mb-3 mt-6 text-left font-medium uppercase text-[#004466]">Flexible Pricing
      </h2>
      <p class="mb-3 text-left text-sm font-light text-gray-500">Achieve unmatched results on your budget.</p>
      <a class="flex items-center text-left text-[#b78700] hover:text-[#004466]" href="/">More about us
       <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
         d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
         clip-rule="evenodd" />
       </svg>
      </a>
     </div>

    </div>

   </div>
  </div>
  <!-- End: Cards Section -->




  <!-- Start: Conclusion -->
  <!-- Header Section -->
  <div class="mb-10 mt-10 flex w-full items-center justify-center">
   <!-- Left Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>

   <!-- Heading with hover effect -->
   <h2
    class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] dark:text-white">
    Conclusion
   </h2>

   <!-- Right Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>
  </div>
  <!-- End Header Section -->


  <div class="w-full px-4 dark:bg-[#004466]">
   <div class="pt-2 md:pt-10">
    <div class="flex flex-wrap items-center pb-12">
     <div class="w-full md:w-1/2 md:pr-6 lg:w-2/3 xl:pr-20">
      <div class="text-color py-2">
       <h1 role="heading"
        class="f-f-l text-2xl font-black tracking-tighter dark:text-white md:leading-snug lg:text-3xl">
        Conclusion
       </h1>
       <p role="contentinfo"
        class="font-poppins font-semi py-4 text-sm dark:text-white md:py-8 md:leading-10 lg:text-lg lg:leading-8">
        To sum it up, your online presence, lead generation, and conversion to sales rely significantly on the
        excellence of your content.
        Opt for our “Write for Me” services to elevate your brand, charm your audience, and assert dominance in your
        niche.
        Let us be your trusted partner in creating content that captivates and converts with reliability and expertise.
       </p>

      </div>
     </div>
     <div class="relative flex h-96 w-full items-end justify-center md:w-1/2 lg:w-1/3">
      <img class="absolute inset-0 h-full w-full rounded-md object-cover object-center"
       src="{{ asset('backend/assets/why us.webp') }}" alt="" role="img" />
      <div class="relative z-10 -mb-20 w-10/12 rounded bg-white p-6 shadow">
       <div class="mt-12 flex w-full items-center justify-between sm:w-full">
        <h2 class="font-semi -mt-8 font-serif text-xl text-[#004466]">
         Contact us today and take the first step toward a content strategy that sets you apart in the digital
         landscape.
        </h2>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>


  <!-- End: Conclusion -->


















  <!-- Contact Us -->
  <div class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14">
   <div class="mx-auto max-w-2xl lg:max-w-5xl">
    <div class="text-center">
     <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl">Contact us</h1>
     <p class="text-gray mt-1">We'd love to talk about how we can help you.</p>
    </div>

    <div class="mt-12 grid items-center gap-6 lg:grid-cols-2 lg:gap-16">
     <!-- Form Card -->
     <div class="flex flex-col rounded-xl border border-gray-300 p-4 sm:p-6 lg:p-8">
      <h2 class="mb-8 text-xl font-semibold text-gray-800">Fill in the form</h2>
      <form>
       <div class="grid gap-4">
        <!-- Grid -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
         <div>
          <label class="sr-only" for="hs-firstname-contacts-1">First Name</label>
          <input
           class="block w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm placeholder-[#004466] focus:border-blue-500 focus:ring-blue-500"
           id="hs-firstname-contacts-1" name="hs-firstname-contacts-1" type="text" placeholder="First Name">
         </div>
         <div>
          <label class="sr-only" for="hs-lastname-contacts-1">Last Name</label>
          <input
           class="block w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm placeholder-[#004466] focus:border-blue-500 focus:ring-blue-500"
           id="hs-lastname-contacts-1" name="hs-lastname-contacts-1" type="text" placeholder="Last Name">
         </div>
        </div>
        <!-- End Grid -->
        <div>
         <label class="sr-only" for="hs-email-contacts-1">Email</label>
         <input
          class="block w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm placeholder-[#004466] focus:border-blue-500 focus:ring-blue-500"
          id="hs-email-contacts-1" name="hs-email-contacts-1" type="email" placeholder="Email">
        </div>
        <div>
         <label class="sr-only" for="hs-message-contacts-1">Message</label>
         <textarea
          class="block w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm placeholder-[#004466] focus:border-blue-500 focus:ring-blue-500"
          id="hs-message-contacts-1" name="hs-message-contacts-1" rows="4" placeholder="Your Message"></textarea>
        </div>
       </div>
       <button type="submit"
        class="mt-4 w-full rounded-lg bg-blue-500 px-4 py-3 text-sm font-medium text-white hover:bg-blue-600 focus:ring-4 focus:ring-blue-200">Submit</button>
      </form>
     </div>
     <!-- End Form Card -->

     <div class="divide-y divide-gray-200 dark:divide-neutral-800">
      <!-- Icon Block -->
      <div class="flex gap-x-7 py-6">
       <svg class="size-6 mt-1.5 shrink-0 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10" />
        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
        <path d="M12 17h.01" />
       </svg>
       <div class="grow">
        <h3 class="font-semibold text-gray-800 dark:text-neutral-200">Knowledgebase</h3>
        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">We're here to help with any
         questions or code.</p>
        <a
         class="text-gray mt-2 inline-flex items-center gap-x-2 text-sm font-medium hover:text-gray-800 focus:text-gray-800 focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
         href="#">
         Contact support
         <svg class="size-2.5 shrink-0 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
           d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z"
           fill="currentColor" />
         </svg>
        </a>
       </div>
      </div>
      <!-- End Icon Block -->

      <!-- Icon Block -->
      <div class="flex gap-x-7 py-6">
       <svg class="size-6 mt-1.5 shrink-0 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round">
        <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z" />
        <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1" />
       </svg>
       <div class="grow">
        <h3 class="font-semibold text-gray-800 dark:text-neutral-200">FAQ</h3>
        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">Search our FAQ for answers to
         anything you might ask.</p>
        <a
         class="text-gray mt-2 inline-flex items-center gap-x-2 text-sm font-medium hover:text-gray-800 focus:text-gray-800 focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
         href="#">
         Visit FAQ
         <svg class="size-2.5 shrink-0 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
           d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z"
           fill="currentColor" />
         </svg>
        </a>
       </div>
      </div>
      <!-- End Icon Block -->



      <!-- Icon Block -->
      <div class="flex gap-x-7 py-6">
       <svg class="size-6 mt-1.5 shrink-0 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round">
        <path
         d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z" />
        <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10" />
       </svg>
       <div class="grow">
        <h3 class="font-semibold text-gray-800 dark:text-neutral-200">Contact us by email</h3>
        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">If you wish to write us an
         email instead please use</p>
        <a
         class="text-gray mt-2 inline-flex items-center gap-x-2 text-sm font-medium hover:text-gray-800 focus:text-gray-800 focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
         href="#">
         example@site.com
        </a>
       </div>
      </div>
      <!-- End Icon Block -->
     </div>
    </div>
   </div>
  </div>
  <!-- End Contact Us -->







 </div>
@endsection

@section('js_content')



@endsection
