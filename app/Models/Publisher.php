<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
     // Define the table name if it's not the plural of the model name
     protected $table = 'publishers'; // Optional

     // Define which attributes are mass assignable
     protected $fillable = [
         'website_name',
         'website_url',
         'niches',
         'moz_da',
         'ahref_dr',
         'traffic',
         'geos',
         'phone_number',
         'email',
         'language',
         'contact_person_name',
         'contact_person_email',
         'contact_person_phone',
         'country',
         'link_type',
         'do_follow_links',
         'mark_paid_articles_as_sponsored',
         'link_insertion_yes',
         'link_insertion_amount',
         'publishing_time',
         'normal_post_cost',
         'betting_casino_post_cost',
         'crypto_forex_post_cost',
         'cbd_post_cost',
         'banner_cost',
         'link_insertion_cost',
         'youtube_ad_cost',
         'paypal_email',
         'social_media_pages',
     ];
       // Cast attributes to the desired types
       protected $casts = [
        'niches' => 'array',
        'link_type' => 'array',
        'social_media_pages' => 'array',
    ];
}

