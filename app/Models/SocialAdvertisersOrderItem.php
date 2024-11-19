<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialAdvertisersOrderItem extends Model
{
    use HasFactory;

    protected $table = 'social_advertisers_order_items'; // Specify the table name if it doesn't follow Laravel's naming conventions

    protected $fillable = [
        'order_id',  // Foreign key to the orders table
        'name',      // Name of the publisher's website
        'url',       // URL of the publisher's website
        'price',     // Price, defaulting to 0
    ];

    // Define the relationship with the SocialAdvertisersOrder
    public function order()
    {
        return $this->belongsTo(SocialAdvertisersOrder::class, 'order_id');
    }
}
