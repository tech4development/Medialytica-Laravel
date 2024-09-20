<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $table = 'orders';

    protected $fillable = [
        'advertiser_id',
        'publisher_website_name',
        'publisher_website_url',
        'price',
        'payment_method',
        'status',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }


    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class, 'user_email', 'email' );
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_website_url', 'website_url');
    }

}


// <section class="bg-white shadow-md rounded-lg p-4">
// <h2 class="text-xl text-center font-semibold mb-4">Order Summary</h2>
// <div class="border border-gray-300 rounded-md p-4 mb-6">
//     <h3 class="text-lg font-semibold mb-2">Order Summary</h3>
//     <ul>
//         @foreach($cartItems as $item)
//             <li class="mb-2">
//                 <p class="font-semibold">{{ $item->website_name }}</p>
//                 <p class="text-gray-600">{{ $item->website_url }}</p>
//                 <p class="text-gray-600">${{ $item->price }}</p>
//             </li>
//         @endforeach
//     </ul>
//     <div class="flex justify-between items-center mt-4">
//         <span class="text-lg font-semibold">Total Price:</span>
//         <span class="text-lg font-semibold text-blue-600">${{ $cartItems->sum('price') }}</span>
//     </div>
// </div>


// </section>
