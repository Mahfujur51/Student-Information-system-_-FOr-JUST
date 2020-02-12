@extends('Student.master')
@section('content')
<div class="content-wrapper">
	<div class="card">
		<div class="card-header">{{$student->sname}} Plase Change Password	</div>
		<div class="card-body">
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
			<form action="{{route('student.change',$student->id)}}" method="post">
				@csrf
				<div class="form-group">
					<label for="">Change Password</label>
					<input type="password" class="form-control" value="{{$student->student_password}}" name="student_password">
				</div>
				<input type="submit" value="Chanage Password" class="btn btn-success">
			</form>
		</div>
	</div>
</div>

@endsection