<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;


class HomeController extends Controller
{
    public function index()
    {
        $publishers = Publisher::all(); // Fetch all publishers

        return view('home', compact('publishers'));
    }
}
