<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Publisher Details</title>
    <!-- Main JS -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <!-- Simplebar Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/simplebar/simplebar.min.css') }}">
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
            <h2 class="text-xl font-semibold text-gray-700">Edit Publisher Details</h2>

            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('publisher.update', $publisher->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
                @csrf
                @method('PUT')

                <!-- Website Name -->
                <div class="mb-4">
                    <label for="website_name" class="block text-sm font-medium text-gray-700">Website Name *</label>
                    <input type="text" id="website_name" name="website_name" value="{{ old('website_name', $publisher->website_name) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    @error('website_name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Website URL -->
                <div class="mb-4">
                    <label for="website_url" class="block text-sm font-medium text-gray-700">Website URL *</label>
                    <input type="url" id="website_url" name="website_url" value="{{ old('website_url', $publisher->website_url) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    @error('website_url')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Niches -->
                @php
                    // Ensure $publisher->niches is an array
                    $nichesArray = is_string($publisher->niches) ? explode(',', $publisher->niches) : (array) $publisher->niches;
                @endphp

                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Niches *</span>
                    <div class="mt-2 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach (['General Posts', 'Betting and Casinos', 'Real Estate', 'Automotive', 'FinTech', 'Fashion', 'Gadgets & appliances', 'CBD', 'Active lifestyles and fitness', 'Crypto & Forex', 'Sports', 'Home Improvement'] as $niche)
                            <div class="flex items-center">
                                <input type="checkbox" id="niches_{{ $loop->index }}" name="niches[]" value="{{ $niche }}" {{ in_array($niche, $nichesArray) ? 'checked' : '' }} class="mr-2">
                                <label for="niches_{{ $loop->index }}" class="text-gray-600">{{ $niche }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Moz DA -->
                <div class="mb-4">
                    <label for="moz_da" class="block text-sm font-medium text-gray-700">Moz DA *</label>
                    <input type="number" id="moz_da" name="moz_da" value="{{ old('moz_da', $publisher->moz_da) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="1" required>
                </div>

                <!-- Ahref DR -->
                <div class="mb-4">
                    <label for="ahref_dr" class="block text-sm font-medium text-gray-700">Ahref DR *</label>
                    <input type="number" id="ahref_dr" name="ahref_dr" value="{{ old('ahref_dr', $publisher->ahref_dr) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="1" required>
                </div>

                <!-- Traffic -->
                <div class="mb-4">
                    <label for="traffic" class="block text-sm font-medium text-gray-700">Traffic *</label>
                    <input type="text" id="traffic" name="traffic" value="{{ old('traffic', $publisher->traffic) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- GEOS -->
                <div class="mb-4">
                    <label for="geos" class="block text-sm font-medium text-gray-700">GEOS *</label>
                    <input type="text" id="geos" name="geos" value="{{ old('geos', $publisher->geos) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Phone Number -->
                <div class="mb-4">
                    <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number *</label>
                    <input type="tel" id="phone_number" name="phone_number" value="{{ old('phone_number', $publisher->phone_number) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $publisher->email) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Language -->
                <div class="mb-4">
                    <label for="language" class="block text-sm font-medium text-gray-700">Language *</label>
                    <input type="text" id="language" name="language" value="{{ old('language', $publisher->language) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Contact Person Name -->
                <div class="mb-4">
                    <label for="contact_person_name" class="block text-sm font-medium text-gray-700">Contact Person Name *</label>
                    <input type="text" id="contact_person_name" name="contact_person_name" value="{{ old('contact_person_name', $publisher->contact_person_name) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Contact Person Email -->
                <div class="mb-4">
                    <label for="contact_person_email" class="block text-sm font-medium text-gray-700">Contact Person Email *</label>
                    <input type="email" id="contact_person_email" name="contact_person_email" value="{{ old('contact_person_email', $publisher->contact_person_email) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                  <!-- Contact Person Phone -->
                  <div class="mb-4">
                    <label for="contact_person_phone" class="block text-sm font-medium text-gray-700">Contact Person Phone *</label>
                    <input type="tel" id="contact_person_phone" name="contact_person_phone" value="{{ old('contact_person_phone', $publisher->contact_person_phone) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Country -->
                <div class="mb-4">
                    <label for="country" class="block text-sm font-medium text-gray-700">Country *</label>
                    <input type="text" id="country" name="country" value="{{ old('country', $publisher->country) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Link Type -->
                @php
                    // Convert link_type to an array if it is a comma-separated string
                    $linkTypes = is_string($publisher->link_type) ? explode(',', $publisher->link_type) : $publisher->link_type;
                @endphp

                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Link Type *</span>
                    <div class="mt-2">
                        @foreach (['Do-follow', 'Permanent', 'Lifetime', 'No-follow'] as $linkType)
                            <div class="flex items-center">
                                <input type="checkbox" id="link_type_{{ $loop->index }}" name="link_type[]" value="{{ $linkType }}" {{ in_array($linkType, $linkTypes) ? 'checked' : '' }} class="mr-2">
                                <label for="link_type_{{ $loop->index }}" class="text-gray-600">{{ $linkType }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Do-Follow Links -->
                <div class="mb-4">
                    <label for="do_follow_links" class="block text-sm font-medium text-gray-700">How many Do-Follow links do you accept in a single article? *</label>
                    <select id="do_follow_links" name="do_follow_links" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <option value="0" {{ $publisher->do_follow_links == '0' ? 'selected' : '' }}>0</option>
                        <option value="1" {{ $publisher->do_follow_links == '1' ? 'selected' : '' }}>1</option>
                        <option value="2" {{ $publisher->do_follow_links == '2' ? 'selected' : '' }}>2</option>
                        <option value="3" {{ $publisher->do_follow_links == '3' ? 'selected' : '' }}>3</option>
                        <option value="more_than_three" {{ $publisher->do_follow_links == 'more_than_three' ? 'selected' : '' }}>More than three (3)</option>
                    </select>
                </div>

                <!-- Mark Paid Articles -->
                <div class="mb-4">
                    <span class="block text-sm font-medium text-gray-700">Do you mark paid articles as sponsored? *</span>
                    <div class="mt-2">
                        <div class="flex items-center">
                            <input type="radio" id="mark_paid_articles_as_sponsored_yes" name="mark_paid_articles_as_sponsored" value="1" {{ $publisher->mark_paid_articles_as_sponsored == '1' ? 'checked' : '' }} class="mr-2" required>
                            <label for="mark_paid_articles_as_sponsored_yes" class="text-gray-600">Yes</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" id="mark_paid_articles_as_sponsored_no" name="mark_paid_articles_as_sponsored" value="0" {{ $publisher->mark_paid_articles_as_sponsored == '0' ? 'checked' : '' }}>
                            <label for="mark_paid_articles_as_sponsored_no" class="text-gray-600">No</label>
                        </div>
                    </div>
                </div>

                <!-- Publishing Time -->
                <div class="mb-4">
                    <label for="publishing_time" class="block text-sm font-medium text-gray-700">Publishing Time *</label>
                    <select id="publishing_time" name="publishing_time" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <option value="0" {{ $publisher->publishing_time == '0' ? 'selected' : '' }}>Select publishing time</option>
                        <option value="24Hrs" {{ $publisher->publishing_time == '24Hrs' ? 'selected' : '' }}>24Hrs</option>
                        <option value="48Hrs" {{ $publisher->publishing_time == '48Hrs' ? 'selected' : '' }}>48Hrs</option>
                        <option value="72Hrs" {{ $publisher->publishing_time == '72Hrs' ? 'selected' : '' }}>72Hrs</option>
                    </select>
                </div>

                <!-- Publishing Rates -->
                <div class="mb-4">
                    <h2 class="text-lg font-semibold mb-2">Publishing Rates (USD)</h2>

                    <!-- Normal Post Cost -->
                    <div class="mb-4">
                        <label for="normal_post_cost" class="block text-sm font-medium text-gray-700">Normal Post Cost *</label>
                        <input type="number" id="normal_post_cost" name="normal_post_cost" value="{{ old('normal_post_cost', $publisher->normal_post_cost) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Betting/Casino Post Cost -->
                    <div class="mb-4">
                        <label for="betting_casino_post_cost" class="block text-sm font-medium text-gray-700">Betting/Casino Post Cost *</label>
                        <input type="number" id="betting_casino_post_cost" name="betting_casino_post_cost" value="{{ old('betting_casino_post_cost', $publisher->betting_casino_post_cost) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Crypto/Forex Post Cost -->
                    <div class="mb-4">
                        <label for="crypto_forex_post_cost" class="block text-sm font-medium text-gray-700">Crypto/Forex Post Cost *</label>
                        <input type="number" id="crypto_forex_post_cost" name="crypto_forex_post_cost" value="{{ old('crypto_forex_post_cost', $publisher->crypto_forex_post_cost) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- CBD Post Cost -->
                    <div class="mb-4">
                        <label for="cbd_post_cost" class="block text-sm font-medium text-gray-700">CBD Post Cost *</label>
                        <input type="number" id="cbd_post_cost" name="cbd_post_cost" value="{{ old('cbd_post_cost', $publisher->cbd_post_cost) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Banner Cost -->
                    <div class="mb-4">
                        <label for="banner_cost" class="block text-sm font-medium text-gray-700">Banner Cost *</label>
                        <input type="number" id="banner_cost" name="banner_cost" value="{{ old('banner_cost', $publisher->banner_cost) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- Link Insertion Cost -->
                    <div class="mb-4">
                        <label for="link_insertion_cost" class="block text-sm font-medium text-gray-700">Link Insertion Cost *</label>
                        <input type="number" id="link_insertion_cost" name="link_insertion_cost" value="{{ old('link_insertion_cost', $publisher->link_insertion_cost) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>

                    <!-- YouTube Ad Cost -->
                    <div class="mb-4">
                        <label for="youtube_ad_cost" class="block text-sm font-medium text-gray-700">YouTube Ad Cost *</label>
                        <input type="number" id="youtube_ad_cost" name="youtube_ad_cost" value="{{ old('youtube_ad_cost', $publisher->youtube_ad_cost) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" step="0.01" required>
                    </div>
                </div>

                <!-- Paypal Email -->
                <div class="mb-4">
                    <label for="paypal_email" class="block text-sm font-medium text-gray-700">Paypal Email *</label>
                    <input type="email" id="paypal_email" name="paypal_email" value="{{ old('paypal_email', $publisher->paypal_email) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>

                <!-- Social Media Pages -->
                {{-- @php
                    // Debugging
                    dd($publisher->social_media_pages);
                @endphp --}}
                <div class="mb-4">
                    <h2 class="text-lg font-semibold mb-2">Social Media Pages</h2>

                    <!-- Facebook -->
                    <div class="mb-4">
                        <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook</label>
                        <input type="url" id="facebook" name="social_media_pages[facebook]" value="{{ old('social_media_pages.facebook', $publisher->social_media_pages['facebook'] ?? '') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <!-- Twitter -->
                    <div class="mb-4">
                        <label for="twitter" class="block text-sm font-medium text-gray-700">Twitter (X)</label>
                        <input type="url" id="twitter" name="social_media_pages[twitter]" value="{{ old('social_media_pages.twitter', $publisher->social_media_pages['twitter'] ?? '') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <!-- Tiktok -->
                    <div class="mb-4">
                        <label for="tiktok" class="block text-sm font-medium text-gray-700">Tiktok</label>
                        <input type="url" id="tiktok" name="social_media_pages[tiktok]" value="{{ old('social_media_pages.tiktok', $publisher->social_media_pages['tiktok'] ?? '') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <!-- YouTube -->
                    <div class="mb-4">
                        <label for="youtube" class="block text-sm font-medium text-gray-700">YouTube</label>
                        <input type="url" id="youtube" name="social_media_pages[youtube]" value="{{ old('social_media_pages.youtube', $publisher->social_media_pages['youtube'] ?? '') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <!-- LinkedIn -->
                    <div class="mb-4">
                        <label for="linkedin" class="block text-sm font-medium text-gray-700">LinkedIn</label>
                        <input type="url" id="linkedin" name="social_media_pages[linkedin]" value="{{ old('social_media_pages.linkedin', $publisher->social_media_pages['linkedin'] ?? '') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <!-- Instagram -->
                    <div class="mb-4">
                        <label for="instagram" class="block text-sm font-medium text-gray-700">Instagram</label>
                        <input type="url" id="instagram" name="social_media_pages[instagram]" value="{{ old('social_media_pages.instagram', $publisher->social_media_pages['instagram'] ?? '') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <!-- Telegram -->
                    <div class="mb-4">
                        <label for="telegram" class="block text-sm font-medium text-gray-700">Telegram</label>
                        <input type="url" id="telegram" name="social_media_pages[telegram]" value="{{ old('social_media_pages.telegram', $publisher->social_media_pages['telegram'] ?? '') }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="my-5">
                        <input type="checkbox" class="validationCheckbox ti-form-checkbox mt-0.5" id="hs-checkbox-group-12" required>
                        <span class="checkboxError text-red-500 text-xs hidden">error</span>
                        <label for="hs-checkbox-group-12" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">I agree with the <a href="javascript:void(0);" class="text-primary hover:underline">terms and conditions</a></label>
                    </div>
                    <button type="submit" class="mt-4 inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors duration-300">Update</button>
                </div>


            </form>

        </div>

    </div>

</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editButton = document.getElementById('editButton');
        const editForm = document.getElementById('editForm');

        if (editButton && editForm) {
            editButton.addEventListener('click', function() {
                if (editForm.style.display === 'none' || editForm.style.display === '') {
                    editForm.style.display = 'block';
                    editButton.textContent = 'Cancel';
                } else {
                    editForm.style.display = 'none';
                    editButton.textContent = 'Edit Publisher Details';
                }
            });
        }
    });
</script>


