@extends('Student.master')
@section('content')
<div class="content-wrapper">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="text-center">Personal Information</h3>
            </div>
            <div class="text-center">
              <img class="card-img-top" src="{{asset('images/student/'.$student->images)}}" style="max-height: 250px; max-width: 250px" alt="Student Image">
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>Student Name:</td>
                  <td>{{$student->sname}}</td>
                </tr>
                <tr>
                  <td>Gender:</td>
                  <td>{{$student->gender}}</td>
                </tr>
                <tr>
                  <td>Age:</td>
                  <td>{{$student->age}}</td>
                </tr>
                <tr>
                  <td>Birthday:</td>
                  <td>{{$student->bday}}</td>
                </tr>
                <tr>
                  <td>Father Name:</td>
                  <td>{{$student->sfname}}</td>
                </tr>
                <tr>
                  <td>Mother Name:</td>
                  <td>{{$student->smname}}</td>
                </tr>
                <tr>
                  <td>Religion:</td>
                  <td>{{$student->religion}}</td>
                </tr>
                <tr>
                  <td>Mobile Number:</td>
                  <td>{{$student->mobile}}</td>
                </tr>
                <tr>
                  <td>Village:</td>
                  <td>{{$student->village}}</td>
                </tr>
                <tr>
                  <td>Police Station:</td>
                  <td>{{$student->police_station}}</td>
                </tr>
                <tr>
                  <td>Post Office:</td>
                  <td>{{$student->postoffice}}</td>
                </tr>
                <tr>
                  <td>Student Parmanent Adress:</td>
                  <td>{{$student->par_address}}</td>
                </tr>
                <tr>
                  <td>Student Present Adress:</td>
                  <td>{{$student->pre_address}}</td>
                </tr>
                <tr>
                  <td>Community:</td>
                  <td>{{$student->community}}</td>
                </tr>
                <tr>
                  <td>Nationality:</td>
                  <td>{{$student->nationality}}</td>
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
                  <td>{{$student->sgpa}}</td>
                </tr>
                <tr>
                  <td>School Name :</td>
                  <td>{{$student->school_name}}</td>
                </tr>
                <tr>
                  <td>Board Name :</td>
                  <td>{{$student->sboard_name}}</td>
                </tr>
                <tr>
                  <td>Roll Number :</td>
                  <td>{{$student->sroll_no}}</td>
                </tr>
                <tr>
                  <td>Registration Number :</td>
                  <td>{{$student->sreg_no}}</td>
                </tr>
                <tr>
                  <td>Passing Year</td>
                  <td>{{$student->spass_year}}</td>
                </tr>
                <tr>
                  <td>Group :</td>
                  <td>{{$student->sgroup}}</td>
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
                  <td>{{$student->hgpa}}</td>
                </tr>
                <tr>
                  <td>College Name :</td>
                  <td>{{$student->hchool_name}}</td>
                </tr>
                <tr>
                  <td>Board Name :</td>
                  <td>{{$student->hboard_name}}</td>
                </tr>
                <tr>
                  <td>Roll Number :</td>
                  <td>{{$student->hroll_no}}</td>
                </tr>
                <tr>
                  <td>Registration Number :</td>
                  <td>{{$student->hreg_no}}</td>
                </tr>
                <tr>
                  <td>Passing Year</td>
                  <td>{{$student->hpass_year}}</td>
                </tr>
                <tr>
                  <td>Group :</td>
                  <td>{{$student->hgroup}}</td>
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
                  <td>
                    

                     @if ($student->dept==1)
              Computer Science & Engineering
              @elseif($student->dept==2)
              Environment Science & Technology
              @elseif($student->dept==3)
              Micro Bilogy
              @elseif($student->dept==4)
              Fisharies And Merine BioScience
              @elseif($student->dept==5)
              Chemical Engineering
              @elseif($student->dept==6)
              Genetics Engineering & Bio Techology
              @elseif($student->dept==7)
              Industrial and Production Engineering
              @elseif($student->dept==8)
              Patrolium & Mining Engineering
              @elseif($student->dept==9)
              Nutritaion and Food Techology
              @elseif($student->dept==10)
              Pharmacy
              @elseif($student->dept==11)
              Electrical & Electronics Engineering
              @elseif($student->dept==12)
              Physical Education and Sport Science
              @elseif($student->dept==13)
              Physics
              @elseif($student->dept==14)
              Chemistry
              @elseif($student->dept==15)
              MathaMethics
              @elseif($student->dept==16)
              English
              @elseif($student->dept==17)
              AgroPruduct & Processing Engineering
              @elseif($student->dept==18)
              Accounting & Information System
              @elseif($student->dept==19)
              Biomedical Engineering
              @elseif($student->dept==20)
              Finance & Banking
              @elseif($student->dept==21)
              Management
              @elseif($student->dept==22)
              Textile Engineering
              @elseif($student->dept==23)
              Marketing
              @elseif($student->dept==24)
              Physiotherapy and rehabition
              @elseif($student->dept==25)
              Cliemet & Disester Management
              @elseif($student->dept==26)
              Nurshing & Health Science
              @endif
                  </td>
                </tr>
                <tr>
                  <td>Hall Name :</td>
                  <td>{{$student->hall_name}}</td>
                </tr>
                <tr>
                  <td>Hall Room Number :</td>
                  <td>{{$student->room}}</td>
                </tr>
                <tr>
                  <td>Roll Number:</td>
                  <td>{{$student->roll_number}}</td>
                </tr>
                <tr>
                  <td>Registration Number :</td>
                  <td>{{$student->reg_number}}</td>
                </tr>
                <tr>
                  <td> Email:</td>
                  <td>{{$student->student_email}}</td>
                </tr>
                <tr>
                  <td>Session:</td>
                  <td>{{$student->session}}</td>
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
                  <td>{{$student->gardian_name}}</td>
                </tr>
                <tr>
                  <td>Gardian Mobile Number :</td>
                  <td>{{$student->gardian_mobile}}</td>
                </tr>
                <tr>
                  <td>Gardian Address:</td>
                  <td>{{$student->gardian_address}}</td>
                </tr>
                <tr>
                  <td>Gardian Relationship :</td>
                  <td>{{$student->gardian_relationship}}</td>
                </tr>
                <tr>
                  <td>Gardian Income:</td>
                  <td>{{$student->gardian_income}}</td>
                </tr>
                <tr>
                  <td>Local Gardian Name:</td>
                  <td>{{$student->local_gardian}}</td>
                </tr>
                <tr>
                  <td>Local Gardian Relationship:</td>
                  <td>{{$student->local_gardian_relationship}}</td>
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
                  <td>{{$student->enroll_any}}</td>
                </tr>
                <tr>
                  <td>Student Profession   :</td>
                  <td>{{$student->student_pro}}</td>
                </tr>
                <tr>
                  <td>Marrid Status:</td>
                  <td>
                    @if ($student->smar_unmr==1)
                      Married
                      @else
                      Unmarried
                    @endif
                  </td>
                </tr>
                <tr>
                  <td>Study Gap of Student :</td>
                  <td>{{$student->s_gap}}</td>
                </tr>
                
                <tr>
                  <td>Student Father Profession:</td>
                  <td>{{$student->f_profession}}</td>
                </tr>
                <tr>
                  <td>Father Income :</td>
                  <td>{{$student->f_income}}</td>
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
                  <td>{{$student->university_name}}</td>
                </tr>
                <tr>
                  <td>Instition Name:</td>
                  <td>{{$student->institue_name}}</td>
                </tr>
                <tr>
                  <td>Under Graduation Passing Year:</td>
                  <td>{{$student->ugpass_year}}</td>
                </tr>
                <tr>
                  <td>Under Graduation Roll :</td>
                  <td>{{$student->ugroll_no}}</td>
                </tr>
                <tr>
                  <td> Under Graduation Registation Number:</td>
                  <td>{{$student->ureg_no}}</td>
                </tr>
                <tr>
                  <td>Under Graduation Subject:</td>
                  <td>{{$student->subject}}</td>
                </tr>
                 <tr>
                  <td>Under Graduation Subject:</td>
                  <td>{{$student->ugpa}}</td>
                </tr>
               
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection