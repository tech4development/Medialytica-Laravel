<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter Handle/Communities Details</title>

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
            <h1 class="text-2xl font-bold mb-4">Add your Twitter Handle/Communities Details</h1>
            <form action="{{ route('scp_facebook.store') }}" method="POST">
                @csrf
                <!-- Name -->
                <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
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
                            'Twitter Influencer',
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
                    <span class="block text-sm font-medium text-gray-700">Niches/Themes *Select all content niches/themes that you accept on your social media pages</span>
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


                 <!-- Twitter Handle Name -->
                 <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                 <div class="mb-4">
                    <label for="facebook_page_name" class="block text-sm font-medium text-gray-700">Enter your twitter handle name *</label>
                    <input type="text" id="facebook_page_name" name="facebook_page_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>


                <!-- Twitter Handle URL -->
                <div class="mb-4">
                    <label for="facebook_page__url" class="block text-sm font-medium text-gray-700">Enter your twitter handle  URL *</label>
                    <input type="url" id="facebook_page_url" name="facebook_page_url" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>


                <!-- No of followers -->
                <div class="mb-4">
                    <label for="number_of_followers" class="block text-sm font-medium text-gray-700">Number of followers on your twitter handle Page</label>
                    <input type="number" id="number_of_followers" name="number_of_followers" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="1" required>
                </div>


                <!-- Twitter Community Ownership -->
                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Are you an owner of a Twitter community? *</span>
                    <div class="mt-2">
                        <div class="flex items-center">
                            <input type="radio" id="twitter_community_yes" name="owns_twitter_community" value="yes" class="mr-2" required>
                            <label for="twitter_community_yes" class="text-gray-600">Yes</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" id="twitter_community_no" name="owns_twitter_community" value="no" class="mr-2">
                            <label for="twitter_community_no" class="text-gray-600">No</label>
                        </div>
                    </div>
                </div>

                <!-- Conditional Input Field for Twitter Community Members -->
                <div id="twitter_community_members_container" class="mb-4 hidden">
                    <label for="twitter_community_members" class="block text-sm font-medium text-gray-700">How many members are on your Twitter community?</label>
                    <input type="number" id="twitter_community_members" name="twitter_community_members" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" step="1" min="0">
                </div>
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
                        <option value="Mega Influencers">Mega Influencers</option>
                        <option value="Macro Influencers">Macro Influencers</option>
                        <option value="Micro Influencers">Micro Influencers</option>
                        <option value="Nano Influencers">Nano Influencers</option>
                    </select>
                </div>
                </div>

                   <!-- Payment Frequency -->
                   <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                    <h2 class="text-lg font-semibold mb-2 text-gray-800">Payment Frequency</h2>

                    <p class="text-gray-600 mb-4">How often are you paid for posts on your Facebook page?</p>

                    <!-- Payment Frequency Options -->
                    <div class="mt-2 space-y-4">
                        <div class="flex items-center">
                            <input type="radio" id="payment_frequency_per_post" name="payment_frequency" value="Per Post" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" required>
                            <label for="payment_frequency_per_post" class="ml-2 text-gray-700">Per Post</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" id="payment_frequency_hourly" name="payment_frequency" value="Hourly" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                            <label for="payment_frequency_hourly" class="ml-2 text-gray-700">Hourly</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" id="payment_frequency_daily" name="payment_frequency" value="Daily" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                            <label for="payment_frequency_daily" class="ml-2 text-gray-700">Daily</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" id="payment_frequency_weekly" name="payment_frequency" value="Weekly" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                            <label for="payment_frequency_weekly" class="ml-2 text-gray-700">Weekly</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" id="payment_frequency_monthly" name="payment_frequency" value="Monthly" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                            <label for="payment_frequency_monthly" class="ml-2 text-gray-700">Monthly</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" id="payment_frequency_cpm" name="payment_frequency" value="CPM" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                            <label for="payment_frequency_cpm" class="ml-2 text-gray-700">Cost per a thousand impressions (CPM)</label>
                        </div>
                    </div>

                    <!-- Conditional Input Field -->
                    <div id="payment_amount_container" class="mt-6 hidden">
                        <label id="payment_amount_label" class="block text-sm font-medium text-gray-700"></label>
                        <input type="number" id="payment_amount" name="payment_amount" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" step="0.01" min="0">
                    </div>
                </div>


                <!-- Post Types -->
                <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Which type of posts do you make on your Facebook page? Select all that apply *</span>
                    <div class="mt-2 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="post_type_skits" name="post_types[]" value="Skits" class="mr-2">
                            <label for="post_type_skits" class="text-gray-600">Skits</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="post_type_video_ads" name="post_types[]" value="Video Ads" class="mr-2">
                            <label for="post_type_video_ads" class="text-gray-600">Video Ads</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="post_type_reels" name="post_types[]" value="Reels" class="mr-2">
                            <label for="post_type_reels" class="text-gray-600">Reels</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="post_type_image_poster_banner_text" name="post_types[]" value="Image/Poster/Banner/Text posts" class="mr-2">
                            <label for="post_type_image_poster_banner_text" class="text-gray-600">Image/Poster/Banner/Text posts</label>
                        </div>
                    </div>
                </div>
                </div>

                <!-- Facebook Post Rates -->
                <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                    <h2 class="text-lg font-semibold mb-2 text-gray-800 text-center">Facebook Post Rates</h2>

                    <p class="text-gray-600 mb-4 text-center">Indicate how much you charge for posts on Facebook. All rates should be in USD.</p>

                    <p class="text-gray-600 mb-4 text-center">Kindly provide the rates where applicable.</p>
                </div>


                <!-- Facebook Image/Poster/Banner/Text posts Rates -->
                <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                    <h2 class="text-lg font-semibold mb-2 text-gray-800 text-center">Image/Poster/Banner/Text posts</h2>

                    <p class="text-gray-600 mb-4 text-center">Indicate how much you charge for posts on Facebook. All rates should be in USD.</p>
                    <!-- Cost Per Post -->
                    <div class="mb-4">
                        <label for="cost_per_post" class="block text-sm font-medium text-gray-700">Cost Per Post *</label>
                        <input type="number" id="cost_per_post" name="cost_per_post" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Cost Per Hour -->
                    <div class="mb-4">
                        <label for="cost_per_hour" class="block text-sm font-medium text-gray-700">Cost Per Hour *</label>
                        <input type="number" id="cost_per_hour" name="cost_per_hour" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Cost Per Day -->
                    <div class="mb-4">
                        <label for="cost_per_day" class="block text-sm font-medium text-gray-700">Cost Per Day *</label>
                        <input type="number" id="cost_per_day" name="cost_per_day" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Cost Per Week -->
                    <div class="mb-4">
                        <label for="cost_per_week" class="block text-sm font-medium text-gray-700">Cost Per Week *</label>
                        <input type="number" id="cost_per_week" name="cost_per_week" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Cost Per Month -->
                    <div class="mb-4">
                        <label for="cost_per_month" class="block text-sm font-medium text-gray-700">Cost Per Month *</label>
                        <input type="number" id="cost_per_month" name="cost_per_month" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- CPM Rate Posts -->
                    <div class="mb-4">
                        <label for="cpm_rate_posts" class="block text-sm font-medium text-gray-700">CPM Rate Posts *</label>
                        <input type="number" id="cpm_rate_posts" name="cpm_rate_posts" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>


                </div>

                   <!-- Facebook Image/Poster/Banner/Text posts Rates -->
                   <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                    <h2 class="text-lg font-semibold mb-2 text-gray-800 text-center">Facebook Reels</h2>

                    <p class="text-gray-600 mb-4 text-center">Indicate how much you charge for posts on Facebook. All rates should be in USD.</p>
                    <!-- Cost Per Post -->
                    <div class="mb-4">
                        <label for="cost_per_post" class="block text-sm font-medium text-gray-700">Cost Per Post *</label>
                        <input type="number" id="cost_per_post" name="cost_per_post" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Cost Per Hour -->
                    <div class="mb-4">
                        <label for="cost_per_hour" class="block text-sm font-medium text-gray-700">Cost Per Hour *</label>
                        <input type="number" id="cost_per_hour" name="cost_per_hour" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Cost Per Day -->
                    <div class="mb-4">
                        <label for="cost_per_day" class="block text-sm font-medium text-gray-700">Cost Per Day *</label>
                        <input type="number" id="cost_per_day" name="cost_per_day" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Cost Per Week -->
                    <div class="mb-4">
                        <label for="cost_per_week" class="block text-sm font-medium text-gray-700">Cost Per Week *</label>
                        <input type="number" id="cost_per_week" name="cost_per_week" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Cost Per Month -->
                    <div class="mb-4">
                        <label for="cost_per_month" class="block text-sm font-medium text-gray-700">Cost Per Month *</label>
                        <input type="number" id="cost_per_month" name="cost_per_month" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- CPM Rate Posts -->
                    <div class="mb-4">
                        <label for="cpm_rate_posts" class="block text-sm font-medium text-gray-700">CPM Rate Posts *</label>
                        <input type="number" id="cpm_rate_posts" name="cpm_rate_posts" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>


                </div>

                    <!-- Facebook Image/Poster/Banner/Text posts Rates -->
                    <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                        <h2 class="text-lg font-semibold mb-2 text-gray-800 text-center">Skits</h2>

                        <p class="text-gray-600 mb-4 text-center text-center">Indicate how much you charge for posts on Facebook. All rates should be in USD.</p>
                        <!-- Cost Per Post -->
                        <div class="mb-4">
                            <label for="cost_per_post" class="block text-sm font-medium text-gray-700">Cost Per Post *</label>
                            <input type="number" id="cost_per_post" name="cost_per_post" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- Cost Per Hour -->
                        <div class="mb-4">
                            <label for="cost_per_hour" class="block text-sm font-medium text-gray-700">Cost Per Hour *</label>
                            <input type="number" id="cost_per_hour" name="cost_per_hour" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- Cost Per Day -->
                        <div class="mb-4">
                            <label for="cost_per_day" class="block text-sm font-medium text-gray-700">Cost Per Day *</label>
                            <input type="number" id="cost_per_day" name="cost_per_day" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- Cost Per Week -->
                        <div class="mb-4">
                            <label for="cost_per_week" class="block text-sm font-medium text-gray-700">Cost Per Week *</label>
                            <input type="number" id="cost_per_week" name="cost_per_week" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- Cost Per Month -->
                        <div class="mb-4">
                            <label for="cost_per_month" class="block text-sm font-medium text-gray-700">Cost Per Month *</label>
                            <input type="number" id="cost_per_month" name="cost_per_month" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- CPM Rate Posts -->
                        <div class="mb-4">
                            <label for="cpm_rate_posts" class="block text-sm font-medium text-gray-700">CPM Rate Posts *</label>
                            <input type="number" id="cpm_rate_posts" name="cpm_rate_posts" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>


                    </div>

                    <!-- Facebook Image/Poster/Banner/Text posts Rates -->
                    <div class="mb-6 p-4 border border-gray-200 rounded-lg shadow-sm bg-white">
                        <h2 class="text-lg font-semibold mb-2 text-gray-800 text-center">Video Ads</h2>

                        <p class="text-gray-600 mb-4 text-center">Indicate how much you charge for posts on Facebook. All rates should be in USD.</p>
                        <!-- Cost Per Post -->
                        <div class="mb-4">
                            <label for="cost_per_post" class="block text-sm font-medium text-gray-700">Cost Per Post *</label>
                            <input type="number" id="cost_per_post" name="cost_per_post" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- Cost Per Hour -->
                        <div class="mb-4">
                            <label for="cost_per_hour" class="block text-sm font-medium text-gray-700">Cost Per Hour *</label>
                            <input type="number" id="cost_per_hour" name="cost_per_hour" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- Cost Per Day -->
                        <div class="mb-4">
                            <label for="cost_per_day" class="block text-sm font-medium text-gray-700">Cost Per Day *</label>
                            <input type="number" id="cost_per_day" name="cost_per_day" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- Cost Per Week -->
                        <div class="mb-4">
                            <label for="cost_per_week" class="block text-sm font-medium text-gray-700">Cost Per Week *</label>
                            <input type="number" id="cost_per_week" name="cost_per_week" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- Cost Per Month -->
                        <div class="mb-4">
                            <label for="cost_per_month" class="block text-sm font-medium text-gray-700">Cost Per Month *</label>
                            <input type="number" id="cost_per_month" name="cost_per_month" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                        </div>

                        <!-- CPM Rate Posts -->
                        <div class="mb-4">
                            <label for="cpm_rate_posts" class="block text-sm font-medium text-gray-700">CPM Rate Posts *</label>
                            <input type="number" id="cpm_rate_posts" name="cpm_rate_posts" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
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
    document.addEventListener('DOMContentLoaded', function () {
        const facebookGroupYes = document.getElementById('facebook_group_yes');
        const facebookGroupNo = document.getElementById('facebook_group_no');
        const facebookGroupMembersContainer = document.getElementById('facebook_group_members_container');

        // Function to show or hide the Facebook group members input field
        function toggleFacebookGroupMembers() {
            if (facebookGroupYes.checked) {
                facebookGroupMembersContainer.classList.remove('hidden');
            } else {
                facebookGroupMembersContainer.classList.add('hidden');
            }
        }

        // Event listeners to toggle the visibility based on radio button selection
        facebookGroupYes.addEventListener('change', toggleFacebookGroupMembers);
        facebookGroupNo.addEventListener('change', toggleFacebookGroupMembers);

        // Initial check to set visibility based on the default radio button selection
        toggleFacebookGroupMembers();
    });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const paymentFrequencyRadios = document.querySelectorAll('input[name="payment_frequency"]');
        const paymentAmountContainer = document.getElementById('payment_amount_container');
        const paymentAmountLabel = document.getElementById('payment_amount_label');
        const paymentAmountInput = document.getElementById('payment_amount');

        paymentFrequencyRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                const selectedValue = this.value;

                switch (selectedValue) {
                    case 'Per Post':
                        paymentAmountLabel.textContent = 'How much do you charge per post?';
                        break;
                    case 'Hourly':
                        paymentAmountLabel.textContent = 'How much do you charge per hour?';
                        break;
                    case 'Daily':
                        paymentAmountLabel.textContent = 'How much do you charge per day?';
                        break;
                    case 'Weekly':
                        paymentAmountLabel.textContent = 'How much do you charge per week?';
                        break;
                    case 'Monthly':
                        paymentAmountLabel.textContent = 'How much do you charge per month?';
                        break;
                    default:
                        paymentAmountContainer.classList.add('hidden');
                        return;
                }

                paymentAmountContainer.classList.remove('hidden');
            });
        });
    });
</script>
