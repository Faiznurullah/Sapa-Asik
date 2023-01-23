<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

       <!-- Custom styles for this page -->
    <link href="{!! asset('vendor/datatables/dataTables.bootstrap4.min.css') !!}" rel="stylesheet">


</head>

<style>
.valign {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}


</style>

<body id="page-top">


 <!-- Begin Page Content -->
  <div class="container-fluid valign mt-5">

    <!-- 404 Error Text -->
    <div class="text-center">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">Page Not Found</p>
        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
        <a href="/home">&larr; Back to Dashboard</a>
    </div>

</div>
<!-- /.container-fluid -->


  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

   <!-- Page level plugins -->
 <script src="{!! asset('vendor/datatables/jquery.dataTables.min.js') !!}"></script>
 <script src="{!! asset('vendor/datatables/dataTables.bootstrap4.min.js') !!}"></script>
 <!-- Page level custom scripts -->
 <script src="{!! asset('js/demo/datatables-demo.js') !!}"></script>

</body>

</html>