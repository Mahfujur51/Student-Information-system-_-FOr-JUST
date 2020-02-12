<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Dashboard</title>
   <link rel="stylesheet" href="{{asset('backend/node_modules/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('backend/node_modules/rickshaw/rickshaw.min.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/bower_components/chartist/dist/chartist.min.css')}}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
   
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('backend/images/favicon.html')}}" />
    

    <!-- Styles -->
    
     <link rel="stylesheet" href="{{asset('backend/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" />
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    

    <script src="{{ asset('js/custom.js') }}"></script>
     <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">

  <!-- plugins:css -->
  @include('inc._css')

</head>
<body class="sidebar-dark">
<!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{ route('student.dashboard') }}">JUST</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
       
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        @include('Student.inc.sidebar')
        <!-- partial -->
       
        @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('Student.inc.footer')
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
@include('inc._js')
  <!-- End custom js for this page-->
</body>

<script src="{{asset('backend/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>

  <script src="{{asset('backend/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!-- Plugin js for this page-->
  <script src="{{asset('backend/node_modules/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('backend/node_modules/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('backend/node_modules/flot/jquery.flot.categories.js')}}"></script>
  <script src="{{asset('backend/node_modules/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('backend/node_modules/rickshaw/vendor/d3.v3.js')}}"></script>
  <script src="{{asset('backend/node_modules/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{asset('backend/bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}}"></script>
  <script src="{{asset('backend/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <!-- inject:js -->
  <script src="{{asset('backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('backend/js/misc.js')}}"></script>
  <script src="{{asset('backend/js/settings.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('backend/js/dashboard_1.js')}}"></script>
  <!-- End custom js for this page-->
  <script src="{{asset('backend/js/data-table.js')}}"></script>
   <script src="{{asset('backend/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('backend/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
