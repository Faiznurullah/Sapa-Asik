@extends('layouts.app')

@section('content')

@if (session('Pesan'))
<div class="alert alert-success" role="alert">
    {{ session('Pesan') }}.
 </div>  
@endif

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Jumlah Aspirasi</div>
                                    @if(Auth::user()->kelas == 'user')
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $aspirasi_u }}</div>
                                @else 
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $aspirasi_a }}</div>
                                @endif
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-4 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Account-Id</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Id-{{ Auth::user()->id }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-key fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-4 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Status Account</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Auth::user()->kelas }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Content Row -->



<div class="row">

     <div class="col-md-6">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Sapa Asik</h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                        src="{{ asset('img-other/undraw.png') }}" alt="{{ asset('img-other/undraw.png') }}">
                </div>
                <p> 
                   Sapa Asik merupakan aplikasi berbasis web untuk menyuarakan aspirasi,
                   Aplikasi ini sangat mudah untuk digunakan oleh pengguna, sehingga pengguna
                   dengan mudah untuk memberikan aspirasinya. 
                </p>
                
            </div>
        </div>

     </div>


</div>

@endsection
