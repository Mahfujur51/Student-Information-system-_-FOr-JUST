<!DOCTYPE html>
<html>
<head>
   <title>Basic Website</title>
   <link rel="stylesheet" href="{{asset('css/admission.css')}}">
   <style>

   table, th, td {
       border: 1px solid black;
       border-collapse: collapse;
       width: 10%;
       font-weight: normal;

   }
   td{

   }
   th, td {
       padding: 5px;
       text-align: left;
       color: black;
   }
   </style>
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
    <img src="{{asset('images/student/'.$student->images)}}" alt="সত্যায়িত ছবি ২ কপি"/>
  </section>
<section class="jony1 clear">
  <img src="{{asset('images/just.jpg')}}" alt="">
  <h2>যশোর বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়, যশোর</h2>
  <p style="text-align:center;margin-bottom:100px; font-size:20px;">যশোর।</p>
</section>

</div>
<div class="class1 clear">
  <table style="width:100%">
  <tr>
    <th > অফিস কতৃক পূরণীয়</th>
  </tr>
  <tr>
    <td>
      <p>ভর্তির নংঃ</p>
      <p>ইউনিটঃ <span style="margin-left:45px;">মেধাক্রম</span>ঃ </p>
      <p>ক্লাস রোল নংঃ </p>
      <p>শিক্ষাবর্ষঃ </p>
      <p>রেজিস্ট্রেশন নংঃ</p>
    </td>

  </tr>
</table>
</div>
</section>
</div>
<div class="template clear" style="margin-top:25px;">
  <p style="margin-top:10px;margin-left:250px; font-size:20px;font-weight:bold;">ছাত্র/ছাত্রী ভর্তি ফরম ।</p>
  <p style="margin-top:10px;margin-left:260px;font-size:20px; font-weight:bold;">শিক্ষাবর্ষঃ ২০১<span style="margin-left:40px;">-২০২</span></p>
<p>১।<span style="margin-left:25px; line-height: 40px;">পুরো নাম(স্পষ্ট অক্ষরে)ঃ</span></p>
  <p style="margin-left:80px; line-height: 40px;">(ক) (বাংলায়) ঃ</p>
  <p style="margin-left:80px; line-height: 40px;">(খ) (ইংরেজিতে) ঃ{{$student->sname}}</p>
<p>২।<span style="margin-left:25px; line-height: 40px;"> পিতার নামঃ {{$student->sfname}}<span><span style="margin-left:350px;"> মাতার নামঃ {{$student->smname}}<span></p>
<p>৩।<span style="margin-left:25px; line-height: 40px;"> ভর্তির বিভাগঃ @if            ($student->dept==1)
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
              @endif<span></p>
<p>৪।<span style="margin-left:25px; line-height: 40px;"> যে শ্রেণীতে ভর্তি হতে ইচ্ছুকঃ {{$student->program}}<span></p>
<p>৫।<span style="margin-left:25px; line-height: 40px;"> বিশ্ববিদ্যালয়য়ের সংশ্লিষ্ট হলের নামঃ{{$student->hall_name}}<span></p>
<p>৬।<span style="margin-left:25px; line-height: 40px;">আবেদনকারী যে পরীক্ষায় পাশ করেছঃ<span></p>
  <table style="width:100%">
  <tr>
    <th > </th>
    <th > পরীক্ষার নাম</th>
    <th >বোর্ড /বিশ্ববিদ্যালয়</th>
    <th > শিক্ষা প্রতিষ্ঠানের নাম</th>
    <th > পরীক্ষা পাসের সন</th>
    <th > পরীক্ষার রোল</th>
    <th > প্রাপ্ত শ্রেণী/জি. পি. এ</th>
    <th > পঠিত বিষয় সমুহ </th>

  </tr>
  <tr>
    <td>ক)</td>
    <td>এস এস সি/দাখিল/অন্যান্য </td>
    <td>{{$student->sboard_name}}</td>
    <td>{{$student->school_name}}</td>
    <td>{{$student->spass_year}}</td>
    <td>{{$student->sroll_no}}</td>
    <td>{{$student->sgpa}}</td>
    <td>{{$student->sgroup}}</td>

  </tr>
  <tr>
    <td>খ)</td>
    <td>এইচ এস সি/আলিম/অন্যান্য </td>
    <td>{{$student->hboard_name}}</td>
    <td>{{$student->hchool_name}}</td>
    <td>{{$student->hpass_year}}</td>
    <td>{{$student->hroll_no}}</td>
    <td>{{$student->hgpa}}</td>
    <td>{{$student->hgroup}}</td>

  </tr>
  <tr>
    <td>গ)</td>
    <td>স্নাতক-কলা/সামাজিক বিজ্ঞান/বিজ্ঞান/বাণিজ্য</td>
    <td>{{$student->university_name}}</td>
    <td>{{$student->institue_name}}</td>
    <td>{{$student->ugpass_year}}</td>
    <td>{{$student->ugroll_no}}</td>
    <td>{{$student->ugpa}}</td>
    <td></td>

  </tr>
