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
        'quantity',
        'website_name',
         'niches',
         'moz_da',
         'ahref_dr',
         'traffic',
         'geos',
         'language',
         'country',
         'link_type',
         'do_follow_links',
         'mark_paid_articles_as_sponsored',
         'link_insertion_yes',
         'publishing_time',
         'price',

    ];

    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
}
