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
        Schema::create('scp_instagarm_pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email_address');
            $table->string('phone_number')->nullable();
            $table->string('contact_person_name');
            $table->string('contact_person_email');
            $table->string('contact_person_phone')->nullable();
            $table->string('language');
            $table->string('country');
            $table->enum('influencer_type', [
                'Musician/Artist',
                'DJ/MC',
                'TV Personality',
                'Radio Personality',
                'Comedian',
                'Actor/Actress',
                'Instagram Influencer',
                'Fashion Blogger',
                'Athlete/Sports Personality',
                'Bloggers',
                'Fitness Enthusiast',
                'Gamer',
                'Food Blogger',
                'Travel Blogger'
            ])->default('Instagram Influencer'); // Set a default value if necessary
            $table->string('other_influencer_types')->nullable();
            $table->json('niches_themes');
            $table->string('publishing_time');
            $table->string('paypal_email');
            $table->string('instagram_page_name');
            $table->string('instagram_page_url')->unique();
            $table->unsignedBigInteger('number_of_followers');
            $table->longText('influencer_category', [
                'Mega Influencers (More than 1M followers)',
                'Macro Influencers (100K - 1M followers)',
                'Micro Influencers (1K - 100K followers)',
                'Nano Influencers (Below 1K followers)'
            ]);

            $table->enum('target_audience', [
                'Below 18 years',
                '18 to 35 years',
                'Over 35 years'
            ]);
            $table->longTest('post_types', [
                'Skits',
                'Video ads',
                'Image/Poster/Banner/Text Posts',
                'Reels'
            ]);
            $table->decimal('cost_per_post', 8, 2)->nullable();
            $table->decimal('cost_per_hour', 8, 2)->nullable();
            $table->decimal('cost_per_day', 8, 2)->nullable();
            $table->decimal('cost_per_week', 8, 2)->nullable();
            $table->decimal('cost_per_month', 8, 2)->nullable();
            $table->decimal('cpm_rate_posts', 8, 2)->nullable();
            $table->decimal('cost_per_reel', 8, 2)->nullable();
            $table->decimal('cost_per_reel_hour', 8, 2)->nullable();
            $table->decimal('cost_per_reel_day', 8, 2)->nullable();
            $table->decimal('cost_per_reel_week', 8, 2)->nullable();
            $table->decimal('cost_per_reel_month', 8, 2)->nullable();
            $table->decimal('cpm_rate_reels', 8, 2)->nullable();
            $table->decimal('cost_per_video_ad', 8, 2)->nullable();
            $table->decimal('cost_per_video_ad_hour', 8, 2)->nullable();
            $table->decimal('cost_per_video_ad_day', 8, 2)->nullable();
            $table->decimal('cost_per_video_ad_week', 8, 2)->nullable();
            $table->decimal('cost_per_video_ad_month', 8, 2)->nullable();
            $table->decimal('cpm_rate_video_ads', 8, 2)->nullable();
            $table->decimal('cost_per_skit', 8, 2)->nullable();
            $table->decimal('cost_per_skit_hour', 8, 2)->nullable();
            $table->decimal('cost_per_skit_day', 8, 2)->nullable();
            $table->decimal('cost_per_skit_week', 8, 2)->nullable();
            $table->decimal('cost_per_skit_month', 8, 2)->nullable();
            $table->decimal('cpm_rate_skits', 8, 2)->nullable();
             $table->decimal('price', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scp_instagarm_pages');
    }
};
