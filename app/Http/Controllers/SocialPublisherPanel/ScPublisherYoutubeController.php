<?php

namespace App\Http\Controllers\SocialPublisherPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScPublisherYoutube;
use Illuminate\Validation\Rule;



class ScPublisherYoutubeController extends Controller
{
    // Method to show the form
    public function create()
    {
        return view('socialpublisher.youtube.create');
    }

    // Store the details into the database
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
             'influencer_type' => 'required|array|min:1', // Ensures at least one selection
            'other_influencer_types' =>'nullable|string|max:255',
            'niches_themes' => 'required|array|min:1',
            'publishing_time' => 'required|string|max:255',
            'paypal_email' => 'required|string|email|max:255',
            'youtube_channel_name' => 'required|string|email|max:255',
            'youtube_channel_url' =>'required|string|url|max:255|unique:scp_youtube_channels',
                'influencer_category' => [
                            'required',
                            Rule::in([
                                'Mega Influencers (More than 1M followers)',
                                'Macro Influencers (100K - 1M followers)',
                                'Micro Influencers (1K - 100K followers)',
                                'Nano Influencers (Below 1K followers)'
                            ]),
                        ],
            'number_of_subscribers' => 'required|integer',
            'target_audience' => 'required|in:Below 18 years,18 to 35 years,Over 35 years',
            'postTypes' => 'required|array|min:1',
            'cost_per_post' => 'nullable|numeric',
            'cost_per_hour' => 'nullable|numeric',
            'cost_per_day' => 'nullable|numeric',
            'cost_per_week' => 'nullable|numeric',
            'cost_per_month' => 'nullable|numeric',
            'cpm_rate_posts' => 'nullable|numeric',
            'cost_per_short' => 'nullable|numeric',
            'cost_per_short_hour' => 'nullable|numeric',
            'cost_per_short_day' => 'nullable|numeric',
            'cost_per_short_week' => 'nullable|numeric',
            'cost_per_short_month' => 'nullable|numeric',
            'cpm_rate_shorts' => 'nullable|numeric',
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
            'youtube_channel_name' => $request->input('youtube_channel_name'),
            'youtube_channel_url' => $request->input('youtube_channel_url'),
            'influencer_category' => $request->input('influencer_category'),
            'number_of_subscribers' => $request->input('number_of_subscribers'),
            'target_audience' => $request->input('target_audience'),
            'postTypes' => implode(',', $request->input('postTypes', [])), // Correct key for input
            'cost_per_post' => $request->input('cost_per_post'),
            'cost_per_hour' => $request->input('cost_per_hour'),
            'cost_per_day' => $request->input('cost_per_day'),
            'cost_per_week' => $request->input('cost_per_week'),
            'cost_per_month' => $request->input('cost_per_month'),
            'cpm_rate_posts' => $request->input('cpm_rate_posts'),
            'cost_per_short' => $request->input('cost_per_short'),
            'cost_per_short_hour' => $request->input('cost_per_short_hour'),
            'cost_per_short_day' => $request->input('cost_per_short_day'),
            'cost_per_short_week' => $request->input('cost_per_short_week'),
            'cost_per_short_month' => $request->input('cost_per_short_month'),
            'cpm_rate_shorts' => $request->input('cpm_rate_shorts'),
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
        $request->input('cost_per_short', 0),
        $request->input('cost_per_short_hour', 0),
        $request->input('cost_per_short_day', 0),
        $request->input('cost_per_short_week', 0),
        $request->input('cost_per_short_month', 0),
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


        // Create a new ScpYoutube record
      ScPublisherYoutube::create($validatedData);

       //return dd($validatedData);

       return redirect()->route('socialpublisher.dashboard')->with('success', 'Your Youtube Details created successfully.');
    }

    // Retrieve records
    public function index()
    {
        $publishers = ScPublisherYoutube::all();
        return response()->json($publishers);
    }


    public function showIndex()
    {
        // Fetch paginated data from the scp_facebook_pages table
        $youtubespublishers =ScPublisherYoutube::paginate(10);

        // Pass the data to the view
        return view('socialAdvertisers.pages.youtubechannel', compact('youtubespublishers'));
    }

}
