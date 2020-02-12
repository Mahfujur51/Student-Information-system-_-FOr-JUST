@extends('Student.master')
@section('content')
<div class="content-wrapper">
	<div class="card">
		<div class="card-body">
			
			<div class="row">
				<div class="card">
					<div class="card-header">
						
						
					</div>
				<img class="card-img-top" src="{{ asset('images/hall/'.$student->image) }}" width="1000" height="620" alt="">
				
				
			</div>

			</div>
			<div class="card">
				<div class="card-body">
					<h2>Message</h2>
					<p>{{$student->message}}</p>
				</div>
			
			</div>
		</div>
	</div>
	</div>

@endsection