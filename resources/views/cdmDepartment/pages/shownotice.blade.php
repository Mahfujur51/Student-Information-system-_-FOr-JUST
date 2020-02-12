@extends('multiauth::layouts.app') 
@section('content')



<div class="container-fluid page-body-wrapper">
	<div class="row row-offcanvas row-offcanvas-right">
		<!-- partial:partials/_sidebar.html -->
		@include('cdmDepartment.inc.sidebar')
		<!-- partial -->
		<div class="content-wrapper">
			<div class="row">
				<div class="col-sm-6 col-md-6 grid-margin">
					<div class="card">
						<div class="card-body">

							<h2 class="card-title">Total sutdent Student</h2>
						</div>
						<div class="dashboard-chart-card-container">
							<div id="dashboard-card-chart-1" class="card-float-chart"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 grid-margin">
					<div class="card">
						<div class="card-body">
							<h2 class="card-title">Numberer Notice <span class="badge badge-info">{{$student->count()}}</span></h2>

						</div>
						<div class="dashboard-chart-card-container">
							<div id="dashboard-card-chart-2" class="card-float-chart"></div>
						</div>
					</div>
				</div>

			</div>
			<div class="card">
				@include('CseDepartment.inc._session')
			<table id="order-listing" class="table table-striped" style="width:100%;">
				<thead>
					<tr>
						<th>Sl No</th>

						<th>Notice Name</th>
						<th>Teacher Name</th>
						<th>Message</th>
						<th>Notice</th>
						<th>View Notice</th>
						<th>Action</th>
						
						
						
						
						
					</tr>
					
				</thead>
				@foreach ($student as $key=>$students)
					{{-- expr --}}
				
				<tr>
					<td>{{$key+1}}</td>
					<td>{{$students->name}}</td>
					<td>{{$students->t_name}}</td>
					<td>{{$students->message}}</td>
					<td><img src="{{ asset('images/department/'.$students->image) }}" alt="Notice" width="150" height="150"></td>
					
					
				
					
					<td>
						
						<a href="{{ route('cdmdepartment.notice.view',$students->id) }}" class="btn btn-primary">View This Notice</a>

					</td>
					<td>
						<a href="{{ route('student.cdmdepartment.notice.delete',$students->id) }}" class="btn btn-danger">Delete</a>
						<a href="{{ route('student.cdmdepartment.notice.update',$students->id) }}" class="btn btn-secondary">Update</a>
					</td>
				
					
					
					
				</tr>
				@endforeach

			</table>
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