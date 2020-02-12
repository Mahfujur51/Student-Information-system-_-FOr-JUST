@extends('multiauth::layouts.app') 
@section('content')
<div class="container-fluid page-body-wrapper">
	<div class="row row-offcanvas row-offcanvas-right">
		<!-- partial:partials/_sidebar.html -->
		@include('Register.inc.sidebar')
		<!-- partial -->
		<div class="content-wrapper">
			<div class="card">
				@include('Register.inc._session')
				<div class="card-body">
					<form action="{{ route('updated.roll_dept') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-gorup">
							<label for="">Upload Roll & Department</label>
							<input type="file" accept=".csv" class="form-control" name="file">
						</div>
						
						
						<input  class="mt-4 btn btn-success" type="submit" value="Upload" >
					</form>
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