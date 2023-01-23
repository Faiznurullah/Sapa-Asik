@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12"> 
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Profile</h6>
        </div>
        <div class="card-body" style="height: 200px;">
           
      <p>Name: {{ Auth::user()->name }}</p>
      <p>Email: {{ Auth::user()->email }}</p>
      <p>Created: {{ Auth::user()->created_at }}</p>
      <a href="/home" class="btn btn-success btn-sm">kembali</a>

  </div>
</div>
</div>
</div>

</div>


@endsection