<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScPublisherFacebook extends Model
{
    use HasFactory;

     // Specify the table name if it doesn't follow Laravel's naming convention
     protected $table = 'scp_facebook_profiles';

     // Define the fillable attributes for mass assignment
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
        'facebook_profile_url',
        'facebook_profile_name',
        'influencer_category',
        'number_of_followers',
        'target_audience',
        'post_types',
        'cost_per_post',
        'cost_per_hour',
        'cost_per_day',
        'cost_per_week',
        'cost_per_month',
        'cpm_rate_posts',
        'cost_per_reel',
        'cost_per_reel_hour',
        'cost_per_reel_day',
        'cost_per_reel_week',
        'cost_per_reel_month',
        'cpm_rate_reels',
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
        'cpm_rate_skits',
    ];

     // Cast these attributes to array
     protected $casts = [
         'niches_themes' => 'array',
         'influencer_type' => 'array',
     ];
}
