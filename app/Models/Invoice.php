<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
    'order_id',
    'price',
    'isSent',
    'status',
    'payment_method',
    'isPaymentReceived',
    'user_name',
    'user_email',
    'publisher_website_name',
    'publisher_website_url',
];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
