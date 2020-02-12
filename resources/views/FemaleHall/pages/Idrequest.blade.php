@extends('multiauth::layouts.app') 
@section('content')



<div class="container-fluid page-body-wrapper">
	<div class="row row-offcanvas row-offcanvas-right">
		<!-- partial:partials/_sidebar.html -->
		@include('FemaleHall.inc.sidebar')
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
							<h2 class="card-title">Female Hall Total request <span class="badge badge-info">{{$student->count()}}</span></h2>

						</div>
						<div class="dashboard-chart-card-container">
							<div id="dashboard-card-chart-2" class="card-float-chart"></div>
						</div>
					</div>
				</div>

			</div>
			<div class="card">
				@include('FemaleHall.inc._session')
			<table id="order-listing" class="table table-striped" style="width:100%;">
				<thead>
					<tr>
						<th>Sl No</th>

						<th>Name</th>
						<th>Roll</th>
						<th>Dept</th>
						<th>View</th>
						<th>Payment</th>
						<th>IDCard</th>
					</tr>
					
				</thead>
				@foreach ($student as $key=>$students)
					{{-- expr --}}
				
				<tr>
					<td>{{$key+1}}</td>
					<td>{{$students->sname}}</td>
					<td>{{$students->roll_number}}</td>
					<td>@if($students->dept==1)
              Computer Science & Engineering
              @elseif($students->dept==2)
              Environment Science & Technology
              @elseif($students->dept==3)
              Micro Bilogy
              @elseif($students->dept==4)
              Fisharies And Merine BioScience
              @elseif($students->dept==5)
              Chemical Engineering
              @elseif($students->dept==6)
              Genetics Engineering & Bio Techology
              @elseif($students->dept==7)
              Industrial and Production Engineering
              @elseif($students->dept==8)
              Patrolium & Mining Engineering
              @elseif($students->dept==9)
              Nutritaion and Food Techology
              @elseif($students->dept==10)
              Pharmacy
              @elseif($students->dept==11)
              Electrical & Electronics Engineering
              @elseif($students->dept==12)
              Physical Education and Sport Science
              @elseif($students->dept==13)
              Physics
              @elseif($students->dept==14)
              Chemistry
              @elseif($students->dept==15)
              MathaMethics
              @elseif($students->dept==16)
              English
              @elseif($students->dept==17)
              AgroPruduct & Processing Engineering
              @elseif($students->dept==18)
              Accounting & Information System
              @elseif($students->dept==19)
              Biomedical Engineering
              @elseif($students->dept==20)
              Finance & Banking
              @elseif($students->dept==21)
              Management
              @elseif($students->dept==22)
              Textile Engineering
              @elseif($students->dept==23)
              Marketing
              @elseif($students->dept==24)
              Physiotherapy and rehabition
              @elseif($students->dept==25)
              Cliemet & Disester Management
              @elseif($students->dept==26)
              Nurshing & Health Science
              @endif</td>
					<td>
						
						<a href="{{ route('student.femalehall.profile',$students->id) }}" class="btn btn-primary">View Profile</a>

					</td>
				
					<td>
						<a href="{{ route('fstudent.payment.accept',$students->id) }}" class="btn btn-info">Accept</a>
					</td>
					
					
					<td>
						<a href="{{ route('fstudent.hall.print',$students->id) }}" class="btn btn-success">Print ID</a>
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