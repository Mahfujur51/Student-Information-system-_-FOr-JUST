@extends('Student.master')
@section('content')
<div class="content-wrapper">
	{{$student->sname}}
	@if (Session::has('success'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<i class="material-icons">close</i>
		</button>
		<span>{{Session::get('success')}}</span>
	</div>
		
	@endif
	<div class="row">
		<div class="card">
			<table>
				<tr>
					<th>Payment For Hall Applictation</th>
					<th>
						@if ($student->payment==0)
							<a href="{{ route('student.payment.hall',$student->id) }}" class=" btn btn-success">Click pay for here</a>
						@elseif($student->payment==1)
						 <button class="btn btn-info">Painding</button>
						 @elseif($student->payment==2)
						 <button class="btn btn-success">Paid</button>
						@endif
						
					</th>
				</tr>
			</table>

			
		</div>
		
	</div>
</div>
@endsection