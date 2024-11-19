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
        Schema::create('social_advertisers', function (Blueprint $table) {
           $table->id(); // Auto-incrementing ID
            $table->string('name'); // Name of the advertiser
            $table->string('email')->unique(); // Unique email address
            $table->string('password'); // Password for the advertiser
            $table->string('country'); // Country of the advertiser
            $table->string('phone'); // Phone number of the advertiser
            $table->enum('user_role', ['super admin', 'admin', 'publisher', 'social_advertiser','advertiser', 'social publisher', 'editor', 'user'])->default('social_advertiser'); // User role with a default value
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_advertisers');
    }
};
