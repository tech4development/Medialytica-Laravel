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
        Schema::create('related_websites', function (Blueprint $table) {
            $table->id();
            $table->string('website_name');
            $table->string('website_url');
            $table->json('niches');
            $table->integer('moz_da');
            $table->integer('ahref_dr');
            $table->string('traffic');
            $table->string('geos');
            $table->json('link_type');
            $table->integer('do_follow_links');
            $table->boolean('mark_paid_articles_as_sponsored');
            $table->string('link_insertion')->nullable();
            $table->decimal('link_insertion_amount', 8, 2)->nullable();
            $table->string('publishing_time');
            $table->decimal('price', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('related_websites');
    }
};
