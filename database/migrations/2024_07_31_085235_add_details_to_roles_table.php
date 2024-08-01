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
        Schema::table('roles', function (Blueprint $table) {
            $table->string('full_name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('password')->nullable();
            $table->enum('is_sent', ['yes', 'no'])->default('no'); // Adding the is_sent column

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('roles', function (Blueprint $table) {
            $table->dropColumn(['full_name', 'email', 'password', 'is_sent']);
        });
    }
};
