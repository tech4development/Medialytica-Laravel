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
        Schema::create('scp_youtube_channels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email_address');
            $table->string('phone_number')->nullable();
            $table->string('contact_person_name');
            $table->string('contact_person_email');
            $table->string('contact_person_phone')->nullable();
            $table->string('language')->nullable();
            $table->string('country');
            $table->enum('influencer_type', [
                'Musician/Artist',
                'DJ/MC',
                'TV Personality',
                'Radio Personality',
                'Comedian',
                'Actor/Actress',
                'Youtuber/Vlogger',
                'Fashion Blogger',
                'Athlete/Sports Personality',
                'Bloggers',
                'Fitness Enthusiast',
                'Gamer',
                'Food Vlogger',
                'Travel Vlogger'
            ])->default('Youtuber/Vlogger');
            $table->string('other_influencer_types')->nullable();
            $table->json('niches_themes');
            $table->string('publishing_time');
            $table->string('paypal_email');
            $table->string('youtube_channel_name');
            $table->string('youtube_channel_url')->unique();
            $table->unsignedBigInteger('number_of_subscribers');
            $table->enum('influencer_category', [
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
            $table->enum('post_types', [
                'Skits',
                'Video Ads',
                'Youtube Shorts',
                'Image/Poster/Banner/Text posts'
            ]);
            $table->decimal('cost_per_post', 8, 2)->nullable();
            $table->decimal('cost_per_hour', 8, 2)->nullable();
            $table->decimal('cost_per_day', 8, 2)->nullable();
            $table->decimal('cost_per_week', 8, 2)->nullable();
            $table->decimal('cost_per_month', 8, 2)->nullable();
            $table->decimal('cpm_rate_posts', 8, 2)->nullable();
            $table->decimal('cost_per_short', 8, 2)->nullable();
            $table->decimal('cost_per_short_hour', 8, 2)->nullable();
            $table->decimal('cost_per_short_day', 8, 2)->nullable();
            $table->decimal('cost_per_short_week', 8, 2)->nullable();
            $table->decimal('cost_per_short_month', 8, 2)->nullable();
            $table->decimal('cpm_rate_shorts', 8, 2)->nullable();
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
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scp_youtube_channels');
    }
};
