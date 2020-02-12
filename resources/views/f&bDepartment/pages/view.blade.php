@extends('multiauth::layouts.app') 
@section('content')
<div class="container-fluid page-body-wrapper">
	<div class="row row-offcanvas row-offcanvas-right">
		<!-- partial:partials/_sidebar.html -->
		@include('gebtDepartment.inc.sidebar')
		<!-- partial -->
		<div class="content-wrapper">
			<div class="row">
				<div class="card">
					<div class="card-header">
						Name:{{$student->name}}
						
					</div>
				<img class="card-img-top" src="{{ asset('images/department/'.$student->image) }}" width="1000" height="620" alt="">
				
				
			</div>

			</div>
			<div class="card">
				<div class="card-body">
					<h2>Message</h2>
					<p>{{$student->message}}</p>
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