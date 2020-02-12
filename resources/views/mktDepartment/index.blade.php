@extends('multiauth::layouts.app') 
@section('content')
<div class="container-fluid page-body-wrapper">
  <div class="row row-offcanvas row-offcanvas-right">
    <!-- partial:partials/_sidebar.html -->
    @include('mktDepartment.inc.sidebar')
    <!-- partial -->
    <div class="content-wrapper">
      <div class="row">
        <div class="card">
          <div class="card-header  bg-info" >
            <h2 class="text-center text-light">
            About Jashore University of Scince & Techonology</h2>
          </div>
          <div class="card-body">
            <p class=" text-center"> <img src="{{ asset('images/Logo.png') }}" alt=""></p>
            
            <p>Jashore University of Science and Technology (Bengali: যশোর বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়) also known as JUST (Bengali: যবিপ্রবি) is a government-financed public university in Bangladesh. This is the fourth public university in Khulna Division and the first public university in Jashore. It was established in 2007 and started four-year undergraduate courses from the 2009–2010 session. Previously known as Jessore University of Science & Technology.</p>
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