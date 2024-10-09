<?php

namespace App\Http\Controllers\SocialPublisherPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScPublisherFacebook;

class ScPublisherFacebookController extends Controller
{
    // Method to show the form
    public function create()
    {
       return view('socialpublisher.facebook.create');
    }

    // Method to handle form submission and store data
                public function store(Request $request)
                {
                    // Validate the request data
                $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email_address' => 'required|email|max:255',
                'phone_number' => 'nullable|string|max:255',
                'contact_person_name' => 'required|string|max:255',
                'contact_person_email' => 'required|email|max:255',
                'contact_person_phone' => 'nullable|string|max:255',
                'language' => 'required|string|max:255',
                'country' => 'required|string|max:255',
                'influencer_type' => 'required|array|min:1', // Ensures at least one selection
                'other_influencer_types' =>'nullable|string|max:255',
                'niches_themes' => 'required|array|min:1',
                'publishing_time' => 'required|string',
                'paypal_email' => 'required|email|max:255',
                'facebook_profile_url' => 'required|url|max:255|unique:scp_facebook_profiles,facebook_profile_url',
                'facebook_profile_name' => 'required|string|max:255',
                'influencer_category' => 'required|in:Mega Influencers,Macro Influencers,Micro Influencers,Nano Influencers',
                'number_of_followers' => 'required|integer',
                'target_audience' => 'required|string|in:Below 18 years,18 to 35 years,Over 35 years',
                'postTypes' => 'nullable|array',
                'postTypes.*' => 'in:Skits,Video Ads,Reels,Image/Poster/Banner/Text posts', // Include postTypes validation
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
            'facebook_profile_url' => $request->input('facebook_profile_url'),
            'facebook_profile_name' => $request->input('facebook_profile_name'),
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

       // $validatedData['niches_themes'] = implode(',', $validatedData['niches_themes']);

        // Store the validated data
        ScPublisherFacebook::create($validatedData);

        session()->put('success', 'Your publisher details have been successfully captured! We will be in touch with you shortly');



        // Redirect with success message
        //return redirect()->route('socialpublisher.dashboard');
        return dd($validatedData);
    }
}
