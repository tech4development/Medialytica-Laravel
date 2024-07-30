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
        if (!Schema::hasTable('publishers')) {
            Schema::create('publishers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('website_name');
                $table->string('website_url');
                $table->json('niches');
                $table->integer('moz_da');
                $table->integer('ahref_dr');
                $table->string('traffic');
                $table->string('geos');
                $table->string('phone_number');
                $table->string('email');
                $table->string('language');
                $table->string('contact_person_name');
                $table->string('contact_person_email');
                $table->string('contact_person_phone');
                $table->string('country');
                $table->json('link_type');
                $table->integer('do_follow_links');
                $table->boolean('mark_paid_articles_as_sponsored');
                $table->string('link_insertion')->nullable();
                $table->decimal('link_insertion_amount', 8, 2)->nullable();
                $table->string('publishing_time');
                $table->decimal('normal_post_cost', 10, 2);
                $table->decimal('betting_casino_post_cost', 10, 2);
                $table->decimal('crypto_forex_post_cost', 10, 2);
                $table->decimal('cbd_post_cost', 10, 2);
                $table->decimal('banner_cost', 10, 2);
                $table->decimal('link_insertion_cost', 10, 2);
                $table->decimal('youtube_ad_cost', 10, 2);
                $table->string('paypal_email');
                $table->json('social_media_pages')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publishers');
    }
};

