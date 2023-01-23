@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
  <!-- Illustrations -->
  <div class="card shadow mb-4">
     <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-success">Data Tipe Aspirasi</h6>
     </div>
     <div class="card-body">
        
         @if (session('Pesan'))
         <div class="alert alert-success" role="alert">
             {{ session('Pesan') }}.
          </div>  
         @endif
 
         <div class="row mb-3">
             <div class="col-md-6">
         <a href="/downloadtipepdf" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
             class="fas fa-download fa-sm text-white-50"></i> Download PDF</a>
         </div>
     </div>
 
         <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                     <tr>
                         <th>Id</th>
                         <th>Nama</th>
                         <th>Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php $no = 1; ?>          
                   @foreach($tipe as $row)
                     <tr>
                         <td>{{ $no++ }}</td>
                         <td>{{ $row->tipe }}</td>
                         <td>
                         <a href="/edittipe/{{ $row->id }}" type="button" class="btn btn-info btn-sm mb-3">edit</a>
                         <a href="/hapustipe/{{ $row->id }}" type="button" class="btn btn-warning text-white btn-sm mb-3">hapus</a>
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