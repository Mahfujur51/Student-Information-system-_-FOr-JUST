<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="cache-control" content="private, max-age=0, no-cache">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="expires" content="0">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">





  <!-- Fonts -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Information System</title>
  <!-- plugins:css -->
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

</head>

<body>
  <div id="app" class="container-scroller">
   
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{ route('admin.home') }}"> {{-- {{ config('app.name', 'JUST') }} {{ ucfirst(config('multiauth.prefix')) }} --}} <img src="{{ asset('images/just.jpg') }}" height="50" width="500" alt="">JUST</a>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">

        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>




        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto"  class="collapse navbar-collapse">
          <!-- Authentication Links -->
          @guest('admin')
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.login')}}">{{ ucfirst(config('multiauth.prefix')) }} Login</a>
          </li>
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#dropdown" role="button" data-toggle="dropdown" >
              {{ auth('admin')->user()->name }} <i class="mdi mdi-account-circle"></i>
            </a>

            <div  class="collapse" id="dropdown">
              @admin('super')
              <a class="dropdown-item" href="{{ route('admin.show') }}">{{ ucfirst(config('multiauth.prefix')) }}</a>
              <a class="dropdown-item" href="{{ route('admin.roles') }}">Roles</a>
              @endadmin
              <a class="dropdown-item" href="{{ route('admin.password.change') }}">Change Password</a>
              <a class="dropdown-item" href="/admin/logout" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>


  </nav>

  <main class="py-lg-5">
    @yield('content')
  </main>
</div>
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


</body>

</html>