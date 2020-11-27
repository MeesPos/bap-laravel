<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin() {
        if(Auth::user()) {
            $user = Auth::user();
        } else {
            return redirect('login')->with('error', 'U bent nog niet ingelogd!');
        }

        if($user->admin != true) {
            return redirect('/')->with('error', 'U bent geen admin!');
        } else if($user->admin == true) {
            return view('admin');
        }
    }
}
