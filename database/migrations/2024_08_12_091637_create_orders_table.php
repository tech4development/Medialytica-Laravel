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
            $table->string('order_number')->unique(); // unique order number
            $table->string('user_name'); // name of the user who placed the order
            $table->string('user_email'); // email of the user who placed the order
            $table->string('publisher_website_name'); // name of the publisher's website
            $table->string('publisher_website_url'); // URL of the publisher's website
            $table->decimal('price', 10, 2); // price of the order
            $table->longtext('status', ['placed', 'pending_approval', 'approved', 'published', 'draft', 'live'])->default('placed');
            $table->string('payment_method')->default('offline');
            $table->timestamps();
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
