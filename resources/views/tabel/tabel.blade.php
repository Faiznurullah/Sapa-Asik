@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
  <!-- Illustrations -->
  <div class="card shadow mb-4">
     <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-success">Data Aspirasi</h6>
     </div>
     <div class="card-body">
        
         @if (session('Pesan'))
         <div class="alert alert-success" role="alert">
             {{ session('Pesan') }}.
          </div>  
         @endif
 
         <div class="row mb-3">
             <div class="col-md-6">
         <a href="/aspirasipdf" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
             class="fas fa-download fa-sm text-white-50"></i> Download PDF</a>
         </div>
     </div>
 
         <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                     <tr>
                         <th>Id</th>
                         <th>Nama</th>
                         <th>tipe</th>
                         <th>tanggal</th>
                         <th>Status</th>
                         <th>Detail Aspirasi</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php $no = 1; ?>          
                   @foreach($aspirasi as $row)
                     <tr>
                         <td>{{ $no++ }}</td>
                         <td>{{ $row->name }}</td>
                         <td>{{ $row->tipe }}</td>
                         <td>{{ $row->created_at->format('D, d-m-Y, \P\u\k\u\l H:i').' WIB' }}</td>
                         <td>
                            @if($row->view == '1')
                            <form action="/verifikasiaspirasi/{{ $row->id }}" method="POST" enctype="multipart/form-data">
                                @csrf 
                            <button class="btn btn-success btn-sm" type="submit">verifikasi tanggapan <i class="bi bi-patch-check"></i></button>
                            </form>
                            @elseif($row->view == '2')
                            <button class="btn btn-success btn-sm">sudah ditanggapi <i class="bi bi-check-lg"></i></button>
                            @endif
                         </td>
                         <td>
                            <a href="/detailaspirasi/{{ $row->id }}" type="button" class="btn btn-info btn-sm mb-3">detail</a>   
                         </td>  
                     </tr>
                  @endforeach
                 </tbody>
             </table>
         </div>
 
     </div>
 </div>
        </div>
    </div>
 
 
 
 </div>

@endsection