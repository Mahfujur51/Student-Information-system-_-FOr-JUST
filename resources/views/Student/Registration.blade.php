<!DOCTYPE html>
<html>
<head>
   <title>Basic Website</title>
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
  <div  >
<button style="    height: 31px;
    position: relative;
    margin-left: 120px;
    width: 60px;
    margin-top: 15px;" type="submit" onclick="window.print()">Print</button>
</div>
<div class="headersection template clear">

<section class="template clear">

<div class="logo clear">
<img src="{{asset('images/just.jpg')}}" alt=""/>
<h2>যশোর বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়, যশোর</h2>
<p>JASHORE UNIVERSITY OF SCIENCE & TECHNOLOGY,JASHORE</p>
<p>  <span style="margin-left:25px;">স্নাতক/স্নাতকোত্তর শ্রেণীর ছাত্র/ছাত্রী নিবন্ধন (Registration) ফর্ম  </span></p>
</div>
<div class="class1 clear">
  <table style="width:100%">
  <tr>
    <th>নিবন্ধন সংখ্যা </th>
    <th></th>
  </tr>
  <tr>
    <td>শিক্ষাবর্ষ</td>
    <td></td>

  </tr>
  <tr>
    <td>রোল নং</td>
    <td></td>

  </tr>
</table>
</div>
</section>
<div class="templatep ">
  <p  class="top_form">এই ফরম আবেদনকারী কত্‌ক যথাযথভাবে পূরণ করিতে হইবে এবং বিশেষ দ্রষ্টব্য বর্ণিত নিয়ম মোতাবেক প্রতিস্বাক্ষরিত হইতে হইবে। </p>
</div>
</div>
<div class="template">
<p>১।<span style="margin-left:25px; line-height: 40px;"> আবেদনকারীর নাম(স্পষ্ট অক্ষরে)<span></p>
  <p style="margin-left:80px; line-height: 40px;">(ক) (বাংলায়) ঃ</p>
  <p style="margin-left:80px; line-height: 40px;">(খ) (ইংরেজিতে) ঃ  {{$studentdatails->sname}}</p>
<p><span style="margin-left:44px; line-height: 40px;"> মাধ্যমিক /সমমানের পরীক্ষার পাসের সনদপত্র অনুযায়ী <span></p>
<p>২।<span style="margin-left:25px; line-height: 40px;"> পিতার নামঃ  {{$studentdatails->sfname}}<span></p>
<p>৩।<span style="margin-left:25px; line-height: 40px;"> মাতার নামঃ   {{$studentdatails->smname}}<span></p>
<p>৪।<span style="margin-left:25px; line-height: 40px;"> স্থায়ী ঠিকানাঃ   {{$studentdatails->pre_address}}<span></p>
<p>৫।<span style="margin-left:25px; line-height: 40px;"> বর্তমান ঠিকানাঃ  {{$studentdatails->par_address}}<span></p>
  <p><span style="margin-left:400px; line-height: 40px;"> টেলিফোন/ মোবাইল নংঃ {{$studentdatails->mobile}}<span></p>

