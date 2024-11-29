<?php

namespace App\Http\Controllers\Advertisers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertiserPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function forAdvertisers()
    {
        return view ('pages.advertisers.foradvertisers');
    }

     public function getstartedasAdvertiser()
    {
        return view ('pages.advertisers.getstartedadvertisers');
    }


    public function advertiserLogin()
    {
        return view ('pages.advertisers.login');
    }

    public function advertiserRegister()
    {
        return view ('pages.advertisers.register');
    }








}
