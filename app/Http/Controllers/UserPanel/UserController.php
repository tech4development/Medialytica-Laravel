<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){

        if(Auth::user()->user_role === 'super admin') {
            return redirect()->route('superadmin.dashboard');
        } elseif(Auth::user()->user_role === 'admin') {
            return redirect()->route('admin.dashboard');
        }elseif(Auth::user()->user_role === 'publisher') {
            return redirect()->route('publisher.dashboard');
        }elseif(Auth::user()->user_role === 'socialpublisher') {
            return redirect()->route('socialpublisher.dashboard');
        }elseif(Auth::user()->user_role === 'editor') {
            return redirect()->route('editor.dashboard');
        }

        return view('user.dashboard');
    }
}
