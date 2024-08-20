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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('advertiser_id'); // Ensure correct type
            $table->unsignedBigInteger('publisher_id');  // Ensure correct type
            $table->string('website_url');
            $table->decimal('price', 8, 2);
            $table->integer('quantity')->default(1);
            $table->timestamps();


             // Adding foreign key constraints
             $table->foreign('advertiser_id')
             ->references('id')->on('advertisers')
             ->onDelete('cascade');

            $table->foreign('publisher_id')
             ->references('id')->on('publishers')
             ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
