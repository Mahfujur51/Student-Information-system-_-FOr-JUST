@extends('multiauth::layouts.app')
@section('content')
<div class="container-fluid page-body-wrapper">
	<div class="row row-offcanvas row-offcanvas-right">
		<!-- partial:partials/_sidebar.html -->
		@include('FemaleHall.inc.sidebar')
		<!-- partial -->
		<div class="content-wrapper">
			<div class="card">
				<div class="card-header">
					<h2>Please Give The Room Number for {{$student->sname}}</h2>
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
					<form action="{{ route('fstudent.room.store',$student->id) }}" method="post">
						@csrf
						<div class="form-group">
							<label>Room :</label>
							<input class="form-control" type="number" name="room">
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