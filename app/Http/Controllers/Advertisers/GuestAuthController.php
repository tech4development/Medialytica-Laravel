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

    public function fetchPublishers(Request $request)
{
    $query = Publisher::query();

    // Apply filters
    if ($request->has('country') && $request->country != '') {
        $query->where('country', $request->country);
    }
    if ($request->has('niche') && $request->niche != '') {
        $query->where('niches', 'like', '%' . $request->niche . '%');
    }
    if ($request->has('min_price') && $request->min_price != '') {
        $query->where('price', '>=', $request->min_price);
    }
    if ($request->has('max_price') && $request->max_price != '') {
        $query->where('price', '<=', $request->max_price);
    }
    if ($request->has('da') && $request->da != '') {
        $query->where('moz_da', '>=', $request->da);
    }
    if ($request->has('dr') && $request->dr != '') {
        $query->where('ahref_dr', '>=', $request->dr);
    }

    // Fetch the filtered data
    $publishers = $query->get();

    // Return a view or partial to update the table
    return view('partials.publisher_table', compact('publishers'));
}
}
