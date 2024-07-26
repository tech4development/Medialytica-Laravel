<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){

        if(Auth::user()->role === 'super admin') {
            return redirect()->route('admin.dashboard');
        } elseif(Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }elseif(Auth::user()->role === 'publisher') {
            return redirect()->route('publisher.dashboard');
        }elseif(Auth::user()->role === 'socialpublisher') {
            return redirect()->route('socialpublisher.dashboard');
        }elseif(Auth::user()->role === 'editor') {
            return redirect()->route('editor.dashboard');
        }

        return view('user.dashboard');
    }
}
