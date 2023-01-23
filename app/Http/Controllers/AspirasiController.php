<?php

namespace App\Http\Controllers;

use App\Models\Tipe;
use App\Models\Aspirasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\PDF;

class AspirasiController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified', 'checkRole:admin,user']);
    }
    public function tambah()
    {

      return view('aspirasi.tambah', [
        'aspirasi' => Tipe::all()
       ]);

    }
    public function insert(Request $request)
    {
       Request()->validate([
           'tipe' => 'required',
           'aspirasi' => 'required'
       ],[
           'tipe.required' => 'Nama Wajib Diisi !!!',
           'aspirasi.required' => 'Aspirasi Wajib Diisi !!!'
       ]);

       Aspirasi::create([
            'name' => Auth::user()->name,
            'name_id' => Auth::user()->id,
            'tipe' => request('tipe'),
            'aspirasi' => request('aspirasi'),
            'view' => '1'
       ]);

   return redirect('/dataaspirasi')->with('Pesan', 'Data Sukses Dikirim');
    
      }

      public function data(){

        return view('aspirasi.data', [
            'aspirasi' => Aspirasi::where('name_id', Auth::user()->id)->get()
           ]);
           
    }
    public function detail($id)
    {

       $x = Aspirasi::find($id);

        if(!$x){

            abort(404);

        }

        $detail = [
            'aspirasi' => $x,
        ];

        return view('aspirasi.detail', $detail);

    } 
    public function edit($id)
    {

        $x = DB::table('aspirasi')->where('id', $id)->first();
        $y = Tipe::all();


        if(!$x){

        abort(404);

        }

        $data = [
            'aspirasi' => $x,
            'tipe' => $y
        ];

        return view('aspirasi.edit', $data);
        
    }
    public function update($id, Request $request)
    {
        
        Request()->validate([
            'tipe' => 'required',
            'aspirasi' => 'required'
        ],[
            'tipe.required' => 'Tipe Wajib Diisi !!!',
            'aspirasi.required' => 'Aspirasi Wajib Diisi !!!'
        ]);


        Aspirasi::where('id', $id)
             ->update([
                    'tipe' => $request->tipe,
                    'aspirasi' => $request->aspirasi,
             ]);


        return redirect('/dataaspirasi')->with('Pesan', 'Data Sukses Diedit');
    }
    public function hapus($id){

        $x = Aspirasi::find($id);
        $x->delete();
        return redirect('/dataaspirasi')->with('Pesan', 'Data Sukses Dihapus');
     }
     public function downloadpdf(){

        $x = DB::table('aspirasi')->get();
        view()->share('aspirasi', $x);
        $pdf = PDF::loadview('aspirasi.exportpdf')->setPaper('a4', 'portrait');;
        return $pdf->download('data-aspirasi.pdf');
    
       }
       public function downloadpdfid($id){

        $x = Aspirasi::where('name_id', $id)->get();
        view()->share('aspirasi', $x);
        $pdf = PDF::loadview('aspirasi.exportpdf')->setPaper('a4', 'portrait');;
        return $pdf->download('data-aspirasi.pdf');
    
       }
       public function verifikasiaspirasi($id){

        $x = Aspirasi::find($id);

       Aspirasi::where('id', $id)
        ->update([
               'view' => '2'
        ]);

    return redirect('/tabel')->with('Pesan', 'Data Sukses Diselesaikan');

    }

}
