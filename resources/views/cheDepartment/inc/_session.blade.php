@if (Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<p>{{Session::get('success')}}</p>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
