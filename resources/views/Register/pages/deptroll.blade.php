@extends('multiauth::layouts.app')
@section('content')
<div class="container-fluid page-body-wrapper">
	<div class="row row-offcanvas row-offcanvas-right">
		<!-- partial:partials/_sidebar.html -->
		@include('Register.inc.sidebar')
		<!-- partial -->
		<div class="content-wrapper">
			<div class="card">
				<div class="card-header">
					<h2>Please Give Department and Roll Number(very carefully) for       {{$student->sname}}</h2>
					@if ($errors->any())
					@foreach ($errors->all() as $error)
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<i class="material-icons">close</i>
						</button>
						<span>{{ $error }}</span>
					</div>
					@endforeach
					@endif
					@if (Session::has('success'))
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<i class="material-icons">close</i>
						</button>
						<span>{{Session::get('success')}}</span>
					</div>

					@endif
				</div>
				<div class="card-body">
					<form action="{{ route('student.roll.store',$student->id) }}" method="post">
						@csrf
						<div class="form-group">
							<label>Roll:</label>
							<input class="form-control" type="number" name="roll_number">
						</div>
						<div class="form-group">
							<label>Department:</label>
							<select name="dept" class="form-control">
								<option >Select Department</option>
								<option value="1">Computer Science & Engineering</option>
								<option value="2">Environment Science & Technology</option>
								<option value="3">Micro Bilogy</option>
								<option value="4">Fisharis & Merine Bio-Science</option>
								<option value="5">ChemiCal Engineering</option>
								<option value="6">Genetics Engineering & BioTechnology</option>
								<option value="7">Industrial & Production Engineering</option>
								<option value="8">Patrolium & Mining Engineering</option>
								<option value="9">Nutrition & Food Techology</option>
								<option value="10">Pharmacy</option>
								<option value="11">Eelectrical & Electronics Engineering</option>
								<option value="12">Physical Education & Sports Science</option>
								<option value="13">Physics</option>
								<option value="14">Chemistry</option>
								<option value="15">Math</option>
								<option value="16">English</option>
								<option value="17">Agro Product & Processing Engineering</option>
								<option value="18">Accounting & Information System</option>
								<option value="19">Bio Medical Engineering</option>
								<option value="20">Finance & Banking</option>
								<option value="21">Management</option>
								<option value="22">TexTile Engineering</option>
								<option value="23">Mrketing</option>
								<option value="24">Physiotherapy and Rehabilitation</option>
								<option value="25">Climet & Deigester management</option>
								<option value="26">Nusing and Health Science</option>
							</select>
						</div>
						<input type="submit" class="btn btn-success">
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