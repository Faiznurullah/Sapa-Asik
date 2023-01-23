<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware(['auth','verified', 'checkRole:admin,user']);
    }

    
    public function index()
    {
        $aspirasi_a = Aspirasi::count();
        $aspirasi_u = Aspirasi::where('name_id', Auth::user()->id)->count();
        return view('home', compact('aspirasi_a', 'aspirasi_u'));
    }
}
