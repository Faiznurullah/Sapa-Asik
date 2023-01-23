<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RelogController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function registrasi(){
        return view('auth.register');
    }

    public function profile(){
        return view('profile');
    }
    public function reset(){
        return view('reset');
    }
    public function logout(Request $request)
    {
      Auth::logout();
      return redirect('/login');
    }
}
