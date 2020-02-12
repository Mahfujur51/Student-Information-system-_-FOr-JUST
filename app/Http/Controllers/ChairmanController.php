<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dean;
use App\FemaleHall;
use App\Register;
use App\Administration;
use App\CseDepartment;
use Image;


class ChairmanController extends Controller
{
    public function noticedean(){
    	$student=Dean::where('faculty',1)->get();
    	return view('Chairmancse.pages.deannotice',compact('student'));
    }
    public function noticefemale(){
    	$student=FemaleHall::all();
    	return view('Chairmancse.pages.fhallnotice',compact('student'));
    }
    public function noticeregister(){
    	$student=Register::where('register_id',1);
    	return view('Chairmancse.pages.registernotice',compact('student'));
    }
    public function allstudent(){
    	$student=Administration::where('dept',1)->get();
    	return view ('Chairmancse.pages.showstudent',compact('student'));
    }
    public function csecharimanupload(){
    	return view('Chairmancse.pages.uploadnotice');
    }
    public function csecharimannotice(Request $request){
    	$student=new CseDepartment;
    	$student->name=$request->name;
    	$student->message=$request->message;
    	$student->chirman='cse';
    	$student->dept=1;
    	 if (($request->notice) > 0) {
            //insert notice
                $notice = $request->file('notice');
                $img = time() . '.' . $notice->getClientOriginalExtension();
                $location = public_path('images/chairman/'. $img);
                Image::make($notice)->save($location);
                $student->notice = $img;
            }
            $student->save();
            session()->flash('success','Upload Notice Successfully!!');
            return back();
    }
    public function chirmannoticelist(){
    	$student=CseDepartment::where('chirman','cse')->get();
    	return view('Chairmancse.pages.chairmannotice',compact('student'));

    }
    public function chairmannoticeview($id){
    	$student=CseDepartment::find($id);
    	return view('Chairmancse.pages.viewcsechairmannotice',compact('student'));
    }
    public function updatenotice($id){
    	$student=CseDepartment::find($id);
    	return view('Chairmancse.pages.update',compact('student'));
    }
    public function cseupdatednotice(Request $request,$id){

    	$student=CseDepartment::find($id);
    	$student->name=$request->name;
    	$student->message=$request->message;
    	
    	 if (($request->notice) > 0) {
            //insert notice
                $notice = $request->file('notice');
                $img = time() . '.' . $notice->getClientOriginalExtension();
                $location = public_path('images/chairman/'. $img);
                Image::make($notice)->save($location);
                $student->notice = $img;
            }
            $student->update();
            session()->flash('success','Updated Notice Successfully!!');
            return back();

    	
    }
    public function csedelete($id){
    	$student=CseDepartment::find($id);
    	$student->delete();
    	 session()->flash('success','Deleted Notice Successfully!!');
            return back();
    }
    public function deannotice($id){
        $student=Dean::find($id);
        return view('Chairmancse.pages.deanview',compact('student'));
     
    }
       public function hallnotice($id){
        $student=FemaleHall::find($id);
        return view('Chairmancse.pages.hallview',compact('student'));
     
    }
    //
    public function engdeannotice(){
        $student=Dean::where('engineer',1)->get();
        return view('Engineer.pages.dean',compact('student'));
    }
    public function engdeannoticeview($id){
        $student=Dean::find($id);
        return view('Engineer.pages.deanview',compact('student'));

    }
    public function enghallnotice(){
        $student=FemaleHall::all();
        return view('Engineer.pages.hall',compact('student'));

    }
    public function registernotice(){
        $student=Register::all();
        return view('Engineer.pages.register',compact('student'));
    }
public function hallnoticeview($id){
    $student=FemaleHall::find($id);
    return view('Engineer.pages.hallview',compact('student'));
}


}
