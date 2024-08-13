<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        function calculateMaxPrice($publisher) {
            // Define the price fields
            $priceFields = [
                'normal_post_cost',
                'betting_casino_post_cost',
                'crypto_forex_post_cost',
                'cbd_post_cost',
                'banner_cost'
            ];

            // Extract the prices and calculate the maximum
            $prices = array_map(function($field) use ($publisher) {
                return $publisher[$field];
            }, $priceFields);

            return max($prices);
        }
        $publishers = [
            [
                'website_name' => 'Tech Buzz',
                'website_url' => 'https://techbuzz.com',
                'niches' => implode(',', ['Technology', 'Gadgets']),
                'moz_da' => 85,
                'ahref_dr' => 75,
                'traffic' => 'High',
                'geos' => 'US, UK, CA',
                'phone_number' => '+1-234-567-8901',
                'email' => 'contact@techbuzz.com',
                'language' => 'English',
                'contact_person_name' => 'John Doe',
                'contact_person_email' => 'john.doe@techbuzz.com',
                'contact_person_phone' => '+1-234-567-8902',
                'country' => 'USA',
                'link_type' => implode(',', ['Do-Follow', 'No-Follow']),
                'do_follow_links' => 1,
                'mark_paid_articles_as_sponsored' => true,
                'link_insertion' => 'yes',
                'link_insertion_amount' => 100.00,
                'publishing_time' => '24Hrs',
                'normal_post_cost' => 150.00,
                'betting_casino_post_cost' => 200.00,
                'crypto_forex_post_cost' => 250.00,
                'cbd_post_cost' => 300.00,
                'banner_cost' => 100.00,
                'price' => calculateMaxPrice([
                    'normal_post_cost' => 150.00,
                    'betting_casino_post_cost' => 200.00,
                    'crypto_forex_post_cost' => 250.00,
                    'cbd_post_cost' => 300.00,
                    'banner_cost' => 100.00,
                ]),
                'youtube_ad_cost' => 500.00,
                'paypal_email' => 'payments@techbuzz.com',
                'social_media_pages' => json_encode([
                    'facebook' => 'https://facebook.com/techbuzz',
                    'twitter' => 'https://twitter.com/techbuzz',
                    'instagram' => 'https://instagram.com/techbuzz'
                ]),
            ],
            // Add more sample data here as needed
        ];

        foreach ($publishers as $publisher) {
            Publisher::create($publisher);
        }
    }
    }

