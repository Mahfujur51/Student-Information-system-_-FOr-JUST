<!DOCTYPE html>
<html>
<head>
 <title>Basic Website</title>
 <link rel="stylesheet" href="{{asset('css/idcard.css')}}">
</head>
<body>
   <button style="    height: 31px;
   position: relative;
   margin-left: 120px;
   width: 60px;
   margin-top: 15px;" type="submit" onclick="window.print()">Print</button>
   <div class="headersection template clear">
    <section class="template clear">
        <div class="logo clear">
          <section class="jony clear">
            <img src="{{asset('images/just.jpg')}}" alt=""/>
        </section>
        <section class="jony1 clear"  style="margin-left:-100px;">
          <h2 style="line-height:0px; margin-bottom:-20px; margin-left:10px;">Shaheed Mashiur Rahman Hall</h2>
          <h2 style="font-weight: normal; font-size: 15px; margin-bottom:-30px;">Jashore University of Sciencs and Technology</h2>
          <h2 style="font-weight: normal; font-size: 12px; text-align:center;">Jashore-7408,Bangladesh</h2>
          <h2 style="font-weight: normal; font-size: 15px; text-align:center; margin-top:-40px;color:red;">Student's Identity Card</h2>
          <h2 style="font-weight: normal; font-size: 15px; text-align:center; margin-top:-35px;color:red; ">Non Residential</h2>
      </section>

  </div>
</section>



</div>
<div class="clear template" style="margin-top: -25px;">
    <section class="clear" style="float:left; background-color:; width:400px; line-height:30px;">
        <table>
            <tr>
                <td>
                    <h2>Name:</h2>
                </td>
                <td>
                    <h2>{{$student->sname}}</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Department:</h2>
                </td>
                <td>
                    <h2>
                        @if($student->dept==1)
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
                    </h2>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Session:</h2>
                </td>
                <td>
                    <h2>2015-2016</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Roll:</h2>
                </td>
                <td>
                    <h2>{{$student->roll_number}}</h2>
                </td>
            </tr>
        </table>
    </section>
    <section class="clear picture" style="float:right;background-color:; width:190px; margin-right: 500px">
        <img src="{{asset('images/just.jpg')}}" alt=""/>
    </section>
</div>
<div class="clear template">
    <section class="clear" style="float:left; background-color:; width:300px; line-height:30px; margin-top: 50px;">
     Signature of Students
 </section>
 <section class="clear picture" style="float:right;background-color:; width:190px; margin-right: 460px; margin-top: 50px;">
    Signature of Provost
</section>
</div>
<div style="page-break-before: always;">

</div>
<div class="clear template" styele="font-size:20px;">
    <section class="clear" style="float:left; background-color:; width:300px; line-height:20px;">
        <table styele="font-size:10px;">
            <tr styele="font-size:10px;">
                <td>
                    <p>Serial No:</p>
                </td>
                <td>
                    <p>{{$student->id}}</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Contact:</p>
                </td>
                <td>
                    <p>{{$student->mobile}}</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Date of issue:</p>
                </td>
                <td>
                    <p>2015-2016</p>
                </td>
            </tr>
            <tr styele="font-size:10px;">
                <td>
                    <p style="margin-top: 40px;"><u>Permanent Address:</u></p>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Village:</p>
                </td>
                <td>
                    <p>{{$student->village}}</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Police Station:</p>
                </td>
                <td>
                    <p>{{$student->police_station}}</p>
                </td>
            </tr>
        </table>
    </section>
    <section class="clear picture" style="float:right;background-color:; width:190px; margin-right: 460px";line-height:20px;>
      <table>
        <tr>
            <td>
                <p>Serial No:</p>
            </td>
            <td>
                <p>{{$student->id}}</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Contact:</p>
            </td>
            <td>
                <p>{{$student->mobile}}</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Date of issue:</p>
            </td>
            <td>
                <p>2015-2016</p>
            </td>
        </tr>
        <tr styele="font-size:10px;">
            <td>
                <p style="margin-top: 20px;"></p>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>
                <p>Post:</p>
            </td>
            <td>
                <p>{{$student->postoffice}}</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>District:</p>
            </td>
            <td>
                <p>Meherpur</p>
            </td>
        </tr>
    </table>
</section>
</div>
<div class="clear template">
 <section style="width:500px;">
    <h2 style="text-align:center; margin-top:10px;">Instructions:</h2>
    <p>1.This ID card is non transferable,you have to surrender this id card at the time of takinf release from this University</p>
    <p>2.File GD to local police station if lost.</p>
    <p>3.If found,please submit it to local police station or post to <span style="font-weight:bold;">Provost,Shaheed Mashiur Rahman Hall,Jashore University of Science and Technology,Jashore-7408.</span></p>
</section>
</div>


</body>
</html>
