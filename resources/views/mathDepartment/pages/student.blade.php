@extends('multiauth::layouts.app') 
@section('content')



<div class="container-fluid page-body-wrapper">
	<div class="row row-offcanvas row-offcanvas-right">
		<!-- partial:partials/_sidebar.html -->
		@include('mathDepartment.inc.sidebar')
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
							<h2 class="card-title">Number Notice <span class="badge badge-info">{{$student->count()}}</span></h2>

						</div>
						<div class="dashboard-chart-card-container">
							<div id="dashboard-card-chart-2" class="card-float-chart"></div>
						</div>
					</div>
				</div>

			</div>
			<div class="card">
			<table id="order-listing" class="table table-striped" style="width:100%;">
				<thead>
					<tr>
						<th>Sl No</th>

						<th>Name</th>
						<th>Roll</th>
						<th>Dept</th>
						<th>View</th>
						
						
						
						
						
					</tr>
					
				</thead>
				@foreach ($student as $key=>$students)
					{{-- expr --}}
				
				<tr>
					<td>{{$key+1}}</td>
					<td>{{$students->sname}}</td>
					<td>{{$students->roll_number}}</td>
					<td>CSE</td>
					
					
					<td>
						
						<a href="{{ route('math.student.profile',$students->id) }}" class="btn btn-primary">View Profile</a>

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