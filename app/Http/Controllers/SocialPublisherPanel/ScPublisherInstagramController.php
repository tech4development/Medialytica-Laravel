<?php

namespace App\Http\Controllers\SocialPublisherPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScPublisherInstagram;

class ScPublisherInstagramController extends Controller
{
    // Method to show the form
    public function create()
    {
        return view('socialpublisher.instagram.create');
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email_address' => 'required|string|email|max:255',
            'phone_number' => 'nullable|string|max:255',
            'contact_person_name' => 'required|string|max:255',
            'contact_person_email' => 'required|string|email|max:255',
            'contact_person_phone' => 'nullable|string|max:255',
            'language' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'niches_themes' => 'required|json',
            'publishing_time' => 'required|string|max:255',
            'paypal_email' => 'required|string|email|max:255',
            'instagram_page_name' => 'required|string|max:255',
            'instagram_page_url' => 'required|string|url|max:255',
            'number_of_followers' => 'required|integer',
            'influencer_category' =>  'required|in:Mega Influencers (More than 1M followers),Macro Influencers (100K - 1M followers),Micro Influencers (1K - 100K followers),Nano Influencers (Below 1K followers)',
            'target_audience' => 'required|in:Below 18 years,18 to 35 years,Over 35 years',
            'post_types' => 'required|in:Skits,Video Ads,Instagram Reels,Image/Poster/Banner/Text posts',
            'cost_per_post' => 'nullable|numeric',
            'cost_per_hour' => 'nullable|numeric',
            'cost_per_day' => 'nullable|numeric',
            'cost_per_week' => 'nullable|numeric',
            'cost_per_month' => 'nullable|numeric',
            'cpm_rate_posts' => 'nullable|numeric',
            'cost_per_reel' => 'nullable|numeric',
            'cost_per_reel_hour' => 'nullable|numeric',
            'cost_per_reel_day' => 'nullable|numeric',
            'cost_per_reel_week' => 'nullable|numeric',
            'cost_per_reel_month' => 'nullable|numeric',
            'cpm_rate_reels' => 'nullable|numeric',
            'cost_per_video_ad' => 'nullable|numeric',
            'cost_per_video_ad_hour' => 'nullable|numeric',
            'cost_per_video_ad_day' => 'nullable|numeric',
            'cost_per_video_ad_week' => 'nullable|numeric',
            'cost_per_video_ad_month' => 'nullable|numeric',
            'cpm_rate_video_ads' => 'nullable|numeric',
            'cost_per_skit' => 'nullable|numeric',
            'cost_per_skit_hour' => 'nullable|numeric',
            'cost_per_skit_day' => 'nullable|numeric',
            'cost_per_skit_week' => 'nullable|numeric',
            'cost_per_skit_month' => 'nullable|numeric',
            'cpm_rate_skits' => 'nullable|numeric',
        ]);

        // Create a new ScPublisherInstagram record
        $instagramPublisher = ScPublisherInstagram::create($validated);

        // Return a response or redirect as needed
        return response()->json($instagramPublisher, 201);
    }

    // Other methods for index, show, update, delete, etc. can be added her
}
