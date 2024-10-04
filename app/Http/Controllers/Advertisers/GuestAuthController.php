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
}
