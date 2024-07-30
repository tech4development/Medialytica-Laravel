<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Publisher Details</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">

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
            <h1 class="text-2xl font-bold mb-4">Add Publisher Details</h1>
            <form action="{{ route('publisher.store') }}" method="POST">
                @csrf
                <!-- Website Name -->
                <div class="mb-4">
                    <label for="website_name" class="block text-sm font-medium text-gray-700">Website Name *</label>
                    <input type="text" id="website_name" name="website_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Website URL -->
                <div class="mb-4">
                    <label for="website_url" class="block text-sm font-medium text-gray-700">Website URL *</label>
                    <input type="url" id="website_url" name="website_url" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Niches -->
                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Niches *</span>
                    <div class="mt-2 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach (['General Posts', 'Betting and Casinos', 'Real Estate', 'Automotive', 'FinTech', 'Fashion', 'Gadgets & appliances', 'CBD', 'Active lifestyles and fitness', 'Crypto & Forex', 'Sports', 'Home Improvement'] as $niche)
                            <div class="flex items-center">
                                <input type="checkbox" id="niches_{{ $loop->index }}" name="niches[]" value="{{ $niche }}" class="mr-2">
                                <label for="niches_{{ $loop->index }}" class="text-gray-600">{{ $niche }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>


                <!-- Moz DA -->
                <div class="mb-4">
                    <label for="moz_da" class="block text-sm font-medium text-gray-700">Moz DA *</label>
                    <input type="number" id="moz_da" name="moz_da" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="1" required>
                </div>

                <!-- Ahref DR -->
                <div class="mb-4">
                    <label for="ahref_dr" class="block text-sm font-medium text-gray-700">Ahref DR *</label>
                    <input type="number" id="ahref_dr" name="ahref_dr" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="1" required>
                </div>

                <!-- Traffic -->
                <div class="mb-4">
                    <label for="traffic" class="block text-sm font-medium text-gray-700">Traffic *</label>
                    <input type="text" id="traffic" name="traffic" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- GEOS -->
                <div class="mb-4">
                    <label for="geos" class="block text-sm font-medium text-gray-700">GEOS *</label>
                    <input type="text" id="geos" name="geos" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Phone Number -->
                <div class="mb-4">
                    <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number *</label>
                    <input type="tel" id="phone_number" name="phone_number" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Language -->
                <div class="mb-4">
                    <label for="language" class="block text-sm font-medium text-gray-700">Language *</label>
                    <input type="text" id="language" name="language" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
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

                <!-- Country -->
                <div class="mb-4">
                    <label for="country" class="block text-sm font-medium text-gray-700">Country *</label>
                    <input type="text" id="country" name="country" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Link Type -->
                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Link Type *</span>
                    <div class="mt-2">
                        @foreach (['Do-follow', 'Permanent', 'Lifetime', 'No-follow'] as $linkType)
                            <div class="flex items-center">
                                <input type="checkbox" id="link_type_{{ $loop->index }}" name="link_type[]" value="{{ $linkType }}" class="mr-2">
                                <label for="link_type_{{ $loop->index }}" class="text-gray-600">{{ $linkType }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Do-Follow Links -->
                <div class="mb-4">
                    <label for="do_follow_links" class="block text-sm font-medium text-gray-700">How many Do-Follow links do you accept in a single article? *</label>
                    <select id="do_follow_links" name="do_follow_links" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="more_than_three">More than three (3)</option>
                    </select>
                </div>


                <!-- Mark Paid Articles -->
                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Do you mark paid articles as sponsored? *</span>
                    <div class="mt-2">
                        <div class="flex items-center">
                            <input type="radio" id="mark_paid_articles_as_sponsored_yes" name="mark_paid_articles_as_sponsored" value="yes" class="mr-2" required>
                            <label for="mark_paid_articles_as_sponsored_yes" class="text-gray-600">Yes</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" id="mark_paid_articles_as_sponsored_no" name="mark_paid_articles_as_sponsored" value="no" class="mr-2">
                            <label for="mark_paid_articles_as_sponsored_no" class="text-gray-600">No</label>
                        </div>
                    </div>
                </div>
                <!-- Link Insertion -->
                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Do you accept link insertion (niche editing)?*</span>
                    <div class="mt-2">
                        <div class="flex items-center">
                            <input type="radio" id="link_insertion_yes" name="link_insertion" value="yes" class="mr-2" required>
                            <label for="link_insertion_yes" class="text-gray-600">Yes</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" id="link_insertion_no" name="link_insertion" value="no" class="mr-2">
                            <label for="link_insertion_no" class="text-gray-600">No</label>
                        </div>
                    </div>
                </div>

                <!-- Conditional Input Field -->
                <div id="link_insertion_amount_container" class="mb-4 hidden">
                    <label for="link_insertion_amount" class="block text-sm font-medium text-gray-700">How much do you charge per link in USD?</label>
                    <input type="number" id="link_insertion_amount" name="link_insertion_amount" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" step="0.01">
                </div>









                <!-- Publishing Time -->
                <div class="mb-4">
                    <label for="publishing_time" class="block text-sm font-medium text-gray-700">Publishing Time *</label>
                    <select id="publishing_time" name="publishing_time" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <option value="0" selected>Select publishing time</option>
                        <option value="24Hrs">24Hrs</option>
                        <option value="48Hrs">48Hrs</option>
                        <option value="72Hrs">72Hrs</option>
                    </select>
                </div>


                <!-- Publishing Rates -->
                <div class="mb-4">
                    <h2 class="text-lg font-semibold mb-2">Publishing Rates (USD)</h2>

                    <!-- Normal Post Cost -->
                    <div class="mb-4">
                        <label for="normal_post_cost" class="block text-sm font-medium text-gray-700">Normal Post Cost *</label>
                        <input type="number" id="normal_post_cost" name="normal_post_cost" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Betting/Casino Post Cost -->
                    <div class="mb-4">
                        <label for="betting_casino_post_cost" class="block text-sm font-medium text-gray-700">Betting/Casino Post Cost *</label>
                        <input type="number" id="betting_casino_post_cost" name="betting_casino_post_cost" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Crypto/Forex Post Cost -->
                    <div class="mb-4">
                        <label for="crypto_forex_post_cost" class="block text-sm font-medium text-gray-700">Crypto/Forex Post Cost *</label>
                        <input type="number" id="crypto_forex_post_cost" name="crypto_forex_post_cost" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- CBD Post Cost -->
                    <div class="mb-4">
                        <label for="cbd_post_cost" class="block text-sm font-medium text-gray-700">CBD Post Cost *</label>
                        <input type="number" id="cbd_post_cost" name="cbd_post_cost" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Banner Cost -->
                    <div class="mb-4">
                        <label for="banner_cost" class="block text-sm font-medium text-gray-700">Banner Cost *</label>
                        <input type="number" id="banner_cost" name="banner_cost" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Link Insertion Cost -->
                    <div class="mb-4">
                        <label for="link_insertion_cost" class="block text-sm font-medium text-gray-700">Link Insertion Cost *</label>
                        <input type="number" id="link_insertion_cost" name="link_insertion_cost" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- YouTube Ad Cost -->
                    <div class="mb-4">
                        <label for="youtube_ad_cost" class="block text-sm font-medium text-gray-700">YouTube Ad Cost *</label>
                        <input type="number" id="youtube_ad_cost" name="youtube_ad_cost" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>
                </div>

                <!-- Paypal Email -->
                <div class="mb-4">
                    <label for="paypal_email" class="block text-sm font-medium text-gray-700">Paypal Email *</label>
                    <input type="email" id="paypal_email" name="paypal_email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Social Media Pages -->
                <div class="mb-4">
                    <h2 class="text-lg font-semibold mb-2">Social Media Pages</h2>

                    <!-- Facebook -->
                    <div class="mb-4">
                        <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook</label>
                        <input type="url" id="facebook" name="social_media_pages[facebook]" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <!-- Twitter -->
                    <div class="mb-4">
                        <label for="twitter" class="block text-sm font-medium text-gray-700">Twitter (X)</label>
                        <input type="url" id="twitter" name="social_media_pages[twitter]" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <!-- Tiktok -->
                    <div class="mb-4">
                        <label for="tiktok" class="block text-sm font-medium text-gray-700">Tiktok</label>
                        <input type="url" id="tiktok" name="social_media_pages[tiktok]" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <!-- YouTube -->
                    <div class="mb-4">
                        <label for="youtube" class="block text-sm font-medium text-gray-700">YouTube</label>
                        <input type="url" id="youtube" name="social_media_pages[youtube]" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <!-- LinkedIn -->
                    <div class="mb-4">
                        <label for="linkedin" class="block text-sm font-medium text-gray-700">LinkedIn</label>
                        <input type="url" id="linkedin" name="social_media_pages[linkedin]" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <!-- Instagram -->
                    <div class="mb-4">
                        <label for="instagram" class="block text-sm font-medium text-gray-700">Instagram</label>
                        <input type="url" id="instagram" name="social_media_pages[instagram]" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <!-- Telegram -->
                    <div class="mb-4">
                        <label for="telegram" class="block text-sm font-medium text-gray-700">Telegram</label>
                        <input type="url" id="instagram" name="social_media_pages[instagram]" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="my-5">
                        <input type="checkbox" class="validationCheckbox ti-form-checkbox mt-0.5" id="hs-checkbox-group-12" required>
                        <span class="checkboxError text-red-500 text-xs hidden">error</span>
                        <label for="hs-checkbox-group-12" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">I agree with the <a href="javascript:void(0);" class="text-primary hover:underline">terms and conditions</a></label>
                    </div>
                    <button value="Login Now" type="submit" class="ti-btn ti-btn-primary ti-custom-validate-btn">Submit</button>

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
    document.addEventListener('DOMContentLoaded', function() {
        const yesRadio = document.getElementById('link_insertion_yes');
        const noRadio = document.getElementById('link_insertion_no');
        const amountContainer = document.getElementById('link_insertion_amount_container');

        yesRadio.addEventListener('change', function() {
            if (yesRadio.checked) {
                amountContainer.classList.remove('hidden');
            }
        });

        noRadio.addEventListener('change', function() {
            if (noRadio.checked) {
                amountContainer.classList.add('hidden');
            }
        });
    });
</script>
