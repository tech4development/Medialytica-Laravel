  <div class="relative h-screen bg-cover bg-center sm:h-auto md:h-auto"
   style="background-image: url('{{ asset('backend/assets/Home Leaderboard.jpg') }}');">
   <!-- Gray Overlay -->
   <div class="absolute inset-0 bg-gray-900 opacity-40"></div>
   <!-- Content Container -->
   <div class="container relative z-10 mx-auto flex h-full flex-col items-center justify-center px-4 py-4">
    <!-- Title -->
    <h1 class="-mt-24 mb-8 text-center text-3xl text-white sm:text-4xl md:mt-20 md:text-5xl">
     We Connect Content Creators to Advertisers
    </h1>

    <!-- Cards Section -->
    <div class="flex w-full flex-col gap-6 md:h-auto md:flex-row">
     <!-- Card 1 -->
     <div class="flex-1 rounded-lg bg-white p-6 text-center shadow-lg">
      <h2 class="mb-4 text-xl font-bold">Advertiser or Brand</h2>
      <p class="mb-4 text-gray-600">
       I am an SEO or media buying professional interested in paid content partnerships, including sponsored posts, link
       insertion, and influencer marketing.
      </p>
      <a href="{{ route('guest.page') }}">
       <button class="rounded bg-[#004466] px-4 py-2 text-white transition hover:bg-[#b78700]">
        Get Started
       </button>
      </a>
     </div>

     <!-- Card 2 -->
     <div class="flex-1 rounded-lg bg-white p-6 text-center shadow-lg">
      <h2 class="mb-4 text-xl font-bold">Website or Blog</h2>
      <p class="mb-4 text-gray-600">
       I have a blog or website and would like to receive orders, publish advertiser content, and get paid.
      </p>
      <button class="rounded bg-[#004466] px-4 py-2 text-white transition hover:bg-[#b78700]">
       Get Started
      </button>
     </div>

     <!-- Card 3 -->
     <div class="flex-1 rounded-lg bg-white p-6 text-center shadow-lg">
      <h2 class="mb-4 text-xl font-bold">Social Publishers</h2>
      <p class="mb-4 text-gray-600">
       I am a social media influencer and would like to publish branded content on my social pages and get paid.
      </p>
      <button class="rounded bg-[#004466] px-4 py-2 text-white transition hover:bg-[#b78700]">
       Get Started
      </button>
     </div>

     <!-- Card 4 -->
     <div class="flex-1 rounded-lg bg-white p-6 text-center shadow-lg">
      <h2 class="mb-4 text-xl font-bold">Write For Me</h2>
      <p class="mb-4 text-gray-600">
       I am a brand manager or business owner seeking professional, SEO-friendly content that effectively promotes my
       brand, products, and services.
      </p>
      <button class="rounded bg-[#004466] px-4 py-2 text-white transition hover:bg-[#b78700]">
       Get Started
      </button>
     </div>
    </div>

   </div>
  </div>