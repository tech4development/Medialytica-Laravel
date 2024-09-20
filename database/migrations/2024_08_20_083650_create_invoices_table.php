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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('isSent')->default(false);
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->decimal('price', 10, 2);
            $table->boolean('isPaymentReceived')->default(false);
            $table->string('order_number');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('publisher_website_name');
            $table->string('publisher_website_url');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
