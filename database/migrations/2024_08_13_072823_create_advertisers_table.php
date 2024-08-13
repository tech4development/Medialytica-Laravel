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
        Schema::create('advertisers', function (Blueprint $table) {
            $table->id();  $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('country');
            $table->string('phone');  // Add phone number field
            $table->enum('user_role', ['super admin', 'admin', 'publisher', 'advertiser', 'socialpublisher','editor','user'])->default('advertiser');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisers');
    }
};
