<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administration;
use App\CseDepartment;
use Image;


class CseDepartmentController extends Controller
{

    public function upload(){
    	return view('CseDepartment.pages.upload');
    }

    public function student(){
    	$student=Administration::where('dept',1)->get();
    	return view('CseDepartment.pages.student',compact('student'));
    }
    public function cseprofile($id){
    	$student=Administration::find($id);
    	return view('CseDepartment.pages.profile',compact('student'));
    }
    public function noticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=1;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function shownotice(){
        $student=CseDepartment::where('dept',1)->take(50)->get();
        return view('CseDepartment.pages.shownotice',compact('student'));
    }
    public function deannotice($id){
        $student=CseDepartment::find($id);
        return view('CseDepartment.pages.view',compact('student'));
    }
    public function delete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function updatenotice($id){
        $student=CseDepartment::find($id);
        return view('CseDepartment.pages.update',compact('student'));
    }
    public function updatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function chirmannotice(){
        $student=CseDepartment::where('chirman','cse')->get();
        return view('CseDepartment.pages.chairmannoitce',compact('student'));
    }
    //======================================EEE department ====================//
    public function eeestudent(){
        $student=Administration::where('dept',11)->get();
        return view('EeeDepartment.pages.student',compact('student'));
    }
    public function eeeprofile($id){
        $student=Administration::find($id);
        return view('EeeDepartment.pages.profile',compact('student'));
    }
    public function eeemannotice(){
        $student=CseDepartment::where('chirman','eee')->get();
        return view('EeeDepartment.pages.chairmannoitce',compact('student'));
    }
    public function eeeview($id){
        $student=CseDepartment::find($id);
        return view('EeeDepartment.pages.view',compact('student'));
    }
    public function eeedelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function eeeupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('EeeDepartment.pages.update',compact('student'));
    }
    public function eeeupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function eeeupload(){
        return view('EeeDepartment.pages.upload');
    }
    public function eeenoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=11;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function eeeshownotice(){
        $student=CseDepartment::where('dept',11)->take(50)->get();
        return view('EeeDepartment.pages.shownotice',compact('student'));
    }
    
     //======================================Est department ====================//
    public function mbstudent(){
        $student=Administration::where('dept',3)->get();
        return view('mbDepartment.pages.student',compact('student'));
    }
    public function mbprofile($id){
        $student=Administration::find($id);
        return view('mbDepartment.pages.profile',compact('student'));
    }
    public function mbmannotice(){
        $student=CseDepartment::where('chirman','mb')->get();
        return view('mbDepartment.pages.chairmannoitce',compact('student'));
    }
    public function mbview($id){
        $student=CseDepartment::find($id);
        return view('mbDepartment.pages.view',compact('student'));
    }
    public function mbdelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function mbupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('mbDepartment.pages.update',compact('student'));
    }
    public function mbupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function mbupload(){
        return view('mbDepartment.pages.upload');
    }
    public function mbnoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=3;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function mbshownotice(){
        $student=CseDepartment::where('dept',3)->take(50)->get();
        return view('mbDepartment.pages.shownotice',compact('student'));
    }
        //======================================Fmb department ====================//
    public function fmbstudent(){
        $student=Administration::where('dept',4)->get();
        return view('fmbDepartment.pages.student',compact('student'));
    }
    public function fmbprofile($id){
        $student=Administration::find($id);
        return view('fmbDepartment.pages.profile',compact('student'));
    }
    public function fmbmannotice(){
        $student=CseDepartment::where('chirman','fmb')->get();
        return view('fmbDepartment.pages.chairmannoitce',compact('student'));
    }
    public function fmbview($id){
        $student=CseDepartment::find($id);
        return view('fmbDepartment.pages.view',compact('student'));
    }
    public function fmbdelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function fmbupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('fmbDepartment.pages.update',compact('student'));
    }
    public function fmbupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function fmbupload(){
        return view('fmbDepartment.pages.upload');
    }
    public function fmbnoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=4;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function fmbshownotice(){
        $student=CseDepartment::where('dept',4)->take(50)->get();
        return view('fmbDepartment.pages.shownotice',compact('student'));
    }
        //======================================Chemical department ====================//
    public function chestudent(){
        $student=Administration::where('dept',5)->get();
        return view('cheDepartment.pages.student',compact('student'));
    }
    public function cheprofile($id){
        $student=Administration::find($id);
        return view('cheDepartment.pages.profile',compact('student'));
    }
    public function chemannotice(){
        $student=CseDepartment::where('chirman','che')->get();
        return view('cheDepartment.pages.chairmannoitce',compact('student'));
    }
    public function cheview($id){
        $student=CseDepartment::find($id);
        return view('cheDepartment.pages.view',compact('student'));
    }
    public function chedelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function cheupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('cheDepartment.pages.update',compact('student'));
    }
    public function cheupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function cheupload(){
        return view('cheDepartment.pages.upload');
    }
    public function chenoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=5;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function cheshownotice(){
        $student=CseDepartment::where('dept',5)->take(50)->get();
        return view('cheDepartment.pages.shownotice',compact('student'));
    }
        //======================================ipe department ====================//
    public function gebtstudent(){
        $student=Administration::where('dept',6)->get();
        return view('gebtDepartment.pages.student',compact('student'));
    }
    public function gebtprofile($id){
        $student=Administration::find($id);
        return view('gebtDepartment.pages.profile',compact('student'));
    }
    public function gebtmannotice(){
        $student=CseDepartment::where('chirman','gebt')->get();
        return view('gebtDepartment.pages.chairmannoitce',compact('student'));
    }
    public function gebtview($id){
        $student=CseDepartment::find($id);
        return view('gebtDepartment.pages.view',compact('student'));
    }
    public function gebtdelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function gebtupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('gebtDepartment.pages.update',compact('student'));
    }
    public function gebtupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function gebtupload(){
        return view('gebtDepartment.pages.upload');
    }
    public function gebtnoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=6;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function gebtshownotice(){
        $student=CseDepartment::where('dept',6)->take(50)->get();
        return view('gebtDepartment.pages.shownotice',compact('student'));
    }

          //======================================ipe department ====================//
    public function ipestudent(){
        $student=Administration::where('dept',7)->get();
        return view('ipeDepartment.pages.student',compact('student'));
    }
    public function ipeprofile($id){
        $student=Administration::find($id);
        return view('ipeDepartment.pages.profile',compact('student'));
    }
    public function ipemannotice(){
        $student=CseDepartment::where('chirman','ipe')->get();
        return view('ipeDepartment.pages.chairmannoitce',compact('student'));
    }
    public function ipeview($id){
        $student=CseDepartment::find($id);
        return view('ipeDepartment.pages.view',compact('student'));
    }
    public function ipedelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function ipeupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('ipeDepartment.pages.update',compact('student'));
    }
    public function ipeupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function ipeupload(){
        return view('ipeDepartment.pages.upload');
    }
    public function ipenoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=7;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function ipeshownotice(){
        $student=CseDepartment::where('dept',7)->take(50)->get();
        return view('ipeDepartment.pages.shownotice',compact('student'));
    }
    //=========================pme====================//
    public function pmestudent(){
        $student=Administration::where('dept',8)->get();
        return view('pmeDepartment.pages.student',compact('student'));
    }
    public function pmeprofile($id){
        $student=Administration::find($id);
        return view('pmeDepartment.pages.profile',compact('student'));
    }
    public function pmemannotice(){
        $student=CseDepartment::where('chirman','pme')->get();
        return view('pmeDepartment.pages.chairmannoitce',compact('student'));
    }
    public function pmeview($id){
        $student=CseDepartment::find($id);
        return view('pmeDepartment.pages.view',compact('student'));
    }
    public function pmedelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function pmeupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('pmeDepartment.pages.update',compact('student'));
    }
    public function pmeupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function pmeupload(){
        return view('pmeDepartment.pages.upload');
    }
    public function pmenoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=8;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function pmeshownotice(){
        $student=CseDepartment::where('dept',8)->take(50)->get();
        return view('pmeDepartment.pages.shownotice',compact('student'));
    }
     //=========================nft====================//
    public function nftstudent(){
        $student=Administration::where('dept',9)->get();
        return view('nftDepartment.pages.student',compact('student'));
    }
    public function nftprofile($id){
        $student=Administration::find($id);
        return view('nftDepartment.pages.profile',compact('student'));
    }
    public function nftmannotice(){
        $student=CseDepartment::where('chirman','nft')->get();
        return view('nftDepartment.pages.chairmannoitce',compact('student'));
    }
    public function nftview($id){
        $student=CseDepartment::find($id);
        return view('nftDepartment.pages.view',compact('student'));
    }
    public function nftdelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function nftupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('nftDepartment.pages.update',compact('student'));
    }
    public function nftupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function nftupload(){
        return view('nftDepartment.pages.upload');
    }
    public function nftnoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=9;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function nftshownotice(){
        $student=CseDepartment::where('dept',9)->take(50)->get();
        return view('nftDepartment.pages.shownotice',compact('student'));
    }
         //=========================pharm====================//
    public function pharmstudent(){
        $student=Administration::where('dept',10)->get();
        return view('pharmDepartment.pages.student',compact('student'));
    }
    public function pharmprofile($id){
        $student=Administration::find($id);
        return view('pharmDepartment.pages.profile',compact('student'));
    }
    public function pharmmannotice(){
        $student=CseDepartment::where('chirman','pharm')->get();
        return view('pharmDepartment.pages.chairmannoitce',compact('student'));
    }
    public function pharmview($id){
        $student=CseDepartment::find($id);
        return view('pharmDepartment.pages.view',compact('student'));
    }
    public function pharmdelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function pharmupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('pharmDepartment.pages.update',compact('student'));
    }
    public function pharmupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function pharmupload(){
        return view('pharmDepartment.pages.upload');
    }
    public function pharmnoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=10;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function pharmshownotice(){
        $student=CseDepartment::where('dept',10)->take(50)->get();
        return view('pharmDepartment.pages.shownotice',compact('student'));
    }
         //=========================pess====================//
    public function pessstudent(){
        $student=Administration::where('dept',12)->get();
        return view('pessDepartment.pages.student',compact('student'));
    }
    public function pessprofile($id){
        $student=Administration::find($id);
        return view('pessDepartment.pages.profile',compact('student'));
    }
    public function pessmannotice(){
        $student=CseDepartment::where('chirman','pess')->get();
        return view('pessDepartment.pages.chairmannoitce',compact('student'));
    }
    public function pessview($id){
        $student=CseDepartment::find($id);
        return view('pessDepartment.pages.view',compact('student'));
    }
    public function pessdelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function pessupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('pessDepartment.pages.update',compact('student'));
    }
    public function pessupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function pessupload(){
        return view('pessDepartment.pages.upload');
    }
    public function pessnoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=12;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function pessshownotice(){
        $student=CseDepartment::where('dept',12)->take(50)->get();
        return view('pessDepartment.pages.shownotice',compact('student'));
    }
         //=========================phy====================//
    public function phystudent(){
        $student=Administration::where('dept',13)->get();
        return view('phyDepartment.pages.student',compact('student'));
    }
    public function phyprofile($id){
        $student=Administration::find($id);
        return view('phyDepartment.pages.profile',compact('student'));
    }
    public function phymannotice(){
        $student=CseDepartment::where('chirman','phy')->get();
        return view('phyDepartment.pages.chairmannoitce',compact('student'));
    }
    public function phyview($id){
        $student=CseDepartment::find($id);
        return view('phyDepartment.pages.view',compact('student'));
    }
    public function phydelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function phyupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('phyDepartment.pages.update',compact('student'));
    }
    public function phyupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function phyupload(){
        return view('phyDepartment.pages.upload');
    }
    public function phynoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=13;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function physhownotice(){
        $student=CseDepartment::where('dept',13)->take(50)->get();
        return view('phyDepartment.pages.shownotice',compact('student'));
    }

         //=========================chem====================//
    public function chemstudent(){
        $student=Administration::where('dept',14)->get();
        return view('chemDepartment.pages.student',compact('student'));
    }
    public function chemprofile($id){
        $student=Administration::find($id);
        return view('chemDepartment.pages.profile',compact('student'));
    }
    public function chemmannotice(){
        $student=CseDepartment::where('chirman','chem')->get();
        return view('chemDepartment.pages.chairmannoitce',compact('student'));
    }
    public function chemview($id){
        $student=CseDepartment::find($id);
        return view('chemDepartment.pages.view',compact('student'));
    }
    public function chemdelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function chemupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('chemDepartment.pages.update',compact('student'));
    }
    public function chemupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function chemupload(){
        return view('chemDepartment.pages.upload');
    }
    public function chemnoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=14;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function chemshownotice(){
        $student=CseDepartment::where('dept',14)->take(50)->get();
        return view('chemDepartment.pages.shownotice',compact('student'));
    }
    //===================================Math================//
    public function mathstudent(){
        $student=Administration::where('dept',15)->get();
        return view('mathDepartment.pages.student',compact('student'));
    }
    public function mathprofile($id){
        $student=Administration::find($id);
        return view('mathDepartment.pages.profile',compact('student'));
    }
    public function mathmannotice(){
        $student=CseDepartment::where('chirman','math')->get();
        return view('mathDepartment.pages.chairmannoitce',compact('student'));
    }
    public function mathview($id){
        $student=CseDepartment::find($id);
        return view('mathDepartment.pages.view',compact('student'));
    }
    public function mathdelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function mathupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('mathDepartment.pages.update',compact('student'));
    }
    public function mathupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function mathupload(){
        return view('mathDepartment.pages.upload');
    }
    public function mathnoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=15;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function mathshownotice(){
        $student=CseDepartment::where('dept',15)->take(50)->get();
        return view('mathDepartment.pages.shownotice',compact('student'));
    }
    //============================english==============//
    public function engstudent(){
        $student=Administration::where('dept',16)->get();
        return view('engDepartment.pages.student',compact('student'));
    }
    public function engprofile($id){
        $student=Administration::find($id);
        return view('engDepartment.pages.profile',compact('student'));
    }
    public function engmannotice(){
        $student=CseDepartment::where('chirman','eng')->get();
        return view('engDepartment.pages.chairmannoitce',compact('student'));
    }
    public function engview($id){
        $student=CseDepartment::find($id);
        return view('engDepartment.pages.view',compact('student'));
    }
    public function engdelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function engupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('engDepartment.pages.update',compact('student'));
    }
    public function engupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function engupload(){
        return view('engDepartment.pages.upload');
    }
    public function engnoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=16;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function engshownotice(){
        $student=CseDepartment::where('dept',16)->take(50)->get();
        return view('engDepartment.pages.shownotice',compact('student'));
    }
    //==============================Appt==================//
    public function apptstudent(){
        $student=Administration::where('dept',17)->get();
        return view('apptDepartment.pages.student',compact('student'));
    }
    public function apptprofile($id){
        $student=Administration::find($id);
        return view('apptDepartment.pages.profile',compact('student'));
    }
    public function apptmannotice(){
        $student=CseDepartment::where('chirman','appt')->get();
        return view('apptDepartment.pages.chairmannoitce',compact('student'));
    }
    public function apptview($id){
        $student=CseDepartment::find($id);
        return view('apptDepartment.pages.view',compact('student'));
    }
    public function apptdelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function apptupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('apptDepartment.pages.update',compact('student'));
    }
    public function apptupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function apptupload(){
        return view('apptDepartment.pages.upload');
    }
    public function apptnoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=17;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function apptshownotice(){
        $student=CseDepartment::where('dept',17)->take(50)->get();
        return view('apptDepartment.pages.shownotice',compact('student'));
    }
    //==========================AIS======================//

    public function aisstudent(){
        $student=Administration::where('dept',18)->get();
        return view('aisDepartment.pages.student',compact('student'));
    }
    public function aisprofile($id){
        $student=Administration::find($id);
        return view('aisDepartment.pages.profile',compact('student'));
    }
    public function aismannotice(){
        $student=CseDepartment::where('chirman','ais')->get();
        return view('aisDepartment.pages.chairmannoitce',compact('student'));
    }
    public function aisview($id){
        $student=CseDepartment::find($id);
        return view('aisDepartment.pages.view',compact('student'));
    }
    public function aisdelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function aisupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('aisDepartment.pages.update',compact('student'));
    }
    public function aisupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->update();
        session()->flash('success',' Notice Updated Successfully!!');
        return back();

    }
    public function aisupload(){
        return view('aisDepartment.pages.upload');
    }
    public function aisnoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=18;
        if (($request->image) > 0) {
            //insert image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/department/'. $img);
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        session()->flash('success','Upload Notice Successfully!!');
        return back();
    }
    public function aisshownotice(){
        $student=CseDepartment::where('dept',18)->take(50)->get();
        return view('aisDepartment.pages.shownotice',compact('student'));
    }
       //==============================bme==================//
           public function bmestudent(){
        $student=Administration::where('dept',19)->get();
        return view('bmeDepartment.pages.student',compact('student'));
    }
     public function bmeprofile($id){
        $student=Administration::find($id);
        return view('bmeDepartment.pages.profile',compact('student'));
    }
    public function bmemannotice(){
        $student=CseDepartment::where('chirman','bme')->get();
        return view('bmeDepartment.pages.chairmannoitce',compact('student'));
    }
    public function bmeview($id){
        $student=CseDepartment::find($id);
        return view('bmeDepartment.pages.view',compact('student'));
    }
    public function bmedelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function bmeupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('bmeDepartment.pages.update',compact('student'));
    }
     public function bmeupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/department/'. $img);
                Image::make($image)->save($location);
                $student->image = $img;
            }
            $student->update();
            session()->flash('success',' Notice Updated Successfully!!');
            return back();

    }
    public function bmeupload(){
        return view('bmeDepartment.pages.upload');
    }
     public function bmenoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=19;
        if (($request->image) > 0) {
            //insert image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/department/'. $img);
                Image::make($image)->save($location);
                $student->image = $img;
            }
            $student->save();
            session()->flash('success','Upload Notice Successfully!!');
            return back();
    }
     public function bmeshownotice(){
        $student=CseDepartment::where('dept',19)->take(50)->get();
        return view('bmeDepartment.pages.shownotice',compact('student'));
    }
   //==============================mgt==================//
           public function mgtstudent(){
        $student=Administration::where('dept',21)->get();
        return view('mgtDepartment.pages.student',compact('student'));
    }
     public function mgtprofile($id){
        $student=Administration::find($id);
        return view('mgtDepartment.pages.profile',compact('student'));
    }
    public function mgtmannotice(){
        $student=CseDepartment::where('chirman','mgt')->get();
        return view('mgtDepartment.pages.chairmannoitce',compact('student'));
    }
    public function mgtview($id){
        $student=CseDepartment::find($id);
        return view('mgtDepartment.pages.view',compact('student'));
    }
    public function mgtdelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function mgtupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('mgtDepartment.pages.update',compact('student'));
    }
     public function mgtupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/department/'. $img);
                Image::make($image)->save($location);
                $student->image = $img;
            }
            $student->update();
            session()->flash('success',' Notice Updated Successfully!!');
            return back();

    }
    public function mgtupload(){
        return view('mgtDepartment.pages.upload');
    }
     public function mgtnoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=21;
        if (($request->image) > 0) {
            //insert image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/department/'. $img);
                Image::make($image)->save($location);
                $student->image = $img;
            }
            $student->save();
            session()->flash('success','Upload Notice Successfully!!');
            return back();
    }
     public function mgtshownotice(){
        $student=CseDepartment::where('dept',21)->take(50)->get();
        return view('mgtDepartment.pages.shownotice',compact('student'));
    }

       //==============================TExtile Engineering==================//
           public function testudent(){
        $student=Administration::where('dept',22)->get();
        return view('teDepartment.pages.student',compact('student'));
    }
     public function teprofile($id){
        $student=Administration::find($id);
        return view('teDepartment.pages.profile',compact('student'));
    }
    public function temannotice(){
        $student=CseDepartment::where('chirman','te')->get();
        return view('teDepartment.pages.chairmannoitce',compact('student'));
    }
    public function teview($id){
        $student=CseDepartment::find($id);
        return view('teDepartment.pages.view',compact('student'));
    }
    public function tedelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function teupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('teDepartment.pages.update',compact('student'));
    }
     public function teupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/department/'. $img);
                Image::make($image)->save($location);
                $student->image = $img;
            }
            $student->update();
            session()->flash('success',' Notice Updated Successfully!!');
            return back();

    }
    public function teupload(){
        return view('teDepartment.pages.upload');
    }
     public function tenoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=22;
        if (($request->image) > 0) {
            //insert image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/department/'. $img);
                Image::make($image)->save($location);
                $student->image = $img;
            }
            $student->save();
            session()->flash('success','Upload Notice Successfully!!');
            return back();
    }
     public function teshownotice(){
        $student=CseDepartment::where('dept',22)->take(50)->get();
        return view('teDepartment.pages.shownotice',compact('student'));
    }
   //==============================MKT==================//
           public function mktstudent(){
        $student=Administration::where('dept',23)->get();
        return view('mktDepartment.pages.student',compact('student'));
    }
     public function mktprofile($id){
        $student=Administration::find($id);
        return view('mktDepartment.pages.profile',compact('student'));
    }
    public function mktmannotice(){
        $student=CseDepartment::where('chirman','mkt')->get();
        return view('mktDepartment.pages.chairmannoitce',compact('student'));
    }
    public function mktview($id){
        $student=CseDepartment::find($id);
        return view('mktDepartment.pages.view',compact('student'));
    }
    public function mktdelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function mktupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('mktDepartment.pages.update',compact('student'));
    }
     public function mktupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/department/'. $img);
                Image::make($image)->save($location);
                $student->image = $img;
            }
            $student->update();
            session()->flash('success',' Notice Updated Successfully!!');
            return back();

    }
    public function mktupload(){
        return view('mktDepartment.pages.upload');
    }
     public function mktnoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=23;
        if (($request->image) > 0) {
            //insert image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/department/'. $img);
                Image::make($image)->save($location);
                $student->image = $img;
            }
            $student->save();
            session()->flash('success','Upload Notice Successfully!!');
            return back();
    }
     public function mktshownotice(){
        $student=CseDepartment::where('dept',23)->take(50)->get();
        return view('mktDepartment.pages.shownotice',compact('student'));
    }
   //==============================CDM==================//
           public function cmdstudent(){
        $student=Administration::where('dept',25)->get();
        return view('cmdDepartment.pages.student',compact('student'));
    }
     public function cmdprofile($id){
        $student=Administration::find($id);
        return view('cmdDepartment.pages.profile',compact('student'));
    }
    public function cmdmannotice(){
        $student=CseDepartment::where('chirman','cmd')->get();
        return view('cmdDepartment.pages.chairmannoitce',compact('student'));
    }
    public function cmdview($id){
        $student=CseDepartment::find($id);
        return view('cmdDepartment.pages.view',compact('student'));
    }
    public function cmddelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function cmdupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('cmdDepartment.pages.update',compact('student'));
    }
     public function cmdupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/department/'. $img);
                Image::make($image)->save($location);
                $student->image = $img;
            }
            $student->update();
            session()->flash('success',' Notice Updated Successfully!!');
            return back();

    }
    public function cmdupload(){
        return view('cmdDepartment.pages.upload');
    }
     public function cmdnoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=25;
        if (($request->image) > 0) {
            //insert image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/department/'. $img);
                Image::make($image)->save($location);
                $student->image = $img;
            }
            $student->save();
            session()->flash('success','Upload Notice Successfully!!');
            return back();
    }
     public function cmdshownotice(){
        $student=CseDepartment::where('dept',25)->take(50)->get();
        return view('cmdDepartment.pages.shownotice',compact('student'));
    }
   //==============================NHS==================//
           public function nhsstudent(){
        $student=Administration::where('dept',26)->get();
        return view('nhsDepartment.pages.student',compact('student'));
    }
     public function nhsprofile($id){
        $student=Administration::find($id);
        return view('nhsDepartment.pages.profile',compact('student'));
    }
    public function nhsmannotice(){
        $student=CseDepartment::where('chirman','nhs')->get();
        return view('nhsDepartment.pages.chairmannoitce',compact('student'));
    }
    public function nhsview($id){
        $student=CseDepartment::find($id);
        return view('nhsDepartment.pages.view',compact('student'));
    }
    public function nhsdelete($id){
        $student=CseDepartment::find($id);
        $student->delete();
        session()->flash('success','Notice Deleted Successfully');
        return back();
    }
    public function nhsupdatenotice($id){
        $student=CseDepartment::find($id);
        return view('nhsDepartment.pages.update',compact('student'));
    }
     public function nhsupdatednotice(Request $request,$id){
        $student=CseDepartment::find($id);
        $student->name=$request->name;
        $student->message=$request->message;
        if (($request->image) > 0) {
            //insert image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/department/'. $img);
                Image::make($image)->save($location);
                $student->image = $img;
            }
            $student->update();
            session()->flash('success',' Notice Updated Successfully!!');
            return back();

    }
    public function nhsupload(){
        return view('nhsDepartment.pages.upload');
    }
     public function nhsnoticeupload(Request $request){
        $student= new CseDepartment;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->t_name=$request->t_name;
        $student->dept=26;
        if (($request->image) > 0) {
            //insert image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/department/'. $img);
                Image::make($image)->save($location);
                $student->image = $img;
            }
            $student->save();
            session()->flash('success','Upload Notice Successfully!!');
            return back();
    }
     public function nhsshownotice(){
        $student=CseDepartment::where('dept',26)->take(50)->get();
        return view('nhsDepartment.pages.shownotice',compact('student'));
    }




}
