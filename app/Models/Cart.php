<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;


    protected $fillable = [
        'advertiser_id',
        'publisher_id',
        'website_url',
        'price',
        'website_name',
    ];

    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    // public function getTotalPriceAttribute()
    // {
    //     return $this->publisher->price;
    // }
}