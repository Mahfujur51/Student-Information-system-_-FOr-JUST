@extends('Student.master')
@section('content')
<div class="content-wrapper">
	<h3 class="card card-header"><span class="text-info">{{$student->sname}}</span>  Update Profile*</h3>
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
	<div class="row mb-2">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h2 class="bg-secondary ">Input all data with very carefully</h2>
					<form class="forms-sample" method="post" action="{{ route('student.info.update',$student->id) }}" enctype="multipart/form-data">
						@csrf

						
						<div class="form-group">
							<label>Email:*</label>
							<input type="email" name="student_email" class="form-control"/>
						</div>
						<div class="form-group">
							<label>School Name:*</label>
							<input type="text" name="school_name" class="form-control"/>
						</div>
						<div class="form-group">
							<label>College Name:*</label>
							<input type="text" name="hchool_name" class="form-control"  />
						</div>
						<div class="form-group">
							<label>Parmanet Address:*</label>
							<input type="text" name="par_address" class="form-control"  />
						</div>
						<div class="form-group">
							<label>Present Address:*</label>
							<input type="text" name="pre_address" class="form-control"  />
						</div>
						<div class="form-group">
							<label>Student Mobile:*</label>
							<input type="number" class="form-control" name="mobile"  />
						</div>
						<div class="form-group">
							<label>Gardian Name:*</label>
							<input type="text" class="form-control" name="gardian_name"  />
						</div>
						<div class="form-group">
							<label>Gardian Mobile:*</label>
							<input type="number" class="form-control" name="gardian_mobile" />
						</div>
						<div class="form-group">
							<label>Gardian Address:*</label>
							<input type="text" class="form-control" name="gardian_address"  />
						</div>
						<div class="form-group">
							<label>Gardian Relationship:*</label>
							<input type="text" class="form-control" name="gardian_relationship" />
						</div>
						<div class="form-group">
							<label>Gardian Income: <small>(Give valid Information)</small>*</label>
							<input class="form-control" type="number" name="gardian_income"  />
						</div>
						<div class="form-group">
							<label>Local Gardian Name:*</label>
							<input type="text" class="form-control" name="local_gardian"  />
						</div>
						
						<div class="form-group">
							<label>Local Gardian Relationship:*</label>
							<input type="text" class="form-control" name="local_gardian_relationship"  />
						</div>
						<div class="form-group">
							<label>Religion:*</label>
							<input type="text" class="form-control" name="religion"  />
						</div>
						<div class="form-group">
							<label>Community:</label>
							<input class="form-control" name="community"/>
						</div>
						<div class="form-group">
							<label>Age:*</label>
							<input type="number" class="form-control" name="age" />
						</div>
						<div class="form-group">
							<label>Student Birthday:*</label>
							<input type="date" class="form-control" name="bday" />
						</div>
						<div class="form-group">
							<label>Student Scholorship: <small>(If student got scholorship)</small></label>
							<input type="text" class="form-control" name="scholorship" />
						</div>
						
						<div class="form-group">
							<label>Enroll Department: <small>(if student enroll any program in JUST )</small> </label>
							<input type="text" class="form-control" name="enroll_any" />
						</div>
						<div class="form-group">
							<label>Student Profession: <small>(If student have any profession )</small> </label>
							<input type="text" class="form-control" name="student_pro" />
						</div>
						<div class="form-group">
							<label for="">Married Status:</label>
							<select name="smar_unmr" class="form-control">
								<option value="1">Married</option>
								<option value="2">Unmarried</option>
							</select>
						</div>
						<div class="form-group">
							<label>Study Gap: <small>(If student have Study Gap )</small> </label>
							<input type="text" class="form-control" name="s_gap" />
						</div>
						<div class="form-group">
							<label>Father Profession:* </label>
							<input type="text" class="form-control" name="f_profession" />
						</div>
						<div class="form-group">
							<label>Father Income:*</label>
							<input type="number" class="form-control" name="f_income" />
						</div>
						<div class="form-group">
							<label>Post Office:*</label>
							<input type="text" class="form-control" name="postoffice" />
						</div>
						<div class="form-group">
							<label>Village:*</label>
							<input type="text" class="form-control" name="village" />
						</div>
						<div class="form-group">
							<label>Police Station:*</label>
							<input type="text" class="form-control" name="police_station" />
						</div>

						<div class="form-group">
							<label>Upload Profile Picture</label>
							<div class="row">
								<div class="col-12">
									<label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
									<input type="file" name="images" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Upload Signature</label>
							<div class="row">
								<div class="col-12">
									<label for="exampleInputFile21" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
									<input type="file" name="signature" class="form-control-file" id="exampleInputFile21" aria-describedby="fileHelp">
								</div>
							</div>
						</div>
						
						<div class="card-body">
							<div class="card-header bg-secondary ">
								
								<h2>Only for MSC student</h2> <span class="badge-warning">Masters Student Must be fill this form</span>
								
							</div>
							<div class="form-group">
								<label for="">Previous Univesity Name:</label>
								<input type="text" name="university_name" class="form-control">
								
							</div>
							<div class="form-group">
								<label for="">University institute Name</label>
								<input type="text" name="institue_name" class="form-control">
								
							</div>
							<div class="form-group">
								<label for="">Under Graduate Passing Year:</label>
								<input type="date" name="ugpass_year" class="form-control">
								
							</div>
							<div class="form-group">
								<label for="">Under Graduate Roll Number:</label>
								<input type="text" name="ugroll_no" class="form-control">
								
							</div>
							<div class="form-group">
								<label for="">Under Graduate Registration Number:</label>
								<input type="text" name="ureg_no" class="form-control">
								
							</div>
							<div class="form-group">
								<label for="">Subject:</label>
								<input type="text" name="subject" class="form-control">
								
							</div>
							<div class="form-group">
								<label for="">Under Graduation CGPA:</label>
								<input type="text" name="ugpa" class="form-control">
								
							</div>
						</div>
						<input type="submit" class="btn btn-success">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection