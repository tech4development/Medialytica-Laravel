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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('advertiser_id'); // Ensure this matches the type of `id` in `advertisers`
            $table->string('publisher_website_name');
            $table->string('publisher_website_url');
            $table->decimal('price', 10, 2);
            $table->longText('status')->default('placed');
            $table->string('payment_method')->default('offline');
            $table->timestamps();

            // Set up foreign key constraint
           // $table->foreign('advertiser_id')->references('id')->on('advertisers')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
