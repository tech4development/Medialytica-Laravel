<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiktok Group Details</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/simplebar/simplebar.min.css') }}">

    <!-- Main JS -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>


    <!-- Form-validation JS -->
    <script src="{{ asset('backend/assets/js/form-validation.js') }}"></script>



</head>

<body class="bg-gray-100">
    @if (session('success'))
    <div class="bg-success border border-success text-white alert" role="alert">
        <span class="font-bold">Success</span> {{ session('success') }}
    </div>
@endif
    <div class="container mx-auto p-6 max-w-4xl">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-4 text-center">Add your Tiktok Group Details</h1>
            <form action="{{ route('tiktokgroup.store') }}" method="POST">
                @csrf
                <!-- Name -->
                <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                    <h2 class="text-lg font-semibold mb-2 text-gray-800">Personal Details</h2>

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Enter your name *</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                 <!-- Email -->
                 <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Enter your email address</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Phone Number -->
                <div class="mb-4">
                    <label for="phone_number" class="block text-sm font-medium text-gray-700">Enter your Phone Number *</label>
                    <input type="tel" id="phone_number" name="phone_number" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Contact Person Name -->
                <div class="mb-4">
                    <label for="contact_person_name" class="block text-sm font-medium text-gray-700">Contact Person Name *</label>
                    <input type="text" id="contact_person_name" name="contact_person_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Contact Person Email -->
                <div class="mb-4">
                    <label for="contact_person_email" class="block text-sm font-medium text-gray-700">Contact Person Email *</label>
                    <input type="email" id="contact_person_email" name="contact_person_email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Contact Person Phone -->
                <div class="mb-4">
                    <label for="contact_person_phone" class="block text-sm font-medium text-gray-700">Contact Person Phone *</label>
                    <input type="tel" id="contact_person_phone" name="contact_person_phone" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Language -->
                   <div class="mb-4">
                    <label for="language" class="block text-sm font-medium text-gray-700">Language *</label>
                    <input type="text" id="language" name="language" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Country -->
                <div class="mb-4">
                    <label for="country" class="block text-sm font-medium text-gray-700">Country *</label>
                    <input type="text" id="country" name="country" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                </div>

                <!-- Influencer Categories -->
                <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Select your social publisher/influencer categories *</span>
                    <div class="mt-2 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ([
                            'Musician/Artist',
                            'DJ/MC',
                            'TV Personality',
                            'Radio Personality',
                            'Comedian',
                            'Actor/Actress',
                            'Tiktok Influencer',
                            'Fashion Blogger',
                            'Athlete/Sports Personality',
                            'Bloggers',
                            'Fitness Enthusiast',
                            'Gamer',
                            'Food Blogger',
                            'Travel Blogger'
                        ] as $category)
                            <div class="flex items-center">
                                <input type="checkbox" id="influencer_type_{{ $loop->index }}" name="influencer_types[]" value="{{ $category }}" class="mr-2">
                                <label for="influencer_type_{{ $loop->index }}" class="text-gray-600">{{ $category }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                </div>


                 <!-- Niches -->
                 <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                 <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Niches/Themes *Select all content niches/themes that you accept on your social media groups</span>
                    <div class="mt-2 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach (['General Posts', 'Betting and Casinos', 'Real Estate', 'Automotive', 'FinTech', 'Fashion', 'Gadgets & appliances', 'CBD', 'Active lifestyles and fitness', 'Crypto & Forex', 'Sports', 'Home Improvement'] as $niche)
                            <div class="flex items-center">
                                <input type="checkbox" id="niches_themes{{ $loop->index }}" name="niches_themes[]" value="{{ $niche }}" class="mr-2">
                                <label for="niches_themes{{ $loop->index }}" class="text-gray-600">{{ $niche }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>


                <!-- Others -->
                <div class="mb-4">
                    <label for="others" class="block text-sm font-medium text-gray-700">Others (specify)</label>
                    <input type="text" id="others" name="other_influencer_types" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                 </div>

                 <!-- Publishing Time -->
                 <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                 <div class="mb-4">
                    <label for="publishing_time" class="block text-sm font-medium text-gray-700">Publishing Time *</label>
                    <select id="publishing_time" name="publishing_time" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <option value="0" selected>Select publishing time</option>
                        <option value="24Hrs">24Hrs</option>
                        <option value="48Hrs">48Hrs</option>
                        <option value="72Hrs">72Hrs</option>
                    </select>
                </div>

                  <!-- Paypal Email -->
                  <div class="mb-4">
                    <label for="paypal_email" class="block text-sm font-medium text-gray-700">Paypal Email *</label>
                    <input type="email" id="paypal_email" name="paypal_email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                 </div>


                 <!--Tiktok Group Name -->
                 <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                    <h2 class="text-lg font-semibold mb-2 text-gray-800">Tiktok Group</h2>
                 <div class="mb-4">
                    <label for="tiktok_group_name" class="block text-sm font-medium text-gray-700">Enter your Tiktok group name *</label>
                    <input type="text" id="tiktok_group_name" name="tiktok_group_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>


                <!--Tiktok Group URL -->
                <div class="mb-4">
                    <label for="tiktok_group__url" class="block text-sm font-medium text-gray-700">Enter your Tiktok group URL *</label>
                    <input type="url" id="tiktok_group_url" name="tiktok_group_url" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>


                <!-- No of followers -->
                <div class="mb-4">
                    <label for="tiktok_group_members" class="block text-sm font-medium text-gray-700">Enter the number of followers on Tiktok Group</label>
                    <input type="number" id="tiktok_group_members" name="tiktok_group_members" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="1" required>
                </div>


                <!-- Target Audience -->
                <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                <div class="mb-4">
                    <label for="target_audience" class="block text-sm font-medium text-gray-700">Target Audience *</label>
                    <select id="target_audience" name="target_audience" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <option value="" disabled selected>Select your target audience</option>
                        <option value="Below 18 years">Below 18 years</option>
                        <option value="18 to 35 years">18 to 35 years</option>
                        <option value="Over 35 years">Over 35 years</option>
                    </select>
                </div>


                <!-- Influencer Category -->
                <div class="mb-4">
                    <label for="influencer_category" class="block text-sm font-medium text-gray-700">Influencer Category *</label>
                    <select id="influencer_category" name="influencer_category" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <option value="" disabled selected>Select your influencer category</option>
                        <option value="Mega Influencers">Mega Influencers (More than 1M followers)</option>
                        <option value="Macro Influencers">Macro Influencers (100K - 1M followers)</option>
                        <option value="Micro Influencers">Micro Influencers (1K - 100K followers)</option>
                        <option value="Nano Influencers">Nano Influencers (Below 1K followers)</option>
                    </select>
                </div>
                </div>

                <!-- Post Types -->
                <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                    <div class="mb-4">
                        <span class="block text-sm font-medium text-gray-700">Which type of posts do you make on yourTiktok group? Select all that apply *</span>
                        <div class="mt-2 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">
                            <div class="flex items-center">
                                <input type="checkbox" id="post_type_skits" name="post_types[]" value="Skits" class="mr-2" onchange="toggleDivs()">
                                <label for="post_type_skits" class="text-gray-600">Skits</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="post_type_video_ads" name="post_types[]" value="Video Ads" class="mr-2" onchange="toggleDivs()">
                                <label for="post_type_video_ads" class="text-gray-600">Video Ads</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="post_type_posts" name="post_types[]" value="Image/Poster/Banner/Text posts" class="mr-2" onchange="toggleDivs()">
                                <label for="post_type_image_poster_banner_text" class="text-gray-600">Image/Poster/Banner/Text posts</label>
                            </div>
                        </div>
                    </div>
                </div>

                 <!--Tiktok Post Rates -->
                {{-- <div  id="posts_div" class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                    <h2 class="text-lg font-semibold mb-2 text-gray-800 text-center">Facebook Post Rates</h2>

                    <p class="text-gray-600 mb-4 text-center">Indicate how much you charge for posts onTiktok. All rates should be in USD.</p>

                    <p class="text-gray-600 mb-4 text-center">Kindly provide the rates where applicable.</p>
                </div> --}}


                <!--Tiktok Post Rates -->
                <div  id="posts_div" class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white" style="display: none;">
                    <h2 class="text-lg font-semibold mb-2 text-gray-800">Tiktok Post Rates</h2>

                    <p class="text-gray-600 mb-4">Indicate how much you charge for posts onTiktok. All rates should be in USD.</p>

                    <p class="text-gray-600 mb-4">Kindly provide the rates where applicable.</p>
                       <!--Tiktok Image/Poster/Banner/Text posts Rates -->
                       <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                        <h2 class="text-lg font-semibold mb-2 text-gray-800">Image/Poster/Banner/Text posts</h2>

                        <p class="text-gray-600 mb-4">Indicate how much you charge for posts onTiktok. All rates should be in USD.</p>
                        <!-- How much do you charge perTiktok post Per Post -->
                        <div class="mb-4">
                            <label for="cost_per_post" class="block text-sm font-medium text-gray-700">How much do you charge per Tiktok post per post? *</label>
                            <input type="number" id="cost_per_post" name="cost_per_post" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- How much do you charge per Tiktok post Per Hour -->
                        <div class="mb-4">
                            <label for="cost_per_hour" class="block text-sm font-medium text-gray-700">How much do you charge a Tiktok post per hour? *</label>
                            <input type="number" id="cost_per_hour" name="cost_per_hour" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- How much do you charge per Tiktok post Per Day -->
                        <div class="mb-4">
                            <label for="cost_per_day" class="block text-sm font-medium text-gray-700">How much do you charge a Tiktok post per day? *</label>
                            <input type="number" id="cost_per_day" name="cost_per_day" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- How much do you charge perTiktok post Per Week -->
                        <div class="mb-4">
                            <label for="cost_per_week" class="block text-sm font-medium text-gray-700">How much do you charge a Tiktok post weekly? *</label>
                            <input type="number" id="cost_per_week" name="cost_per_week" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- How much do you charge perTiktok post Per Month -->
                        <div class="mb-4">
                            <label for="cost_per_month" class="block text-sm font-medium text-gray-700">How much do you charge a Tiktok post monthly? *</label>
                            <input type="number" id="cost_per_month" name="cost_per_month" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- CPM Rate Posts -->
                        <div class="mb-4">
                            <label for="cpm_rate_posts" class="block text-sm font-medium text-gray-700">What is the CPM Rate for Tiktok Posts on your group? *</label>
                            <input type="number" id="cpm_rate_posts" name="cpm_rate_posts" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>


                    </div>

                </div>

                     <!--Tiktok Skits Rates -->
                     <div  id="skits_div" class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white" style="display: none;">
                        <h2 class="text-lg font-semibold mb-2 text-gray-800">Tiktok Skit Rates</h2>

                        <p class="text-gray-600 mb-4">Indicate how much you charge for skits on Tiktok. All rates should be in USD.</p>

                        <p class="text-gray-600 mb-4">Kindly provide the rates where applicable.</p>
                           <!--Tiktok Skits Rates -->
                           <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                            <h2 class="text-lg font-semibold mb-2 text-gray-800">Skits</h2>

                            <p class="text-gray-600 mb-4">Indicate how much you charge for skits on Tiktok. All rates should be in USD.</p>
                            <!-- How much do you charge perTiktok post Per Post -->
                            <div class="mb-4">
                                <label for="cost_per_skit" class="block text-sm font-medium text-gray-700">How much do you charge per Tiktok Skit? *</label>
                                <input type="number" id="cost_per_skit" name="cost_per_skit" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                            </div>

                            <!-- How much do you charge perTiktok post Per Hour -->
                            <div class="mb-4">
                                <label for="cost_per_skit_hour" class="block text-sm font-medium text-gray-700">How much do you charge a Tiktok skit per hour? *</label>
                                <input type="number" id="cost_per_skit_hour" name="cost_per_skit_hour" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                            </div>

                            <!-- How much do you charge perTiktok post Per Day -->
                            <div class="mb-4">
                                <label for="cost_per_skit_day" class="block text-sm font-medium text-gray-700">How much do you charge a Tiktok skit per day? *</label>
                                <input type="number" id="cost_per_skit_day" name="cost_per_skit_day" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                            </div>

                            <!-- How much do you charge perTiktok post Per Week -->
                            <div class="mb-4">
                                <label for="cost_per_skit_week" class="block text-sm font-medium text-gray-700">How much do you charge a Tiktok skit weekly? *</label>
                                <input type="number" id="cost_per_skit_week" name="cost_per_skit_week" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                            </div>

                            <!-- How much do you charge perTiktok post Per Month -->
                            <div class="mb-4">
                                <label for="cost_per_skit_month" class="block text-sm font-medium text-gray-700">How much do you charge a Tiktok skit monthly? *</label>
                                <input type="number" id="cost_per_skit_month" name="cost_per_skit_month" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                            </div>

                            <!-- CPM Rate Posts -->
                            <div class="mb-4">
                                <label for="cpm_rate_skits" class="block text-sm font-medium text-gray-700">What is the CPM Rate for Tiktok skits on your group? *</label>
                                <input type="number" id="cpm_rate_skits" name="cpm_rate_skits" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                            </div>

                        </div>

                    </div>


                     <!--Tiktok Video Ads Rates -->
                     <div id="video_ads_div" class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white" style="display: none;">
                        <h2 class="text-lg font-semibold mb-2 text-gray-800">Tiktok Video Ad Rates</h2>

                        <p class="text-gray-600 mb-4">Indicate how much you charge for video ads onTiktok. All rates should be in USD.</p>

                        <p class="text-gray-600 mb-4">Kindly provide the rates where applicable.</p>

                           <!--Tiktok Video Ads Rates -->
                           <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                            <h2 class="text-lg font-semibold mb-2 text-gray-800">Video Ads</h2>

                            <p class="text-gray-600 mb-4 ">Indicate how much you charge for video ads onTiktok. All rates should be in USD.</p>
                            <!-- How much do you charge perTiktok post Per Post -->
                            <div class="mb-4">
                                <label for="cost_per_video_ad" class="block text-sm font-medium text-gray-700">How much do you charge per Tiktok  video ad? *</label>
                                <input type="number" id="cost_per_video_ad" name="cost_per_video_ad" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                            </div>

                            <!-- How much do you charge perTiktok post Per Hour -->
                            <div class="mb-4">
                                <label for="cost_per_video_ad_hour" class="block text-sm font-medium text-gray-700">How much do you charge a Tiktok video ad per hour? *</label>
                                <input type="number" id="cost_per_video_ad_hour" name="cost_per_video_ad_hour" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                            </div>

                            <!-- How much do you charge perTiktok post Per Day -->
                            <div class="mb-4">
                                <label for="cost_per_video_ad_day" class="block text-sm font-medium text-gray-700">How much do you charge a Tiktok video ad per day? *</label>
                                <input type="number" id="cost_per_video_ad_day" name="cost_per_video_ad_day" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                            </div>

                            <!-- How much do you charge perTiktok post Per Week -->
                            <div class="mb-4">
                                <label for="cost_per_video_ad_week" class="block text-sm font-medium text-gray-700">How much do you charge a Tiktok video ad weekly? *</label>
                                <input type="number" id="cost_per_video_ad_week" name="cost_per_video_ad_week" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                            </div>

                            <!-- How much do you charge perTiktok post Per Month -->
                            <div class="mb-4">
                                <label for="cost_per_video_ad_month" class="block text-sm font-medium text-gray-700">How much do you charge a Tiktok video ad monthly? *</label>
                                <input type="number" id="cost_per_video_ad_month" name="cost_per_video_ad_month" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                            </div>

                            <!-- CPM Rate Posts -->
                            <div class="mb-4">
                                <label for="cpm_rate_video_ads" class="block text-sm font-medium text-gray-700">What is the CPM Rate for Tiktok video ads on your group? *</label>
                                <input type="number" id="cpm_rate_video_ads" name="cpm_rate_viedo_ads" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                            </div>

                        </div>

                    </div>


                    <button value="Login Now" type="submit" class="ti-btn ti-btn-primary ti-custom-validate-btn">Submit</button>

            </form>
        </div>
    </div>
</body>

</html>

<!-- Popper JS -->
<script src="{{ asset('backend/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

<!-- Color Picker JS -->
<script src="{{ asset('backend/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

<!-- Sidebar JS -->
<script src="{{ asset('backend/assets/js/defaultmenu.js') }}"></script>

<!-- Sticky JS -->
<script src="{{ asset('backend/assets/js/sticky.js') }}"></script>

<!-- Switch JS -->
<script src="{{ asset('backend/assets/js/switch.js') }}"></script>

<!-- Preline JS -->
<script src="{{ asset('backend/assets/libs/preline/preline.js') }}"></script>

<!-- Simplebar JS -->
<script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>

<!-- Custom-Switcher JS -->
<script src="{{ asset('backend/assets/js/custom-switcher.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const messageElement = document.getElementById('success-message');
        if (messageElement) {
            setTimeout(function() {
                messageElement.style.opacity = '0';
                setTimeout(function() {
                    messageElement.style.display = 'none';
                }, 500); // Delay to ensure opacity transition
            }, 5000); // 5 seconds
        }
    });
</script>

<script>

        function toggleDivs() {
            const skitsDiv = document.getElementById('skits_div');
            const postsDiv = document.getElementById('posts_div');
            const videoAdsDiv = document.getElementById('video_ads_div');

            skitsDiv.style.display = document.getElementById('post_type_skits').checked ? 'block' : 'none';
            postsDiv.style.display = document.getElementById('post_type_posts').checked ? 'block' : 'none';
            videoAdsDiv.style.display = document.getElementById('post_type_video_ads').checked ? 'block' : 'none';

               // Attach the event listener to the checkboxes
            document.getElementById('post_types_posts').onchange = toggleSections;
            document.getElementById('post_types_skits').onchange = toggleSections;
            document.getElementById('post_types_video_ads').onchange = toggleSections;
        }



    </script>
