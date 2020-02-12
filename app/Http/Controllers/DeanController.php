<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administration;
use App\Dean;
use Image;
class DeanController extends Controller
{
    public function register(){
    	$student=Administration::where('verify',1)->where('faculty',1)->get();
    	return view('Dean.pages.student',compact('student'));
    }
    public function verify($id){
    	$student=Administration::find($id);
    	$student->verify=2;
    	$student->save();
    	session()->flash('success','Student Verified Successfully !!');
      return back();

  }
  public function verifeduser(){
     $student=Administration::where('verify',2)->where('faculty',1)->get();
     return view('Dean.pages.verifiedstudent',compact('student'));
 }
 public function unverify($id){
     $student=Administration::find($id);
     $student->verify=1;
     $student->save();
     session()->flash('success','Student UnVerified Successfully !!');
     return back();

 }
 public function upload(){
     return view('Dean.pages.upload');
 }
 public function uploadnotice(Request $request){
  $request->validate([

    'name' => 'required',
    'message' => 'required',]);

  $student=new Dean;
  $student->message=$request->message;
  $student->name=$request->name;
  $student->engineer=$request->engineer;
  $student->faculty=1;
  if (($request->image) > 0) {
			//insert image
    $image = $request->file('image');
    $img = time() . '.' . $image->getClientOriginalExtension();
    $location = public_path('images/dean/'. $img);
    Image::make($image)->save($location);
    $student->image = $img;
}
$student->save();
session()->flash('success','Upload Notice Successfully!!');
return back();
}
public function view(){
 $student = Dean::where('faculty',1)->take(50)->get();
 return view('Dean.pages.notice',compact('student'));



}
public function deannotice($id){
 $student=Dean::find($id);
 return view('Dean.pages.uploadednotice',compact('student'));
}
public function studentprofile($id){
 $students=Administration::find($id);
 return view('Dean.pages.StudentProfile',compact('students'));
}
public function deletenotice($id){
 $student=Dean::find($id);
 $student->delete();
 session()->flash('success','Notice Deleted Successfully!!');
 return back();

}
public function updatenotice($id){
 $student=Dean::find($id);
 return view('Dean.pages.update',compact('student'));

}
public function updatednotice(Request $request,$id){
 $student=Dean::find($id);
 $student->name=$request->name;
 $student->message=$request->message;
 if (($request->image) > 0) {
			//insert image
    $image = $request->file('image');
    $img = time() . '.' . $image->getClientOriginalExtension();
    $location = public_path('images/dean/'. $img);
    Image::make($image)->save($location);
    $student->image = $img;
}
$student->update();
session()->flash('success',' Notice Updated Successfully!!');
return back();

}


