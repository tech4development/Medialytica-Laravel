<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatedWebsite extends Model
{
    use HasFactory;

    protected $table = 'related_websites';

    protected $fillable = [
        'website_name',
        'website_url',
        'niches',
        'moz_da',
        'ahref_dr',
        'traffic',
        'geos',
        'link_type',
        'do_follow_links',
        'mark_paid_articles_as_sponsored',
        'link_insertion',
        'link_insertion_amount',
        'publishing_time',
        'price'
    ];

    protected $casts = [
        'niches' => 'array',
        'link_type' => 'array',
    ];
}
