<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
     // Specify the table if it's not pluralized automatically
     protected $table = 'payments';

     protected $fillable = [
        'payment_id',
        'product_name',  // This will refer to the `website_url` in the `publishers` table
        'quantity',
        'amount',        // This will refer to the price of the `website_url` in the `publishers` table
        'currency',
        'payer_name',    // This will refer to the name of the advertiser in the `advertisers` table
        'payer_email',   // This will refer to the advertiser's email in the `advertisers` table
        'payment_status',
        'payment_method',
    ];

    // Relationship to Publisher
    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'product_name', 'website_url');
    }

    // Relationship to Advertiser
    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class, 'payer_email', 'email');
    }
}
