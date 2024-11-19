<?php

namespace App\Http\Controllers\SocialPublisherPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScPublisherTwitter;

class ScPublisherTwitterController extends Controller
{
    // Method to show the form
    public function create()
    {
        return view('socialpublisher.twitter.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email_address' => 'required|string|email|max:255',
            'phone_number' => 'nullable|string|max:255',
            'contact_person_name' => 'required|string|max:255',
            'contact_person_email' => 'required|string|email|max:255',
            'contact_person_phone' => 'nullable|string|max:255',
            'language' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'niches_themes' => 'required|array',
            'publishing_time' => 'required|string|max:255',
            'paypal_email' => 'required|string|email|max:255',
            'twitter_handle_name' => 'required|string|max:255',
            'twitter_handle_url' => 'required|string|url|max:255',
            'influencer_category' =>  'required|in:Mega Influencers (More than 1M followers),Macro Influencers (100K - 1M followers),Micro Influencers (1K - 100K followers),Nano Influencers (Below 1K followers)',
            'number_of_followers' => 'required|integer',
            'target_audience' => 'required|in:Below 18 years,18 to 35 years,Over 35 years',
            'postTypes' => 'nullable|array',
            'postTypes.*' => 'in:Skits,Video Ads,Reels,Image/Poster/Banner/Text posts',
            'cost_per_post' => 'nullable|numeric',
            'cost_per_hour' => 'nullable|numeric',
            'cost_per_day' => 'nullable|numeric',
            'cost_per_week' => 'nullable|numeric',
            'cost_per_month' => 'nullable|numeric',
            'cpm_rate_posts' => 'nullable|numeric',
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

         $validatedData = [
            'name' => $request->input('name'),
            'email_address' => $request->input('email_address'),
            'phone_number' => $request->input('phone_number'),
            'contact_person_name' => $request->input('contact_person_name'),
            'contact_person_email' => $request->input('contact_person_email'),
            'contact_person_phone' => $request->input('contact_person_phone'),
            'language' => $request->input('language'),
            'country' => $request->input('country'),
            'influencer_type' => implode(',', $request->input('influencer_type', [])),
            'other_influencer_types' => $request->input('other_influencer_types'),
            'niches_themes' => implode(',', $request->input('niches_themes', [])),
            'publishing_time' => $request->input('publishing_time'),
            'paypal_email' => $request->input('paypal_email'),
            'twitter_handle_name' => $request->input('twitter_handle_name'),
            'twitter_handle_url' => $request->input('twitter_handle_url'),
            'influencer_category' => $request->input('influencer_category'),
            'number_of_followers' => $request->input('number_of_followers'),
            'target_audience' => $request->input('target_audience'),
            'postTypes' => implode(',', $request->input('postTypes', [])), // Correct key for input
            'cost_per_post' => $request->input('cost_per_post'),
            'cost_per_hour' => $request->input('cost_per_hour'),
            'cost_per_day' => $request->input('cost_per_day'),
            'cost_per_week' => $request->input('cost_per_week'),
            'cost_per_month' => $request->input('cost_per_month'),
            'cpm_rate_posts' => $request->input('cpm_rate_posts'),
            'cost_per_reel' => $request->input('cost_per_reel'),
            'cost_per_reel_hour' => $request->input('cost_per_reel_hour'),
            'cost_per_reel_day' => $request->input('cost_per_reel_day'),
            'cost_per_reel_week' => $request->input('cost_per_reel_week'),
            'cost_per_reel_month' => $request->input('cost_per_reel_month'),
            'cpm_rate_reels' => $request->input('cpm_rate_reels'),
            'cost_per_video_ad' => $request->input('cost_per_video_ad'),
            'cost_per_video_ad_hour' => $request->input('cost_per_video_ad_hour'),
            'cost_per_video_ad_day' => $request->input('cost_per_video_ad_day'),
            'cost_per_video_ad_week' => $request->input('cost_per_video_ad_week'),
            'cost_per_video_ad_month' => $request->input('cost_per_video_ad_month'),
            'cpm_rate_video_ads' => $request->input('cpm_rate_video_ads'),
            'cost_per_skit' => $request->input('cost_per_skit'),
            'cost_per_skit_hour' => $request->input('cost_per_skit_hour'),
            'cost_per_skit_day' => $request->input('cost_per_skit_day'),
            'cost_per_skit_week' => $request->input('cost_per_skit_week'),
            'cost_per_skit_month' => $request->input('cost_per_skit_month'),
            'cpm_rate_skits' => $request->input('cpm_rate_skits'),

        ];

                         // Calculate the highest price
    $prices = [
        $request->input('cost_per_post', 0),
        $request->input('cost_per_hour', 0),
        $request->input('cost_per_day', 0),
        $request->input('cost_per_week', 0),
        $request->input('cost_per_month', 0),
        $request->input('cost_per_reel', 0),
        $request->input('cost_per_reel_hour', 0),
        $request->input('cost_per_reel_day', 0),
        $request->input('cost_per_reel_week', 0),
        $request->input('cost_per_reel_month', 0),
        $request->input('cost_per_video_ad', 0),
        $request->input('cost_per_video_ad_hour', 0),
        $request->input('cost_per_video_ad_day', 0),
        $request->input('cost_per_video_ad_week', 0),
        $request->input('cost_per_video_ad_month', 0),
        $request->input('cost_per_skit', 0),
        $request->input('cost_per_skit_hour', 0),
        $request->input('cost_per_skit_day', 0),
        $request->input('cost_per_skit_week', 0),
        $request->input('cost_per_skit_month', 0),

    ];

    // Store the highest price in the 'price' column
    $validatedData['price'] = max($prices);


        // Create a new ScPublisherTwitter record
        $twitterPublisher = ScPublisherTwitter::create($validatedData);

        //return dd($validatedData);

       return redirect()->route('socialpublisher.dashboard')->with('success', 'Instagram Details created successfully.');



    }


    public function index()
    {
        // Fetch paginated data from the scp_facebook_pages table
        $xspublishers =ScPublisherTwitter::paginate(10);

        // Pass the data to the view
        return view('socialAdvertisers.pages.xhandle', compact('xspublishers'));
    }

}
