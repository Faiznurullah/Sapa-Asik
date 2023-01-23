@extends('layouts.app')
@section('content')
    

<div class="container">
    <div class="row">
        <div class="col-md-12"> 
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Detail Aspirasi</h6>
        </div>
        <div class="card-body">
           
        <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th scope="row">Nama</th>
                    <td>{{ $aspirasi->name }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Tipe Aspirasi</th>
                    <td>{{ $aspirasi->tipe }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Aspirasi</th>
                    <td>{{ $aspirasi->aspirasi }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Dibuat Pada</th>
                    <td>{{ $aspirasi->created_at->format('D, d-m-Y, \P\u\k\u\l H:i').' WIB' }}</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>
                      <a href="/dataaspirasi" type="button" class="btn btn-success btn-sm">Kembali</a>
                    </td>
                  </tr>
                </tbody>
              </table>

  </div>
</div>
</div>
</div>

</div>

@endsection