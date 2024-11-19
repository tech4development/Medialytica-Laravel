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
        Schema::create('social_advertisers_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('socialadvertiser_id'); // Foreign key to advertisers table
            $table->string('socialpublisher_channel_name'); // Name of the publisher's website
            $table->string('socialpublisher_channel_url'); // URL of the publisher's website
            $table->decimal('price', 10, 2); // Total price of the order
            $table->longText('status')->default('placed'); // Order status, defaulting to 'placed'
            $table->string('payment_method')->default('offline'); // Payment method, defaulting to 'offline'
            $table->timestamps(); // Timestamps for created_at and updated_at

            // Set up foreign key constraint
            // Uncomment the following line if the advertisers table exists
            // $table->foreign('advertiser_id')->references('id')->on('advertisers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_advertisers_orders');
    }
};
