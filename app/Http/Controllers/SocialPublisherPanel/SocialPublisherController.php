<?php

namespace App\Http\Controllers\SocialPublisherPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialPublisherController extends Controller
{
    public function index(){

        return view('socialpublisher.dashboard');
    }

   // Shows the guest page for a specific social publisher (if needed)
    public function guestPage()
    {
        // You can optionally pass an ID for future expansion, or remove it if not needed
        return view('pages.socialpublishers.socialguest');
    }
}


