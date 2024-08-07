<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwitterCommunities extends Model
{
    use HasFactory;
    protected $table = 'scp_twitter_communities';

    protected $fillable = [
        'name',
        'email_address',
        'phone_number',
        'contact_person_name',
        'contact_person_email',
        'contact_person_phone',
        'language',
        'country',
        'influencer_type',
        'other_influencer_types',
        'niches_themes',
        'publishing_time',
        'paypal_email',
        'twitter_community_name',
        'twitter_community_url',
        'twitter_community_members',
        'influencer_category',
        'target_audience',
        'post_types',
        'cost_per_post',
        'cost_per_hour',
        'cost_per_day',
        'cost_per_week',
        'cost_per_month',
        'cpm_rate_posts',
        'cost_per_video_ad',
        'cost_per_video_ad_hour',
        'cost_per_video_ad_day',
        'cost_per_video_ad_week',
        'cost_per_video_ad_month',
        'cpm_rate_video_ads',
        'cost_per_skit',
        'cost_per_skit_hour',
        'cost_per_skit_day',
        'cost_per_skit_week',
        'cost_per_skit_month',
        'cpm_rate_skits'
    ];

    protected $casts = [
        'niches_themes' => 'array',
    ];
}
