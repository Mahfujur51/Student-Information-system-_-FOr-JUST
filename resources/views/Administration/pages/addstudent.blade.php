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
              <h2 class="card-title">Upload Student Data</h2>
              @include('Administration.inc._session')
              <form class="forms-sample" method="POST" action="{{ route('administration.storestudent') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row mb-4">
                  <label class="col-sm-4 col-form-label">Upload file</label>
                  <div class="col-sm-8">
                    <label for="file" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                    <input type="file" class="form-control-file" id="file" accept=".csv" name="file" aria-describedby="fileHelp2">
                  </div>

                </div>
                <button type="submit" class="btn btn-success mt-4">Submit</button>
              </form>
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