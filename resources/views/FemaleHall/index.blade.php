@extends('multiauth::layouts.app') 
@section('content')
<div class="container-fluid page-body-wrapper">
  <div class="row row-offcanvas row-offcanvas-right">
    <!-- partial:partials/_sidebar.html -->
    @include('FemaleHall.inc.sidebar')
    <!-- partial -->
    <div class="content-wrapper">
      <div class="row">
       <div class="card">
        <div class="card-body">
         <img src="{{asset('images/fmale.jpg')}}" class="card-img-top" width="100%"  alt="">
         </div>
       </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <div class="card card-body">
      <div class="card-header text-center">
        <a href="">Mahfujur@2019</a>
      </div>
    </div>
    <!-- partial -->
  </div>
  <!-- row-offcanvas ends -->
</div>
@endsection