<p>৬।<span style="margin-left:25px; line-height: 40px;">অভিভাবকের নামঃ {{$studentdatails->gardian_name}}<span></p>
<p><span style="margin-left:44px; line-height: 40px;"> মোবাইল নম্বরঃ {{$studentdatails->gardian_mobile}}<span></p>
<p><span style="margin-left:44px; line-height: 40px;"> (পিতার অবর্তমানেঃ)  {{$studentdatails->gardian_relationship}}<span></p>
<p>৭।<span style="margin-left:25px; line-height: 40px;"> ঠিকানাঃ  {{$studentdatails->pre_address}}<span></p>
<p>৮।<span style="margin-left:25px; line-height: 40px;"> জাতিয়তাঃ {{$studentdatails->nationality}}<span> <span style="margin-left:250px;"> ধর্মঃ {{$studentdatails->religion}} <span><span style="margin-left:250px;"> সম্প্রদায়ঃ {{$studentdatails->community}}<span></p>
<p>৯।<span style="margin-left:25px; line-height: 40px;"> মাধ্যমিক /সমমানের পরীক্ষার বিবরনঃ ক) প্রতিষ্ঠানের নামঃ {{$studentdatails->school_name}}<span></p>
<p><span style="margin-left:44px; line-height: 40px;">মূল সনদপত্রে উল্লেখিত জন্ম তারিখঃ {{$studentdatails->bday}}<span></p>
<p>১০।<span style="margin-left:20px; line-height: 40px;"> উচ্চ মাধ্যমিক /সমমানের পরীক্ষার বিবরনঃ ক) প্রতিষ্ঠানের নামঃ {{$studentdatails->hchool_name}}<span></p>
<p><span style="margin-left:44px; line-height: 40px;"> খ) শিক্ষাকালঃ {{$studentdatails->hpass_year}}<span></p>
<p>১১।<span style="margin-left:20px; line-height: 40px;"> স্নাতক/স্নাতকোত্তর/সমমানের পরীক্ষার বিবরনঃ ক) প্রতিষ্ঠানের নামঃ {{$studentdatails->institue_name}}<span></p>
<p><span style="margin-left:44px; line-height: 40px;"> খ) শিক্ষাকালঃ {{$studentdatails->ugpass_year}}<span><span style="margin-left:200px;">বিশ্ববিদ্যালয় / সমমানের  প্রতিষ্ঠানের নামঃ {{$studentdatails->university_name}}<span></p>
<p>১2।<span style="margin-left:20px; line-height: 40px;">পরীক্ষা পাসের বিবরনের ছকটি পূরন করিতে হইবেঃ<span></p>
  <table style="width:100%">
  <tr>
    <th><span style="font-size:16px;">পরীক্ষার নাম</span></th>
    <th><span style="font-size:16px;">শিক্ষা বোর্ড /বিশ্ববিদ্যালয়ের নাম</span></th>
    <th><span style="font-size:16px;">প্রাপ্ত গ্রেড /শ্রেণী</span></th>
    <th><span style="font-size:16px;">প্রাপ্ত মোট জি. পি. এ/নম্বর</span></th>
    <th><span style="font-size:16px;">পরীক্ষার রোল নং</span></th>
    <th><span style="font-size:16px;">পাসের সন</span></th>
  </tr>
  <tr>
    <th>S.S.C</th>
    <th>{{$studentdatails->sboard_name}}</th>
    <th></th>
    <th>{{$studentdatails->sgpa}}</th>
    <th>{{$studentdatails->sroll_no}}</th>
    <th>{{$studentdatails->spass_year}}</th>

  </tr>
  <tr>
   <th>H.S.C</th>
    <th>{{$studentdatails->hboard_name}}</th>
    <th></th>
    <th>{{$studentdatails->hgpa}}</th>
    <th>{{$studentdatails->hroll_no}}</th>
    <th>{{$studentdatails->hpass_year}}</th>

  </tr>
  <tr>
    <th>Under Graduation</th>
    <th>{{$studentdatails->university_name}}</th>
    <th></th>
    <th>{{$studentdatails->ugpa}}</th>
    <th>{{$studentdatails->ugroll_no}} </th>
    <th>{{$studentdatails->ugpass_year}}</th>
  </tr>
  <tr>
    <th>Graduation/Masters </th>
    <th></th>
    <th> </th>
    <th></th>
    <th> </th>
<th></th>
  </tr>
  </table>