    //=====================================Biology Faculty Dean//
public function bioregister(){
    $student=Administration::where('verify',1)->where('faculty',2)->get();
    return view('BioDean.pages.student',compact('student'));
}
public function biostudentprofile($id){
    $students=Administration::find($id);
    return view('BioDean.pages.StudentProfile',compact('students'));
}
public function bioverify($id){
    $student=Administration::find($id);
    $student->verify=2;
    $student->save();
    session()->flash('success','Student Verified Successfully !!');
    return back();

}
public function bioverifeduser(){
    $student=Administration::where('verify',2)->where('faculty',2)->get();
    return view('BioDean.pages.verifiedstudent',compact('student'));
}
public function biounverify($id){
    $student=Administration::find($id);
    $student->verify=1;
    $student->save();
    session()->flash('success','Student UnVerified Successfully !!');
    return back();

}
public function bioupload(){
    return view('BioDean.pages.upload');
}
public function biouploadnotice(Request $request){
   $request->validate([

    'name' => 'required',
    'message' => 'required',
]);

   $student=new Dean;
   $student->message=$request->message;
   $student->name=$request->name;
   $student->engineer=$request->engineer;
   $student->faculty=2;
   if (($request->image) > 0) {
            //insert image
    $image = $request->file('image');
    $img = time() . '.' . $image->getClientOriginalExtension();
    $location = public_path('images/dean/'. $img);
    Image::make($image)->save($location);
    $student->image = $img;
}
$student->save();
session()->flash('success','Upload Notice Successfully!!');
return back();
}
public function bioview(){
    $student = Dean::where('faculty',2)->get();
    return view('BioDean.pages.notice',compact('student'));



}
public function biodeannotice($id){
    $student=Dean::find($id);
    return view('BioDean.pages.uploadednotice',compact('student'));
}
public function biodeletenotice($id){
    $student=Dean::find($id);
    $student->delete();
    session()->flash('success','Notice Deleted Successfully!!');
    return back();

}
public function bioupdatenotice($id){
    $student=Dean::find($id);
    return view('BioDean.pages.update',compact('student'));

}
public function bioupdatednotice(Request $request,$id){
    $student=Dean::find($id);
    $student->name=$request->name;
    $student->message=$request->message;
    if (($request->image) > 0) {
            //insert image
        $image = $request->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/dean/'. $img);
        Image::make($image)->save($location);
        $student->image = $img;
    }
    $student->update();
    session()->flash('success',' Notice Updated Successfully!!');
    return back();

}
//========================Applied Science

public function appregister(){
    $student=Administration::where('verify',1)->where('faculty',3)->get();
    return view('AppDean.pages.student',compact('student'));
}
public function appstudentprofile($id){
    $students=Administration::find($id);
    return view('AppDean.pages.StudentProfile',compact('students'));
}
public function appverify($id){
    $student=Administration::find($id);
    $student->verify=2;
    $student->save();
    session()->flash('success','Student Verified Successfully !!');
    return back();

}
public function appverifeduser(){
    $student=Administration::where('verify',2)->where('faculty',3)->get();
    return view('AppDean.pages.verifiedstudent',compact('student'));
}
public function appunverify($id){
    $student=Administration::find($id);
    $student->verify=1;
    $student->save();
    session()->flash('success','Student UnVerified Successfully !!');
    return back();

}
public function appupload(){
    return view('AppDean.pages.upload');
}
public function appuploadnotice(Request $request){

    $request->validate([

        'name' => 'required',
        'message' => 'required',
    ]);
    $student=new Dean;
    $student->message=$request->message;
    $student->name=$request->name;
    $student->engineer=$request->engineer;
    $student->faculty=3;
    if (($request->image) > 0) {
            //insert image
        $image = $request->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/dean/'. $img);
        Image::make($image)->save($location);
        $student->image = $img;
    }
    $student->save();
    session()->flash('success','Upload Notice Successfully!!');
    return back();
}
public function appview(){
    $student = Dean::where('faculty',3)->get();
    return view('AppDean.pages.notice',compact('student'));



}
public function appdeannotice($id){
    $student=Dean::find($id);
    return view('AppDean.pages.uploadednotice',compact('student'));
}
public function appdeletenotice($id){
    $student=Dean::find($id);
    $student->delete();
    session()->flash('success','Notice Deleted Successfully!!');
    return back();

}
public function appupdatenotice($id){
    $student=Dean::find($id);
    return view('AppDean.pages.update',compact('student'));

}
public function appupdatednotice(Request $request,$id){
    $student=Dean::find($id);
    $student->name=$request->name;
    $student->message=$request->message;
    if (($request->image) > 0) {
            //insert image
        $image = $request->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/dean/'. $img);
        Image::make($image)->save($location);
        $student->image = $img;
    }
    $student->update();
    session()->flash('success',' Notice Updated Successfully!!');
    return back();

}
    //=================================arts & science===============//

public function artsregister(){
    $student=Administration::where('verify',1)->where('faculty',4)->get();
    return view('ArtsDean.pages.student',compact('student'));
}
public function artsstudentprofile($id){
    $students=Administration::find($id);
    return view('ArtsDean.pages.StudentProfile',compact('students'));
}
public function artsverify($id){
    $student=Administration::find($id);
    $student->verify=2;
    $student->save();
    session()->flash('success','Student Verified Successfully !!');
    return back();

}
public function artsverifeduser(){
    $student=Administration::where('verify',2)->where('faculty',4)->get();
    return view('ArtsDean.pages.verifiedstudent',compact('student'));
}
public function artsunverify($id){
    $student=Administration::find($id);
    $student->verify=1;
    $student->save();
    session()->flash('success','Student UnVerified Successfully !!');
    return back();

}
public function artsupload(){
    return view('ArtsDean.pages.upload');
}
public function artsuploadnotice(Request $request){
    $request->validate([

        'name' => 'required',
        'message' => 'required',
    ]);
    $student=new Dean;
    $student->message=$request->message;
    $student->name=$request->name;
    $student->engineer=$request->engineer;
    $student->faculty=4;

    if (($request->image) > 0) {
            //insert image
        $image = $request->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/dean/'. $img);
        Image::make($image)->save($location);
        $student->image = $img;
    }
    $student->save();
    session()->flash('success','Upload Notice Successfully!!');
    return back();
}
public function artsview(){
    $student = Dean::where('faculty',4)->get();
    return view('ArtsDean.pages.notice',compact('student'));



}
public function artsdeannotice($id){
    $student=Dean::find($id);
    return view('ArtsDean.pages.uploadednotice',compact('student'));
}
public function artsdeletenotice($id){
    $student=Dean::find($id);
    $student->delete();
    session()->flash('success','Notice Deleted Successfully!!');
    return back();

}
public function artsupdatenotice($id){
    $student=Dean::find($id);
    return view('ArtsDean.pages.update',compact('student'));

}
public function artsupdatednotice(Request $request,$id){
    $student=Dean::find($id);
    $student->name=$request->name;
    $student->message=$request->message;
    if (($request->image) > 0) {
            //insert image
        $image = $request->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/dean/'. $img);
        Image::make($image)->save($location);
        $student->image = $img;
    }
    $student->update();
    session()->flash('success',' Notice Updated Successfully!!');
    return back();

}
       //=================================Science Faulty===============//

public function sciregister(){
    $student=Administration::where('verify',1)->where('faculty',5)->get();
    return view('SciDean.pages.student',compact('student'));
}
public function scistudentprofile($id){
    $students=Administration::find($id);
    return view('SciDean.pages.StudentProfile',compact('students'));
}
public function sciverify($id){
    $student=Administration::find($id);
    $student->verify=2;
    $student->save();
    session()->flash('success','Student Verified Successfully !!');
    return back();

}
public function sciverifeduser(){
    $student=Administration::where('verify',2)->where('faculty',5)->get();
    return view('SciDean.pages.verifiedstudent',compact('student'));
}
public function sciunverify($id){
    $student=Administration::find($id);
    $student->verify=1;
    $student->save();
    session()->flash('success','Student UnVerified Successfully !!');
    return back();

}
public function sciupload(){
    return view('SciDean.pages.upload');
}
public function sciuploadnotice(Request $request){
    $request->validate([

        'name' => 'required',
        'message' => 'required',
    ]);

    $student=new Dean;
    $student->message=$request->message;
    $student->name=$request->name;
    $student->engineer=$request->engineer;
    $student->faculty=5;
    if (($request->image) > 0) {
            //insert image
        $image = $request->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/dean/'. $img);
        Image::make($image)->save($location);
        $student->image = $img;
    }
    $student->save();
    session()->flash('success','Upload Notice Successfully!!');
    return back();
}
public function sciview(){
    $student = Dean::where('faculty',5)->get();
    return view('SciDean.pages.notice',compact('student'));



}
public function scideannotice($id){
    $student=Dean::find($id);
    return view('SciDean.pages.uploadednotice',compact('student'));
}
public function scideletenotice($id){
    $student=Dean::find($id);
    $student->delete();
    session()->flash('success','Notice Deleted Successfully!!');
    return back();

}
public function sciupdatenotice($id){
    $student=Dean::find($id);
    return view('SciDean.pages.update',compact('student'));

}
public function sciupdatednotice(Request $request,$id){
    $student=Dean::find($id);
    $student->name=$request->name;
    $student->message=$request->message;
    if (($request->image) > 0) {
            //insert image
        $image = $request->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/dean/'. $img);
        Image::make($image)->save($location);
        $student->image = $img;
    }
    $student->update();
    session()->flash('success',' Notice Updated Successfully!!');
    return back();

}
    //================================= Business Faulty===============//

public function busregister(){
    $student=Administration::where('verify',1)->where('faculty',6)->get();
    return view('BusDean.pages.student',compact('student'));
}
public function busstudentprofile($id){
    $students=Administration::find($id);
    return view('BusDean.pages.StudentProfile',compact('students'));
}
public function busverify($id){
    $student=Administration::find($id);
    $student->verify=2;
    $student->save();
    session()->flash('success','Student Verified Successfully !!');
    return back();

}
public function busverifeduser(){
    $student=Administration::where('verify',2)->where('faculty',6)->get();
    return view('BusDean.pages.verifiedstudent',compact('student'));
}
public function busunverify($id){
    $student=Administration::find($id);
    $student->verify=1;
    $student->save();
    session()->flash('success','Student UnVerified Successfully !!');
    return back();

}
public function busupload(){
    return view('BusDean.pages.upload');
}
public function busuploadnotice(Request $request){

    $request->validate([

        'name' => 'required',
        'message' => 'required',
    ]);
    $student=new Dean;
    $student->message=$request->message;
    $student->name=$request->name;
    $student->faculty=6;
    if (($request->image) > 0) {
            //insert image
        $image = $request->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/dean/'. $img);
        Image::make($image)->save($location);
        $student->image = $img;
    }
    $student->save();
    session()->flash('success','Upload Notice Successfully!!');
    return back();
}
public function busview(){
    $student = Dean::where('faculty',6)->get();
    return view('BusDean.pages.notice',compact('student'));



}
public function busdeannotice($id){
    $student=Dean::find($id);
    return view('BusDean.pages.uploadednotice',compact('student'));
}
public function busdeletenotice($id){
    $student=Dean::find($id);
    $student->delete();
    session()->flash('success','Notice Deleted Successfully!!');
    return back();

}
public function busupdatenotice($id){
    $student=Dean::find($id);
    return view('BusDean.pages.update',compact('student'));

}
public function busupdatednotice(Request $request,$id){
    $student=Dean::find($id);
    $student->name=$request->name;
    $student->message=$request->message;
    if (($request->image) > 0) {
            //insert image
        $image = $request->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/dean/'. $img);
        Image::make($image)->save($location);
        $student->image = $img;
    }
    $student->update();
    session()->flash('success',' Notice Updated Successfully!!');
    return back();

}
     //================================= Business Faulty===============//

public function healthregister(){
    $student=Administration::where('verify',1)->where('faculty',7)->get();
    return view('HealthDean.pages.student',compact('student'));
}
public function healthstudentprofile($id){
    $students=Administration::find($id);
    return view('HealthDean.pages.StudentProfile',compact('students'));
}
public function healthverify($id){
    $student=Administration::find($id);
    $student->verify=2;
    $student->save();
    session()->flash('success','Student Verified Successfully !!');
    return back();

}
public function healthverifeduser(){
    $student=Administration::where('verify',2)->where('faculty',7)->get();
    return view('HealthDean.pages.verifiedstudent',compact('student'));
}
public function healthunverify($id){
    $student=Administration::find($id);
    $student->verify=1;
    $student->save();
    session()->flash('success','Student UnVerified Successfully !!');
    return back();

}
public function healthupload(){
    return view('HealthDean.pages.upload');
}
public function healthuploadnotice(Request $request){
    $request->validate([

        'name' => 'required',
        'message' => 'required',
    ]);
    $student=new Dean;
    $student->message=$request->message;
    $student->name=$request->name;
    $student->faculty=7;
    if (($request->image) > 0) {
            //insert image
        $image = $request->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/dean/'. $img);
        Image::make($image)->save($location);
        $student->image = $img;
    }
    $student->save();
    session()->flash('success','Upload Notice Successfully!!');
    return back();
}
public function healthview(){
    $student = Dean::where('faculty',7)->get();
    return view('HealthDean.pages.notice',compact('student'));



}
public function healthdeannotice($id){
    $student=Dean::find($id);
    return view('HealthDean.pages.uploadednotice',compact('student'));
}
public function healthdeletenotice($id){
    $student=Dean::find($id);
    $student->delete();
    session()->flash('success','Notice Deleted Successfully!!');
    return back();

}
public function healthupdatenotice($id){
    $student=Dean::find($id);
    return view('HealthDean.pages.update',compact('student'));

}
public function healthupdatednotice(Request $request,$id){
    $student=Dean::find($id);
    $student->name=$request->name;
    $student->message=$request->message;
    if (($request->image) > 0) {
            //insert image
        $image = $request->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/dean/'. $img);
        Image::make($image)->save($location);
        $student->image = $img;
    }
    $student->update();
    session()->flash('success',' Notice Updated Successfully!!');
    return back();

}
}
