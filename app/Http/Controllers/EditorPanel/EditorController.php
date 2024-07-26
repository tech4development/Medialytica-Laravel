<?php

namespace App\Http\Controllers\EditorPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function index(){

        return view('editor.dashboard');
    }
}
