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
        if (!Schema::hasTable('social_advertisers_order_items')) {
            Schema::create('social_advertisers_order_items', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('order_id'); // Define the unsignedBigInteger field first
                $table->string('name'); // Name of the publisher's website
                $table->string('url'); // URL of the publisher's website
                $table->decimal('price', 10, 2)->default(0); // Price, defaulting to 0
                $table->timestamps();

                // Set up the foreign key constraint
                $table->foreign('order_id')->references('id')->on('social_advertisers_orders')->onDelete('cascade'); // Foreign key to social_advertisers_orders
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_advertisers_order_items');
    }
};
