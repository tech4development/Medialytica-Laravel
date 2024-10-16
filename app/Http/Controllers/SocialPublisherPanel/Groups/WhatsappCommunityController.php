<?php

namespace App\Http\Controllers\SocialPublisherPanel\Groups;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhatsappCommunities;
use Illuminate\Validation\Rule;

class WhatsappCommunityController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('socialpublisher.allgroups.whatsapp.communities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email_address' => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:255',
            'contact_person_name' => 'required|string|max:255',
            'contact_person_email' => 'required|email|max:255',
            'contact_person_phone' => 'nullable|string|max:255',
            'language' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'influencer_type' => [
                'required',
                'string',
                'in:Musician/Artist,DJ/MC,TV Personality,Radio Personality,Comedian,Actor/Actress,Instagram Influencer,Fashion Blogger,Athlete/Sports Personality,Bloggers,Fitness Enthusiast,Gamer,Food Blogger,Travel Blogger'
            ],
            'other_influencer_types' => 'nullable|string|max:255',
            'niches_themes' => 'required|array',
            'publishing_time' => 'required|string|max:255',
            'paypal_email' => 'required|email|max:255',
            'whatsapp_community_name' => 'required|string|max:255',
            'whatsapp_community_members' => 'nullable|numeric',
            'whatsapp_community_url' => 'required|url|unique:scp_whatsapp_communities,whatsapp_community_url|max:255',
            'influencer_category' => [
                'required',
                'string',
                'in:Mega Influencers,Macro Influencers,Micro Influencers,Nano Influencers'
            ],
            'target_audience' => [
                'required',
                'string',
                'in:Below 18 years,18 to 35 years,Over 35 years'
            ],
            'post_types' => 'required|in:Skits,Video Ads,Image/Poster/Banner/Text posts',
            'cost_per_post' => 'nullable|numeric|min:0',
            'cost_per_hour' => 'nullable|numeric|min:0',
            'cost_per_day' => 'nullable|numeric|min:0',
            'cost_per_week' => 'nullable|numeric|min:0',
            'cost_per_month' => 'nullable|numeric|min:0',
            'cpm_rate_posts' => 'nullable|numeric|min:0',
            'cost_per_reel' => 'nullable|numeric|min:0',
            'cost_per_reel_hour' => 'nullable|numeric|min:0',
            'cost_per_reel_day' => 'nullable|numeric|min:0',
            'cost_per_reel_week' => 'nullable|numeric|min:0',
            'cost_per_reel_month' => 'nullable|numeric|min:0',
            'cpm_rate_reels' => 'nullable|numeric|min:0',
            'cost_per_video_ad' => 'nullable|numeric|min:0',
            'cost_per_video_ad_hour' => 'nullable|numeric|min:0',
            'cost_per_video_ad_day' => 'nullable|numeric|min:0',
            'cost_per_video_ad_week' => 'nullable|numeric|min:0',
            'cost_per_video_ad_month' => 'nullable|numeric|min:0',
            'cpm_rate_video_ads' => 'nullable|numeric|min:0',
            'cost_per_skit' => 'nullable|numeric|min:0',
            'cost_per_skit_hour' => 'nullable|numeric|min:0',
            'cost_per_skit_day' => 'nullable|numeric|min:0',
            'cost_per_skit_week' => 'nullable|numeric|min:0',
            'cost_per_skit_month' => 'nullable|numeric|min:0',
            'cpm_rate_skits' => 'nullable|numeric|min:0',
        ]);

        WhatsappCommunities::create($request->all());

        return redirect()->route('whatsappcommunities.index')
                         ->with('success', 'WhatsApp Community created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WhatsappCommunities $whatsappCommunity)
    {
        return view('socialpublisher.allgroups.whatsapp.communities.edit', compact('whatsappCommunity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WhatsappCommunities $whatsappCommunity)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email_address' => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:255',
            'contact_person_name' => 'required|string|max:255',
            'contact_person_email' => 'required|email|max:255',
            'contact_person_phone' => 'nullable|string|max:255',
            'language' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'influencer_type' => [
                'required',
                'string',
                'in:Musician/Artist,DJ/MC,TV Personality,Radio Personality,Comedian,Actor/Actress,Instagram Influencer,Fashion Blogger,Athlete/Sports Personality,Bloggers,Fitness Enthusiast,Gamer,Food Blogger,Travel Blogger'
            ],
            'other_influencer_types' => 'nullable|string|max:255',
            'niches_themes' => 'required|array',
            'publishing_time' => 'required|string|max:255',
            'paypal_email' => 'required|email|max:255',
            'whatsapp_community_name' => 'required|string|max:255',
            'whatsapp_community_members' => 'nullable|numeric',
            'whatapp_community_url' => [
                'required',
                'url',
                'max:255',
                Rule::unique('scp_whatsapp_communities', 'whatsapp_community_url')->ignore($whatsappCommunity->id)
            ],
            'influencer_category' => [
                'required',
                'string',
                'in:Mega Influencers,Macro Influencers,Micro Influencers,Nano Influencers'
            ],
            'target_audience' => [
                'required',
                'string',
                'in:Below 18 years,18 to 35 years,Over 35 years'
            ],
            'post_types' => 'required|in:Skits,Video Ads,Image/Poster/Banner/Text posts',
            'cost_per_post' => 'nullable|numeric|min:0',
            'cost_per_hour' => 'nullable|numeric|min:0',
            'cost_per_day' => 'nullable|numeric|min:0',
            'cost_per_week' => 'nullable|numeric|min:0',
            'cost_per_month' => 'nullable|numeric|min:0',
            'cpm_rate_posts' => 'nullable|numeric|min:0',
            'cost_per_video_ad' => 'nullable|numeric|min:0',
            'cost_per_video_ad_hour' => 'nullable|numeric|min:0',
            'cost_per_video_ad_day' => 'nullable|numeric|min:0',
            'cost_per_video_ad_week' => 'nullable|numeric|min:0',
            'cost_per_video_ad_month' => 'nullable|numeric|min:0',
            'cpm_rate_video_ads' => 'nullable|numeric|min:0',
            'cost_per_skit' => 'nullable|numeric|min:0',
            'cost_per_skit_hour' => 'nullable|numeric|min:0',
            'cost_per_skit_day' => 'nullable|numeric|min:0',
            'cost_per_skit_week' => 'nullable|numeric|min:0',
            'cost_per_skit_month' => 'nullable|numeric|min:0',
            'cpm_rate_skits' => 'nullable|numeric|min:0',
        ]);

        $whatsappCommunity->update($request->all());

        return redirect()->route('whatsappcommunities.index')
                         ->with('success', 'WhatsApp Community updated successfully.');
    }
}
