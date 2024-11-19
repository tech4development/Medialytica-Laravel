<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\FacebookPage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FacebookPage>
 */
class FacebookPageFactory extends Factory
{
    protected $model = FacebookPage::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'email_address' => $this->faker->companyEmail,
            'phone_number' => $this->faker->phoneNumber,
            'contact_person_name' => $this->faker->name,
            'contact_person_email' => $this->faker->email,
            'contact_person_phone' => $this->faker->phoneNumber,
            'language' => $this->faker->randomElement(['English', 'Spanish', 'French', 'German']),
            'country' => $this->faker->country,
            'influencer_type' => $this->faker->randomElement(['Micro', 'Macro', 'Celebrity']),
            'other_influencer_types' => $this->faker->words(3, true),
            'niches_themes' => ['Fashion', 'Tech', 'Lifestyle'], // array example
            'publishing_time' => $this->faker->time,
            'paypal_email' => $this->faker->safeEmail,
            'facebook_page_name' => $this->faker->company,
            'facebook_page_url' => $this->faker->url,
            'facebook_page_members' => $this->faker->numberBetween(1000, 1000000),
            'influencer_category' => $this->faker->randomElement(['Category A', 'Category B', 'Category C']),
            'target_audience' => $this->faker->randomElement(['Teens', 'Adults', 'Seniors']),
            'post_types' => $this->faker->randomElement(['Image', 'Video', 'Text', 'Link']),
            'cost_per_post' => $this->faker->randomFloat(2, 10, 1000),
            'cost_per_hour' => $this->faker->randomFloat(2, 15, 500),
            'cost_per_day' => $this->faker->randomFloat(2, 100, 3000),
            'cost_per_week' => $this->faker->randomFloat(2, 700, 15000),
            'cost_per_month' => $this->faker->randomFloat(2, 3000, 60000),
            'cpm_rate_posts' => $this->faker->randomFloat(2, 5, 20),
            'cost_per_video_ad' => $this->faker->randomFloat(2, 50, 1000),
            'cost_per_video_ad_hour' => $this->faker->randomFloat(2, 50, 300),
            'cost_per_video_ad_day' => $this->faker->randomFloat(2, 200, 3000),
            'cost_per_video_ad_week' => $this->faker->randomFloat(2, 1000, 15000),
            'cost_per_video_ad_month' => $this->faker->randomFloat(2, 5000, 60000),
            'cpm_rate_video_ads' => $this->faker->randomFloat(2, 5, 25),
            'cost_per_skit' => $this->faker->randomFloat(2, 100, 1500),
            'cost_per_skit_hour' => $this->faker->randomFloat(2, 20, 200),
            'cost_per_skit_day' => $this->faker->randomFloat(2, 100, 1000),
            'cost_per_skit_week' => $this->faker->randomFloat(2, 500, 7000),
            'cost_per_skit_month' => $this->faker->randomFloat(2, 3000, 30000),
            'cpm_rate_skits' => $this->faker->randomFloat(2, 10, 50),
        ];
    }
}

