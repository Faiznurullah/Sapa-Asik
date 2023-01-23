@extends('layouts.app')
@section('content')


   @if(Auth::user()->kelas == 'user')

<div class="row">
    <div class="col-sm-6 col-xl-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Chart Aspirasi Anda</h6>
            </div>
        <div class="card">
            <div class="card-body">
                <p class="header-title" align="center">Statistik Aspirasi Anda</p>
                 <canvas id="bcChart" class="chartjs" width="undefined" height="120px"></canvas>
            </div>
        </div>
          </div>
        </div> 
        <div class="col-sm-6 col-xl-4">
            
        </div>                 
    </div>

    @else

    <div class="row">
        <div class="col-sm-6 col-xl-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success">Chart Aspirasi Anda </h6>
                </div>
            <div class="card">
                <div class="card-body">
                    <p class="header-title" align="center">Statistik Aspirasi Anda </p>
                     <canvas id="bcChart" class="chartjs" width="undefined" height="120px"></canvas>
                </div>
            </div>
              </div>
            </div>                  
        </div>

        <div class="row">
            <div class="col-sm-6 col-xl-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success">Chart Semua Aspirasi</h6>
                    </div>
                <div class="card">
                    <div class="card-body">
                        <p class="header-title" align="center">Statistik Semua Aspirasi</p>
                         <canvas id="bcChart1" class="chartjs" width="undefined" height="120px"></canvas>
                    </div>
                </div>
                  </div>
                </div>                  
            </div>

        @endif

   @endsection

   @section('bar')

    <script type="text/javascript">
        var ctx = document.getElementById("bcChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($label); ?>,
            datasets: [{
            label: 'Statistik Aspirasi Anda Ada',
            backgroundColor: '#ADD8E6',
            borderColor: '#93C3D2',
            data: <?php echo json_encode($aspirasi_jum); ?>
            }],
            options: {
        animation: {
            onProgress: function(animation) {
                progress.value = animation.animationObject.currentStep / animation.animationObject.numSteps;
            }
          }
        }
       },
     });
    </script>

@endsection

@section('bar1')
<script type="text/javascript">
        var ctx = document.getElementById("bcChart1").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($label); ?>,
            datasets: [{
            label: 'Statistik Semua Aspirasi Ada',
            backgroundColor: '#ADD8E6',
            borderColor: '#93C3D2',
            data: <?php echo json_encode($aspirasi_juma); ?>
            }],
            options: {
        animation: {
            onProgress: function(animation) {
                progress.value = animation.animationObject.currentStep / animation.animationObject.numSteps;
            }
          }
        }
       },
     });
    </script>

@endsection