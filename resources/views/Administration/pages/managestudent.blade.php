@extends('multiauth::layouts.app')
@section('content')
<div class="container-fluid page-body-wrapper">
  <div class="row row-offcanvas row-offcanvas-right">
    <!-- partial:partials/_sidebar.html -->
    @include('Administration.inc.sidebar')
    <!-- partial -->
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12  grid-margin">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Student View</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Father</th>
                        <th>Mother</th>
                        <th>Ad Roll</th>
                        <th>Session</th>
                        <th>Merit</th>
                        <th>Dept</th>
                       
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @foreach ($students as $key=>$student)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$student->sname}}</td>
                        <td>{{$student->sfname}}</td>
                        <td>{{$student->smname}}</td>
                        <td>{{$student->admission_roll}}</td>
                        <td>{{$student->session}}</td>
                        <td>{{$student->m_position}}</td>
                        <td>{{$student->dept}}</td>
                       
                        <td>
                        <a href="{{ route('administration.viewstudent',$student->id) }}" class="btn btn-outline-primary">View</a href="">
                      
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
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