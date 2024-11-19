<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacebookGroup extends Model
{
    use HasFactory;

    protected $table = 'scp_facebook_groups';

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
        'facebook_group_name',
        'facebook_group_url',
        'facebook_group_members',
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
        'cpm_rate_skits'
    ];

    protected $casts = [
        'niches_themes' => 'array',
    ];

    /**
     * Get the highest price among all relevant cost attributes.
     *
     * @return float
     */
    public function getHighestPriceAttribute()
    {
        $prices = [
            $this->cost_per_post,
            $this->cost_per_hour,
            $this->cost_per_day,
            $this->cost_per_week,
            $this->cost_per_month,
            $this->cost_per_reel,
            $this->cost_per_reel_hour,
            $this->cost_per_reel_day,
            $this->cost_per_reel_week,
            $this->cost_per_reel_month,
            $this->cost_per_video_ad,
            $this->cost_per_video_ad_hour,
            $this->cost_per_video_ad_day,
            $this->cost_per_video_ad_week,
            $this->cost_per_video_ad_month,
            $this->cost_per_skit,
            $this->cost_per_skit_hour,
            $this->cost_per_skit_day,
            $this->cost_per_skit_week,
            $this->cost_per_skit_month,
        ];

        // Filter out null values and return the highest price
        return max(array_filter($prices, function($price) {
            return !is_null($price);
        }));
    }

    /**
     * Save the maximum price in the `price` column before saving the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->price = $model->highest_price; // Use the computed highest price
        });
    }
}
