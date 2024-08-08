<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScPublisherYoutube extends Model
{
    use HasFactory;

     // Table associated with the model
     protected $table = 'scp_youtube_channels';

     // The attributes that are mass assignable
     protected $fillable = [
         'name',
         'email_address',
         'phone_number',
         'contact_person_name',
         'contact_person_email',
         'contact_person_phone',
         'language',
         'country',
         'niches_themes',
         'publishing_time',
         'paypal_email',
         'youtube_channel_name',
         'youtube_channel_url',
         'influencer_category',
         'number_of_subscribers',
         'target_audience',
         'post_types',
         'cost_per_post',
         'cost_per_hour',
         'cost_per_day',
         'cost_per_week',
         'cost_per_month',
         'cpm_rate_posts',
         'cost_per_short',
         'cost_per_short_hour',
         'cost_per_short_day',
         'cost_per_short_week',
         'cost_per_short_month',
         'cpm_rate_shorts',
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
