<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScPublisherInstagram extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Table associated with the model
    protected $table = 'scp_instagarm_pages';

    // The attributes that are mass assignable
    protected $fillable = [
        'name',
        'email_address',
        'phone_number',
        'contact_person_name',
        'contact_person_email',
        'contact_person_phone',
        'country',
        'niches_themes',
        'publishing_time',
        'paypal_email',
        'instagram_page_name',
        'instagram_page_url',
        'number_of_followers',
        'influencer_category',
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

    // The attributes that should be cast to native types
    protected $casts = [
        'niches_themes' => 'array',
    ];
}
