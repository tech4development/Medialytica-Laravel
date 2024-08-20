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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_id')->unique(); // Ensure payment_id is unique
            $table->foreignId('publisher_id') // Foreign key to `publishers`
                ->constrained('publishers')
                ->onDelete('cascade');
            $table->unsignedInteger('quantity');
            $table->decimal('amount', 10, 2); // Change to decimal for currency amounts
            $table->string('currency', 3); // Assuming currency codes like USD, EUR
            $table->foreignId('advertiser_id') // Foreign key to `advertisers`
                ->constrained('advertisers')
                ->onDelete('cascade');
            $table->string('payment_status');
            $table->string('payment_method');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
