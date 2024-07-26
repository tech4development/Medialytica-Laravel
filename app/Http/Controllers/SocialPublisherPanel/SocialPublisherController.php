<?php

namespace App\Http\Controllers\SocialPublisherPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialPublisherController extends Controller
{
    public function index(){

        return view('socialpublisher.dashboard');
    }
}
