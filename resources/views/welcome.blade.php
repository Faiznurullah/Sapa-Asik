@extends('layouts.template')
@section('content')
    
<!-- Header Start -->
<div class="container-fluid hero-header bg-light py-5 mb-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 mb-3 animated slideInDown">Aspirasimu  akan membawa perubahan</h1>
                <p class="animated slideInDown">Membawa perubahan sebagai wujud perbaikan untuk kedepan, mari berikan
                    aspirasi anda agar terwujud cita-cita yang sudah diimpikan, karena hari ini 
                    harus lebih baik dari hari kemarin. 
                    </p>
                
            </div>
            <div class="col-lg-6 animated fadeIn">
                <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="{{ asset('img-other/undraw.png') }}"
                    alt="">
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


@endsection('content')



   