</table>
</br>
<p>৭।<span style="margin-left:25px;margin-top: 100px; line-height: 40px;"> ছাত্রাবস্থায় কখনো পড়াশোনা বন্ধ থাকলে তার কারন(উক্ত কারন বহিস্কার বা বাধ্যতামূলক শিক্ষাপ্রতিষ্ঠান পরিবর্তন অথবা পরীক্ষায়</span> <span style="margin-left:44px; line-height: 40px;">অকৃতকার্য হলে সনদসহ) উল্লেখ করতে হবে। {{$student->s_gap}}</span></p>
</br>
</br>
<p>৮।<span style="margin-left:25px; line-height: 40px;"> অন্য কোন অনুষদ , বিভাগ বা শিক্ষা প্রতিষ্ঠানে ভর্তি হয়ে থাকলে /ভর্তির জন্য আবেদন করে থাকলে তার নামঃ{{$student->enroll_any}}<span></p>
</br>
</br>
<p>৯।<span style="margin-left:25px; line-height: 40px;"> আবেদনকারী সরকারী বা অন্যত চাকুরিতে নিযুক্ত রয়েছেন কি না(নিযুক্ত থাকলে অফিস প্রধানের নিকট এই মর্মে প্রমাণ পত্র দিতে হবে যে,</span><span style="margin-left:44px; line-height: 40px;"> বিশ্ববিদ্যালয়ের ভর্তি ও নিয়মিত ক্লাসে উপস্থিতির ক্ষেতে তার কোন আপওি নেই)ঃ{{$student->student_pro}}</span></p>
</br>
</br>
<p>১০।<span style="margin-left:20px; line-height: 40px;">জন্ম তারিখঃ(মাধ্যমিক স্কুল সার্টিফিকেট / দাখিল পরীক্ষার সনদ অনুযায়ী)ঃ{{$student->bday}}<span></p>
<p>১১।<span style="margin-left:20px; line-height: 40px;"> বিবাহিত / অবিবাহিতঃ @if ($student->smar_unmr==1)
  unmarried
 @else
 married
@endif</span><span style="margin-left:250px;">১2। ধর্মঃ {{$student->religion}}</span><span style="margin-left:50px;">১৩। সম্প্রদায়ঃ{{$student->community}}</span></p>
<p>১৪।<span style="margin-left:20px; line-height: 40px;">জাতিয়তাঃ{{$student->nationality}}</span></p>
<p>১৫।<span style="margin-left:20px; line-height: 4px;">স্থায়ী ঠিকানাঃ{{$student->par_address}}</span></p>
</br>
</br>
<p>১৬।<span style="margin-left:20px; line-height: 40px;"> পিতার পেশাঃ{{$student->f_profession}}</span>       </span><span style="margin-left:250px;">মাসিক আয়ঃ{{$student->f_income}}</span></p>
<p><span style="margin-left:52px; line-height: 40px;">ঠিকানাঃ{{$student->par_address}}</span></p>
  <p><span style="margin-left:544px; line-height: 40px;">ফোন নম্বরঃ{{$student->gardian_mobile}}</span></p>
<p>১৭।<span style="margin-left:20px; line-height: 40px;">পিতার অবর্তমানে আইনানুগ অভিভাবকের নামঃ{{$student->gardian_name}}</span> <span style="margin-left:150px; line-height: 40px;">পেশাঃ {{$student->f_profession}}</span>   <span></p>
<p><span style="margin-left:44px; line-height: 40px;">মাসিক আয়ঃ{{$student->gardian_income}}</span><span style="margin-left:50px; line-height: 40px;"> সম্পর্কঃ{{$student->gardian_relationship}}</span><span style="margin-left:244px; line-height: 40px;"> ঠিকানাঃ{{$student->gardian_address}}</span></p>
</br>
</br>
<p><span style="margin-left:520px; line-height: 40px;">ফোন নম্বরঃ{{$student->gardian_mobile}}<span></p>
<p>১৮।<span style="margin-left:20px; line-height: 40px;">স্থানীয় অভিভাবকের নামঃ{{$student->local_gardian_relationship}}</span> <span style="margin-left:300px; line-height: 40px;">সম্পর্কঃ</span></p>
  <p><span style="margin-left:52px; line-height: 40px;">পূর্ণ আবাসিক ঠিকানাঃ{{$student->gardian_address}}<span></p>
  </br>
  </br>
  <p><span style="margin-left:522px; line-height: 40px;">ফোন নম্বরঃ{{$student->gardian_mobile}}</span></p>
  <p style="text-align:center;padding:5px; margin-top: 30px;margin-bottom: 30px; border:1px solid black; background:black; color:white; font-weight:bold;font-size:20px;"> অঙ্গিকার নামা</p>
