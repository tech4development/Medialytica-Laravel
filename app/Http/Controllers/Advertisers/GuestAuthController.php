<?php

namespace App\Http\Controllers\Advertisers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestAuthController extends Controller
{
    public function index()


    {
        return view('pages.advertisers.guest');
    }

   public function showFilters(Request $request)
    {
         // Get filter inputs
    $country = $request->input('country');
    $niche = $request->input('niche');
    $minPrice = $request->input('min_price');
    $maxPrice = $request->input('max_price');

    // Base query
    $query = Publisher::query();

    // Apply filters if provided
    if ($country) {
        $query->where('country', $country);
    }

    if ($niche) {
        $query->where('niches', 'like', '%' . $niche . '%');
    }

    if ($minPrice) {
        $query->where('price', '>=', $minPrice);
    }

    if ($maxPrice) {
        $query->where('price', '<=', $maxPrice);
    }


        // Fetch the filtered data
        $publishers = $query->get();

        // If the request is AJAX, return only the table partial
        if ($request->ajax()) {
            return view('partials.publisher_table', compact('publishers'))->render();
        }

        // Otherwise return the full page
        return view('pages.advertisers.guest', compact('publishers'));
    }


}
