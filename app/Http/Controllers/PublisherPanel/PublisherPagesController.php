<?php

namespace App\Http\Controllers\PublisherPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublisherPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function forPublishers()
    {
        return view ('pages.publishers.forpublishers');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getstartedasPublisher()
    {
         return view ('pages.publishers.getstartedpublishers');
    }


    public function publisherLogin()
    {
        return view ('pages.publishers.login');
    }

    public function publisherRegister()
    {
        return view ('pages.publishers.register');
    }
}