<p><span style="margin-left:px; line-height: 40px;">আমি এই মর্মে অঙ্গিকার করছি যে, যশোর বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ের ছাত্র/ছাত্রী থাকাকালীন সময়ে আমি বিশ্ববিদ্যালয় ও সংশ্লিষ্ট হলের আইন মেনে চলব এবং নিয়ম-শৃঙ্খলা পরিপন্থী কোন কার্যকলাপে লিপ্ত হব না। আমি স্বয়ং এই ফরম পূরণ করেছি এবং এতে বিবরন সত্য। আমি আরও প্রতিশ্রুতি দিচ্ছি যে, বিশ্ববিদ্যালয়ের ছাত্র/ছাত্রী থাকাকালীন আমার শিক্ষা ও আচরণের ব্যাপারে যথাযথ কর্তৃপক্ষের সিধান্তকে সম্মান প্রদর্শন করবো এবং আমার নিকট প্রাপ্য যাবতীয় পাওনাদি নির্ধারিত সময়ে পরিশোধ করবো।কোন প্রকার এ অঙ্গীকার ভঙ্গ করলে বা কোন ভুল তথ্য দিলে আমার প্রতি যশোর বিজ্ঞান ও প্রযুক্তি  বিশ্ববিদ্যালয় কর্তৃপক্ষ কর্তৃক গৃহীত যে কোন শাস্তিমূলক বাবস্থা মেনে নিতে বাধ্য থাকবো ।</span></p>
<p style="text-align:center;margin-top: 30px;margin-bottom: 30px;padding:5px;border:1px solid black; background:black; color:white; font-weight:bold;font-size:20px;"> অভিভাবকের অঙ্গীকার নামা</p>
<p><span style="margin-left:px; line-height: 40px;">আমি  <i>{{$student->sfname}}</i> এই মর্মে অঙ্গিকার করছি যে, আমি আমার পুত্র কন্যা পোষ্য এই বিশ্ববিদ্যালয়ের ছাত্র/ছাত্রী থাকাকালীন যাবতীয় পাওনাদি নির্ধারিত সময়ে পরিশোধ করবো। এবং উক্ত সময়ে শিক্ষার সুষ্ঠু পরিবেশ বজায় রাখতে যশোর বিজ্ঞান ও প্রযুক্তি  বিশ্ববিদ্যালয় কর্তৃপক্ষ কর্তৃক গৃহীত বাবস্থাদির প্রতি সর্বাত্মক সহযোগিতা করবো ।</span></p>
<div class="clear" style="float:left;">
  <p style="margin-top: 10px;">তারিখঃ..................</p>
</div>

<div class="clear" style="float:right;">
  <p>..........................................</p>
  <p style="margin-top: 10px;">পিতা/অভিভাবকের স্বাক্ষর </p>
</div>

  <p style="margin-top: 100px;">সমন্বয়কারীর সুপারিশ............................................ স্বাক্ষর<span style="margin-left:250px; line-height: 40px; margin-top: 100px;">প্রভোস্টের সুপারিশ.................................স্বাক্ষর</span></p>
  <p style="margin-top: 10px;">ভাইস-চান্সেলর/দায়িত্বপ্রাপ্ত কর্মকর্তার স্বাক্ষর...................................................</p>
<p style="margin-top: 10px;">ভর্তির কাজে নিয়োজিত সহকারীর স্বাক্ষর...........................................................<span style="margin-left:px; line-height: 40px; margin-top: 10px;">রেজিস্টারের স্বাক্ষর.........................................................</span></p>
<p style="text-align:center;padding:5px;border:1px solid black; background:black; color:white;margin-top: 30px;margin-bottom: 30px; font-weight:bold;font-size:20px;"> জ্ঞাতব্য বিষয়</p>
<p>১।<span style=" line-height: 40px;">ভর্তিকৃত ছাত্র-ছাত্রীদের আচরণ বিশ্ববিদ্যালয়ের রিজেন্ট বোর্ড কর্তৃক প্রণীত "Student's Code of Conduct" এর বিধি-বিধান দ্বারা নিয়ন্ত্রিত হবে ।<span></p>
  <p>২।<span style=" line-height: 40px;">আবেদনকারীকে নিজের সত্যায়িত পাসপোর্ট আকারের ২ কপি ছবি আবেদন পত্রের সাথে এস এস সি/দাখিল/সমমানের পরীক্ষার এবং এইচ এস সি/আলিম/সমমানের পরীক্ষার সত্যায়িত নম্বরপত্র,সনদপত্র ও প্রসংসাপত্র জমা দিতে হবে।  ।<span></p>
  </div>
</body>
</html>
