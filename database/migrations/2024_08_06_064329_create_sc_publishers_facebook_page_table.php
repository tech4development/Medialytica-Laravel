<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
     public function up(): void
    {
        Schema::create('scp_facebook_pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email_address');
            $table->string('phone_number')->nullable();
            $table->string('contact_person_name');
            $table->string('contact_person_email');
            $table->string('contact_person_phone')->nullable();
            $table->string('language');
            $table->string('country');
            // Use enum for predefined values with a default
            $table->longText('influencer_type', [
                'Musician/Artist',
                'DJ/MC',
                'TV Personality',
                'Radio Personality',
                'Comedian',
                'Actor/Actress',
                'Facebook Influencer',
                'Fashion Blogger',
                'Athlete/Sports Personality',
                'Blogger',
                'Fitness Enthusiast',
                'Gamer',
                'Food Blogger',
                'Travel Blogger'
            ])->default('Facebook Influencer');

            $table->string('other_influencer_types')->nullable();

            // Store JSON data for niches/themes
            $table->json('niches_themes');

            $table->string('publishing_time');
            $table->string('paypal_email');
            $table->string('facebook_page_name');
            $table->string('facebook_page_url')->unique();

            // Define the default value for members
            $table->integer('facebook_page_members')->default(0);

            // Define enum for influencer categories
            $table->string('influencer_category');
            // Define enum for target audience
           $table->text('target_audience')->nullable();
            // Define enum for post types and allow null values
             $table->longText('post_types', ['Skits', 'Video Ads', 'Reels', 'Image/Poster/Banner/Text posts'])->nullable();
            // Define the cost columns
            $table->unsignedDecimal('cost_per_post', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_hour', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_day', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_week', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_month', 8, 2)->nullable();
            $table->unsignedDecimal('cpm_rate_posts', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_reel', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_reel_hour', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_reel_day', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_reel_week', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_reel_month', 8, 2)->nullable();
            $table->unsignedDecimal('cpm_rate_reels', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_video_ad', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_video_ad_hour', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_video_ad_day', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_video_ad_week', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_video_ad_month', 8, 2)->nullable();
            $table->unsignedDecimal('cpm_rate_video_ads', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_skit', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_skit_hour', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_skit_day', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_skit_week', 8, 2)->nullable();
            $table->unsignedDecimal('cost_per_skit_month', 8, 2)->nullable();
            $table->unsignedDecimal('cpm_rate_skits', 8, 2)->nullable();
            $table->unsignedDecimal('price', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scp_facebook_pages');
    }
};
