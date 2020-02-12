@extends('multiauth::layouts.app')
@section('content')
<div class="container-fluid page-body-wrapper">
  <div class="row row-offcanvas row-offcanvas-right">
    <!-- partial:partials/_sidebar.html -->
    @include('FemaleHall.inc.sidebar')
    <!-- partial -->
   <div class="content-wrapper">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="text-center">Personal Information</h3>
            </div>
            <div class="text-center">
              <img class="card-img-top" src="{{asset('images/student/'.$students->images)}}" style="max-height: 250px; max-width: 250px" alt="Student Image">
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>Student Name:</td>
                  <td>{{$students->sname}}</td>
                </tr>
                <tr>
                  <td>Gender:</td>
                  <td>{{$students->gender}}</td>
                </tr>
                <tr>
                  <td>Age:</td>
                  <td>{{$students->age}}</td>
                </tr>
                <tr>
                  <td>Birthday:</td>
                  <td>{{$students->bday}}</td>
                </tr>
                <tr>
                  <td>Father Name:</td>
                  <td>{{$students->sfname}}</td>
                </tr>
                <tr>
                  <td>Mother Name:</td>
                  <td>{{$students->smname}}</td>
                </tr>
                <tr>
                  <td>Religion:</td>
                  <td>{{$students->religion}}</td>
                </tr>
                <tr>
                  <td>Mobile Number:</td>
                  <td>{{$students->mobile}}</td>
                </tr>
                <tr>
                  <td>Village:</td>
                  <td>{{$students->village}}</td>
                </tr>
                <tr>
                  <td>Police Station:</td>
                  <td>{{$students->police_station}}</td>
                </tr>
                <tr>
                  <td>Post Office:</td>
                  <td>{{$students->postoffice}}</td>
                </tr>
                <tr>
                  <td>Student Parmanent Adress:</td>
                  <td>{{$students->par_address}}</td>
                </tr>
                <tr>
                  <td>Student Present Adress:</td>
                  <td>{{$students->pre_address}}</td>
                </tr>
                <tr>
                  <td>Community:</td>
                  <td>{{$students->community}}</td>
                </tr>
                <tr>
                  <td>Nationality:</td>
                  <td>{{$students->nationality}}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="text-center">SSC Information</h3>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>Result :</td>
                  <td>{{$students->sgpa}}</td>
                </tr>
                <tr>
                  <td>School Name :</td>
                  <td>{{$students->school_name}}</td>
                </tr>
                <tr>
                  <td>Board Name :</td>
                  <td>{{$students->sboard_name}}</td>
                </tr>
                <tr>
                  <td>Roll Number :</td>
                  <td>{{$students->sroll_no}}</td>
                </tr>
                <tr>
                  <td>Registration Number :</td>
                  <td>{{$students->sreg_no}}</td>
                </tr>
                <tr>
                  <td>Passing Year</td>
                  <td>{{$students->spass_year}}</td>
                </tr>
                <tr>
                  <td>Group :</td>
                  <td>{{$students->sgroup}}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="text-center">HSC Information</h3>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>Result :</td>
                  <td>{{$students->hgpa}}</td>
                </tr>
                <tr>
                  <td>College Name :</td>
                  <td>{{$students->hchool_name}}</td>
                </tr>
                <tr>
                  <td>Board Name :</td>
                  <td>{{$students->hboard_name}}</td>
                </tr>
                <tr>
                  <td>Roll Number :</td>
                  <td>{{$students->hroll_no}}</td>
                </tr>
                <tr>
                  <td>Registration Number :</td>
                  <td>{{$students->hreg_no}}</td>
                </tr>
                <tr>
                  <td>Passing Year</td>
                  <td>{{$students->hpass_year}}</td>
                </tr>
                <tr>
                  <td>Group :</td>
                  <td>{{$students->hgroup}}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="text-center">Universtiy information</h3>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>Department:</td>
                  <td>{{$students->dept}}</td>
                </tr>
                <tr>
                  <td>Hall Name :</td>
                  <td>
                     @if ($students->hall_name=="SMR")
                      Shahid Moshiur Rahman Hall
                    @endif
                  </td>
                </tr>
                <tr>
                  <td>Hall Room Number :</td>
                  <td>{{$students->room}}</td>
                </tr>
                <tr>
                  <td>Roll Number:</td>
                  <td>{{$students->roll_number}}</td>
                </tr>
                <tr>
                  <td>Registration Number :</td>
                  <td>{{$students->reg_number}}</td>
                </tr>
                <tr>
                  <td> Email:</td>
                  <td>{{$students->student_email}}</td>
                </tr>
                <tr>
                  <td>Session:</td>
                  <td>{{$students->session}}</td>
                </tr>


              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="text-center">Gardian Information</h3>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>Gardian Name :</td>
                  <td>{{$students->gardian_name}}</td>
                </tr>
                <tr>
                  <td>Gardian Mobile Number :</td>
                  <td>{{$students->gardian_mobile}}</td>
                </tr>
                <tr>
                  <td>Gardian Address:</td>
                  <td>{{$students->gardian_address}}</td>
                </tr>
                <tr>
                  <td>Gardian Relationship :</td>
                  <td>{{$students->gardian_relationship}}</td>
                </tr>
                <tr>
                  <td>Gardian Income:</td>
                  <td>{{$students->gardian_income}}</td>
                </tr>
                <tr>
                  <td>Local Gardian Name:</td>
                  <td>{{$students->local_gardian}}</td>
                </tr>
                <tr>
                  <td>Local Gardian Relationship:</td>
                  <td>{{$students->local_gardian_relationship}}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="text-center">Others Information</h3>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>If Student Enroll any Course In this University:</td>
                  <td>{{$students->enroll_any}}</td>
                </tr>
                <tr>
                  <td>Student Profession   :</td>
                  <td>{{$students->student_pro}}</td>
                </tr>
                <tr>
                  <td>Marrid Status:</td>
                  <td>
                    @if ($students->smar_unmr==1)
                      Married
                      @else
                      Unmarried
                    @endif
                  </td>
                </tr>
                <tr>
                  <td>Study Gap of Student :</td>
                  <td>{{$students->s_gap}}</td>
                </tr>

                <tr>
                  <td>Student Father Profession:</td>
                  <td>{{$students->f_profession}}</td>
                </tr>
                <tr>
                  <td>Father Income :</td>
                  <td>{{$students->f_income}}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="card">
            <div class="card-header">
              <h3 class="text-center">Uder Graduate University Information</h3>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>University Names:</td>
                  <td>{{$students->university_name}}</td>
                </tr>
                <tr>
                  <td>Instition Name:</td>
                  <td>{{$students->institue_name}}</td>
                </tr>
                <tr>
                  <td>Under Graduation Passing Year:</td>
                  <td>{{$students->ugpass_year}}</td>
                </tr>
                <tr>
                  <td>Under Graduation Roll :</td>
                  <td>{{$students->ugroll_no}}</td>
                </tr>
                <tr>
                  <td> Under Graduation Registation Number:</td>
                  <td>{{$students->ureg_no}}</td>
                </tr>
                <tr>
                  <td>Under Graduation Subject:</td>
                  <td>{{$students->subject}}</td>
                </tr>
                 <tr>
                  <td>Under Graduation Subject:</td>
                  <td>{{$students->ugpa}}</td>
                </tr>

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <div class="card card-body">
      <div class="card-header text-center">
        <p>Mahfujur@2019</p>
      </div>
    </div>
    <!-- partial -->
  </div>
  <!-- row-offcanvas ends -->
</div>
@endsection
