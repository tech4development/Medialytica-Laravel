<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $table = 'orders';

    protected $fillable = [
        'order_number',
        'user_name',
        'user_email',
        'publisher_website_name',
        'publisher_website_url',
        'price',
    ];


    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class, 'user_email', 'email');
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_website_url', 'website_url');
    }

}
