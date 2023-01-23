@extends('layouts.app')
@section('content')
    

<div class="container">
    <div class="row">
        <div class="col-md-12"> 
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Edit Aspirasi</h6>
        </div>
        <div class="card-body">
           
            <form action="/updateaspirasi/{{ $aspirasi->id }}" method="POST" enctype="multipart/form-data">
                @csrf

   <div class="row">
       <div class="col-md-6">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Aspirasi</label>
            <select class="form-control" id="exampleFormControlSelect1" name="tipe">
                @foreach($tipe as $row)
              <option value="{{ $row->tipe }}">{{ $row->tipe }}</option>
              @endforeach
            </select>
          </div>
          <div class="valid-feedback">
            @error('tipe')
       <div class="alert alert-danger">{{ $message }}</div>
         @enderror
          </div>
       </div>
       <div class="col-md-6">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Aspirasi Kamu</label>
             <textarea class="form-control  @error('aspirasi') is-invalid @enderror is-valid"  id="exampleFormControllTextarea1" name="aspirasi"></textarea>
        </div>
        <div class="valid-feedback">
            @error('aspirasi')
       <div class="alert alert-danger">{{ $message }}</div>
         @enderror
          </div>
       </div>
   </div>

   <div class="row">
    <div class="col-md-6">
        <div class="d-grid gap-2 mt-4">
            <button class="btn btn-success" type="submit">Kirim Data</button>
          </div>
       </div>
   </div>

            </form>

  </div>
</div>
</div>
</div>

</div>

@endsection