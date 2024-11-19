<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(){

        return view('pages.resources.contactus');
    }

    public function whatweDo(){

        return view('pages.resources.whatwedo');
    }

    public function aboutUs(){

        return view('pages.resources.aboutus');
    }

    public function writeforMe(){

        return view('pages.resources.writeforme');
    }

    public function services(){

        return view('pages.resources.services');
    }

    public function niches(){

        return view('pages.resources.niches');
    }



}
