<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TabelController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified', 'checkRole:admin']);
    }
    public function tabel() {

    return view('tabel.tabel', [
        'aspirasi' => Aspirasi::all()
       ]);

    }

}
