<?php

namespace App\Http\Controllers\SocialPublisherPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialPublisherPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function forSocialPublishers()
    {
        return view ('pages.socialpublishers.forsocialpublishers');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getstartedasSocialPublisher()
    {
       return view ('pages.socialpublishers.getstartedsocialpublishers');
    }


    public function socialpublisherLogin()
    {
        return view ('pages.socialpublishers.login');
    }

    public function socialpublisherRegister()
    {
        return view ('pages.socialpublishers.register');
    }
}
