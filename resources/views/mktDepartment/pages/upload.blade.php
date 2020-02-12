@extends('multiauth::layouts.app') 
@section('content')
<div class="container-fluid page-body-wrapper">
	<div class="row row-offcanvas row-offcanvas-right">
		<!-- partial:partials/_sidebar.html -->
		@include('mktDepartment.inc.sidebar')
		<!-- partial -->
		<div class="content-wrapper">
			<div class="card">
				@include('Dean.inc._session')
				<div class="card-body">
					<form action="{{route('mkt.department.upload.notice.student')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-gorup">
							<label for="">Notice Name</label>
							<input type="text" class="form-control" name="name">
						</div>
						<div class="form-gorup">
							<label for="">Teacher Name</label>
							<input type="text" class="form-control" name="t_name">
						</div>
						<div class="form-group">
							<label >Message:</label>
							<textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="form-group">
							<label >Upload Notice:</label>
							<input type="file" class="form-control" name="image">
						</div>
						<input type="submit" value="Upload Notice" class="btn btn-success">
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