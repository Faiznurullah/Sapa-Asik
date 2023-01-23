<?php

namespace App\Http\Controllers;

use Tipe;
use Illuminate\Http\Request;
use App\Models\Tipe as ModelsTipe;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\PDF;

class TipeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified', 'checkRole:admin']);
    }
    public function tambah()
    {
      return view('tipe.tambah');
    }
    public function insert(Request $request)
    {
       Request()->validate([
           'name' => 'required'
       ],[
           'name.required' => 'Nama Wajib Diisi !!!'
       ]);

       ModelsTipe::create([
           'tipe' => request('name')
       ]);

   return redirect('/datatipe')->with('Pesan', 'Data Sukses Dikirim');
    
}
    public function data(){
        return view('tipe.data', [
            'tipe' => ModelsTipe::all()
           ]);
    }

    public function edit($id)
    {

        $x = DB::table('tipe')->where('id', $id)->first();


        if(!$x){

        abort(404);

        }

        $data = [
            'tipe' => $x,
        ];

        return view('tipe.edit', $data);
        
    }
    public function update($id, Request $request)
    {
        
        Request()->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Nama Wajib Diisi !!!'
        ]);


        $santri = ModelsTipe::where('id', $id)
             ->update([
                    'tipe' => $request->name
             ]);


        return redirect('/datatipe')->with('Pesan', 'Data Sukses Diedit');
    }
    public function hapus($id){

        $x = ModelsTipe::find($id);
        $x->delete();
        return redirect('/datatipe')->with('Pesan', 'Data Sukses Dihapus');
  
     }
     public function downloadpdf(){

        $x = DB::table('tipe')->get();
        view()->share('tipe', $x);
        $pdf = PDF::loadview('tipe.exportpdf')->setPaper('a4', 'portrait');;
        return $pdf->download('data-tipe-aspirasi.pdf');
    
       }

}