<p>১৩।<span style="margin-left:20px; line-height: 40px;">আবেদনকারী কোন বোর্ড, প্রতিষ্ঠান বা বিশ্ববিদ্যালয় হইতে বৃত্তি, পদক বা পুরস্কার পাইয়া থাকিলে<span></p>
<p><span style="margin-left:44px; line-height: 40px;">তাহার বিবরনঃ  {{$studentdatails->scholorship}}<span></p>
<p>১৪।<span style="margin-left:20px; line-height: 40px;">ভর্তির বিবরনঃ<span><span style="margin-left:20px;">ক)<span style="margin-left:5px;">যে<span> শ্রেণীতে ভর্তি হইয়াছেনঃ {{$studentdatails->program}}<span></p>
<p><span style="margin-left:160px; line-height: 40px;">খ)<span style="margin-left:5px;">বিভাগেরঃ<span> নামঃ{{$studentdatails->dept}}<span></p>
<span style="margin-left:160px; line-height: 40px;">গ)<span style="margin-left:5px;">ভর্তিরঃ<span> তারিখঃ {{$studentdatails->admissin_date}}<span></p>
<p>১৫।<span style="margin-left:20px; line-height: 40px;">বিশ্ববিদ্যালয়ে যে হলে ভর্তি বা সংযুক্ত হইতে আগ্রহী সে হলের নামঃ{{$studentdatails->hall_name}}<span></p>
<p>১৬।<span style="margin-left:20px; line-height: 40px;">এই বিশ্ববিদ্যালয়ে পূর্বে তাহার নাম নিবন্ধিত হইয়াছিল কি? {{$studentdatails->enroll_any}}<span></p>
  <p><span style="margin-left:44px; line-height: 40px;">হইয়া থাকিলে নিবন্ধন সংখ্যাঃ<span style="margin-left:300px;">শিক্ষাবর্ষঃ<span> <span></p>
<br>
<br>
<p><span style="; line-height: 40px;">অফিসের সীলসহ চেয়ারমানের স্বাক্ষর ও তারিখ <span></p>
  <br>
  <br>
<p><span style="margin-left:20px; line-height: 40px;float:right;">আবেদনকারীর স্বাক্ষর  <span></p>
<p><span style="; line-height: 40px;">তারিখঃ <span></p>
  <br>
  <hr>
<p><span style="margin-left:200px;line-height: 40px;">বিঃ দ্রঃ এই ফর্ম বিভাগীয় চেয়ারম্যান কতৃক প্রতিস্বাক্ষরিত হইতে হবে । </span></p>

</div>
<br>
<br>
<br>
  <div class="headersection template clear">
  <section class="template clear">
  <div class="logo clear">
  <img src="{{asset('images/just.jpg')}}" alt=""/>
  <h2>যশোর বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়, যশোর</h2>
  <p>JASHORE UNIVERSITY OF SCIENCE & TECHNOLOGY,JASHORE</p>
  <p>  <span style="margin-left:25px;">স্নাতক/স্নাতকোত্তর শ্রেণীর ছাত্র/ছাত্রী নিবন্ধন (Registration) ফর্ম  </span></p>
  </div>
  <div class="class1 clear">
    <table style="width:100%">
    <tr>
      <th>নিবন্ধন সংখ্যা </th>
      <th></th>
    </tr>
    <tr>
      <td>শিক্ষাবর্ষ</td>
      <td></td>

    </tr>
    <tr>
      <td>রোল নং</td>
      <td></td>

    </tr>
  </table>
  </div>
  </section>
  </div>
  <div class="template">
    <p>১।<span style="margin-left:25px; line-height: 40px;"> ছাত্র/ছাত্রীর নামঃ{{$studentdatails->sname}}<span></p>
    <p>২।<span style="margin-left:25px; line-height: 40px;"> পিতার নামঃ {{$studentdatails->sfname}}}<span></p>
    <p>৩।<span style="margin-left:25px; line-height: 40px;"> মাতার নামঃ{{$studentdatails->smname}}<span></p>
    <p>৪।<span style="margin-left:25px; line-height: 40px;"> বিভাগের নামঃ {{$studentdatails->dept}}<span> <span style="margin-left:250px;"> হলের নামঃ {{$studentdatails->hall_name}}<span></p>
    <p><span style="margin-left:44px; line-height: 40px;"> তাহাকে এই বিশ্ববিদ্যালয়ের ছাত্র/ছাত্রী হিসাবে নিবন্ধন করা হইলঃ <span></p>
    <br>
    <br>
    <br>
    <div class="class2">
        <p style="font-weight:bold;"><bold>যশোর বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়<bold></p>
        <p><span style="margin-left:80px;margin-bottom:5px;">প্রশাসন ভবন ।</span></p>
        <p>তারিখঃ</p>
    </div>
    <div class="class3">
<hr>
<p>রেজিস্টার </p>
    </div>
  </div>

</body>
</html>
