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
                $table->unsignedBigInteger('id', true);
                $table->string('website_name')->nullable();
                $table->string('website_url');
                $table->json('niches')->nullable();
                $table->integer('moz_da')->nullable();
                $table->integer('ahref_dr')->nullable();
                $table->string('traffic')->nullable();
                $table->string('geos')->nullable();
                $table->string('phone_number')->nullable();
                $table->string('email')->nullable();
                $table->string('language')->nullable();
                $table->string('contact_person_name')->nullable();
                $table->string('contact_person_email')->nullable();
                $table->string('contact_person_phone')->nullable();
                $table->string('country')->nullable();
                $table->json('link_type')->nullable();
                $table->integer('do_follow_links')->nullable();
                $table->boolean('mark_paid_articles_as_sponsored')->nullable();
                $table->string('link_insertion')->nullable();
                $table->decimal('link_insertion_amount', 8, 2)->nullable();
                $table->string('publishing_time')->nullable();
                $table->decimal('normal_post_cost', 10, 2)->nullable();
                $table->decimal('betting_casino_post_cost', 10, 2)->nullable();
                $table->decimal('crypto_forex_post_cost', 10, 2)->nullable();
                $table->decimal('cbd_post_cost', 10, 2)->nullable();
                $table->decimal('banner_cost', 10, 2)->nullable();
                $table->decimal('youtube_ad_cost', 10, 2)->nullable();
                $table->string('paypal_email')->nullable();
                $table->json('social_media_pages')->nullable();
                 $table->decimal('price', 10, 2)->nullable();
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

