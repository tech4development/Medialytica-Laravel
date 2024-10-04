<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Publisher;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PublisherImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            // Log the current row for debugging purposes
            Log::info('Processing row: ', $row->toArray());

            // Validate required fields
            if (!isset($row['website_url']) || empty($row['website_url'])) {
                Log::error('website_url is missing from the data', $row->toArray());
                continue; // Skip this row if website_url is missing
            }

            // Other field processing
            $geos = $row['geos'] ?? '';
            $markPaidArticlesAsSponsored = ($row['mark_paid_articles_as_sponsored'] === 'Yes') ? 1 : 0;
            $doFollowLinks = is_numeric($row['do_follow_links']) ? intval($row['do_follow_links']) : null;

            // Handle the email field, default to null if not provided
            $email = !empty($row['email']) ? $row['email'] : null;

            // Calculate the maximum price from the relevant fields
            $maxPrice = max(
                $row['normal_post_cost'] ?? 0,
                $row['betting_casino_post_cost'] ?? 0,
                $row['crypto_forex_post_cost'] ?? 0,
                $row['cbd_post_cost'] ?? 0
            );

            // Check for existing publisher
            $publisher = Publisher::where('website_url', $row['website_url'])->first();

            if ($publisher) {
                // Update existing publisher
                $publisher->update([
                    'website_name' => $row['website_name'],
                    'niches' => $row['niches'],
                    'moz_da' => $row['moz_da'],
                    'ahref_dr' => $row['ahref_dr'],
                    'traffic' => $row['traffic'],
                    'geos' => $geos,
                    'phone_number' => $row['phone_number'],
                    'email' => $email,
                    'language' => $row['language'],
                    'contact_person_name' => $row['contact_person_name'],
                    'contact_person_email' => $row['contact_person_email'],
                    'contact_person_phone' => $row['contact_person_phone'],
                    'country' => $row['country'],
                    'link_type' => $row['link_type'], // Store as a string
                    'do_follow_links' => $doFollowLinks,
                    'mark_paid_articles_as_sponsored' => $markPaidArticlesAsSponsored,
                    'link_insertion_amount' => $row['link_insertion_amount'],
                    'publishing_time' => $row['publishing_time'],
                    'paypal_email' => $row['paypal_email'],
                    'normal_post_cost' => $row['normal_post_cost'],
                    'betting_casino_post_cost' => $row['betting_casino_post_cost'],
                    'crypto_forex_post_cost' => $row['crypto_forex_post_cost'],
                    'cbd_post_cost' => $row['cbd_post_cost'],
                    'price' => $maxPrice, // Update price with the calculated max price
                ]);
            } else {
                // Create a new publisher record
                Publisher::create([
                    'website_name' => $row['website_name'],
                    'website_url' => $row['website_url'],
                    'niches' => $row['niches'],
                    'moz_da' => $row['moz_da'],
                    'ahref_dr' => $row['ahref_dr'],
                    'traffic' => $row['traffic'],
                    'geos' => $geos,
                    'phone_number' => $row['phone_number'],
                    'email' => $email,
                    'language' => $row['language'],
                    'contact_person_name' => $row['contact_person_name'],
                    'contact_person_email' => $row['contact_person_email'],
                    'contact_person_phone' => $row['contact_person_phone'],
                    'country' => $row['country'],
                    'link_type' => $row['link_type'], // Store as a string
                    'do_follow_links' => $doFollowLinks,
                    'mark_paid_articles_as_sponsored' => $markPaidArticlesAsSponsored,
                    'link_insertion_amount' => $row['link_insertion_amount'],
                    'publishing_time' => $row['publishing_time'],
                    'paypal_email' => $row['paypal_email'],
                    'normal_post_cost' => $row['normal_post_cost'],
                    'betting_casino_post_cost' => $row['betting_casino_post_cost'],
                    'crypto_forex_post_cost' => $row['crypto_forex_post_cost'],
                    'cbd_post_cost' => $row['cbd_post_cost'],
                    'price' => $maxPrice, // Set the calculated max price
                ]);
            }
        }
    }
}
