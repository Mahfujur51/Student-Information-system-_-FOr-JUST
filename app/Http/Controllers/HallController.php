<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administration;
use App\FemaleHall;
use Image;

class HallController extends Controller
{
	public function index(){
		$student=Administration::where('payment',1)
		->where('gender','MALE')->get();

		return view('MaleHall.pages.Idrequest',compact('student'));


	}
	public function viewnotice(){
		$student=FemaleHall::where('gender','MALE')->get();
		return view('MaleHall.pages.viewnotice',compact('student'));
	}
	public function delete($id){
		$student=FemaleHall::find($id);
		$student->delete();
		session()->flash('success','Upload Notice Successfully!!');
		return back();


	}
	public function updated(Request $request,$id){
		$student=FemaleHall::find($id);
		$student->name=$request->name;
		$student->message=$request->message;
		if (($request->image) > 0) {
			//insert image
			$image = $request->file('image');
			$img = time() . '.' . $image->getClientOriginalExtension();
			$location = public_path('images/hall/'. $img);
			Image::make($image)->save($location);
			$student->image = $img;
		}
		$student->update();
		session()->flash('success','Updated Notice Successfully!!');
		return back();
	}
	public function upldate($id){
		$student=FemaleHall::find($id);
		return view('MaleHall.pages.update',compact('student'));
	}
	public function upload(){
		return view('MaleHall.pages.upload');
	}
	public function shownotice($id){
		$student=FemaleHall::find($id);
		return view('MaleHall.pages.shownotice',compact('student'));
	}
	public function uploadnotice(Request $request)
	{
		$student=new FemaleHall;
		$student->name=$request->name;
		$student->message=$request->message;
		$student->gender='MALE';
		if (($request->image) > 0) {
			//insert image
			$image = $request->file('image');
			$img = time() . '.' . $image->getClientOriginalExtension();
			$location = public_path('images/hall/'. $img);
			Image::make($image)->save($location);
			$student->image = $img;
		}
		$student->save();
		session()->flash('success','Upload Notice Successfully!!');
		return back();

	}
	public function studentid($id){
		$student=Administration::find($id);
		return view('MaleHall.pages.idcard',compact('student'));
	}

	public function hall_room(){
		return view('MaleHall.pages.HallRoom');
	}
	public function accept_payment($id){
		$student=Administration::find($id);
		$student->payment=2;
		$student->hall_name="SMR";
		$student->save();
		session()->flash('success','Payment Accepted  Successfully');
		return back();
	}
	public function studenthall($id){
		$students=Administration::find($id);
		return view('MaleHall.pages.StudentProfile',compact('students'));

	}
	public function roomdistribution(){
		$student=Administration::where('payment',2)
		->where('gender','MALE')
		->whereNull('room')->get();
		return view('MaleHall.pages.RegisterUser',compact('student'));

	}
	public function givenroom($id){
		$student=Administration::find($id);
		return view('MaleHall.pages.Room',compact('student'));


	}
	public function storeroom(Request $request,$id){
		$student=Administration::find($id);
		$request->validate([
			'room' => 'required',
		]);

		$student->room = $request->room;
		$student->save();
		session()->flash('success','Room Given Successfully!!');
		return back();


	}
	public function registerstudent(){
		$student=Administration::where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.Residential',compact('student'));

	}
	public function RoomLocation($id){
		$student=Administration::find($id);
		return view('MaleHall.pages.HallRoom',compact('student'));
	}
	public function RoomView(){

		// $student=Administration::where('payment',2)
		// ->where('gender','MALE')
		// ->whereNotNull('room')->get();
		
		return view('MaleHall.pages.RoomView');
	}

	public function room509(){
		$student=Administration::where('room',509)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room509',compact('student'));
		
	}
	public function room508(){
		$student=Administration::where('room',508)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room508',compact('student'));
		
	}
	public function room507(){
		$student=Administration::where('room',507)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room507',compact('student'));
		
	}
	public function room506(){
		$student=Administration::where('room',506)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room506',compact('student'));
		
	}
	public function room505(){
		$student=Administration::where('room',505)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room505',compact('student'));
		
	}
	public function room504(){
		$student=Administration::where('room',504)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room504',compact('student'));
		
	}
	public function room503(){
		$student=Administration::where('room',503)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room503',compact('student'));
		
	}
	public function room502(){
		$student=Administration::where('room',502)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room502',compact('student'));
		
	}
	public function room501(){
		$student=Administration::where('room',501)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room501',compact('student'));
		
	}



	public function room409(){
		$student=Administration::where('room',409)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room409',compact('student'));
		
	}
	public function room408(){
		$student=Administration::where('room',408)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room408',compact('student'));
		
	}
	public function room407(){
		$student=Administration::where('room',407)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room407',compact('student'));
		
	}
	public function room406(){
		$student=Administration::where('room',406)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room406',compact('student'));
		
	}
	public function room405(){
		$student=Administration::where('room',405)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room405',compact('student'));
		
	}
	public function room404(){
		$student=Administration::where('room',404)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room404',compact('student'));
		
	}
	public function room403(){
		$student=Administration::where('room',403)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room403',compact('student'));
		
	}
	public function room402(){
		$student=Administration::where('room',402)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room402',compact('student'));
		
	}
	public function room401(){
		$student=Administration::where('room',401)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room401',compact('student'));
		
	}

	public function room309(){
		$student=Administration::where('room',309)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room309',compact('student'));
		
	}
	public function room308(){
		$student=Administration::where('room',308)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room308',compact('student'));
		
	}
	public function room307(){
		$student=Administration::where('room',307)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room307',compact('student'));
		
	}
	public function room306(){
		$student=Administration::where('room',306)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room306',compact('student'));
		
	}
	public function room305(){
		$student=Administration::where('room',305)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room305',compact('student'));
		
	}
	public function room304(){
		$student=Administration::where('room',304)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room304',compact('student'));
		
	}
	public function room303(){
		$student=Administration::where('room',303)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room303',compact('student'));
		
	}
	public function room302(){
		$student=Administration::where('room',302)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room302',compact('student'));
		
	}
	public function room301(){
		$student=Administration::where('room',301)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room301',compact('student'));
		
	}
	public function room209(){
		$student=Administration::where('room',209)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room209',compact('student'));
		
	}
	public function room208(){
		$student=Administration::where('room',208)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room208',compact('student'));
		
	}
	public function room207(){
		$student=Administration::where('room',207)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room207',compact('student'));
		
	}
	public function room206(){
		$student=Administration::where('room',206)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room206',compact('student'));
		
	}
	public function room205(){
		$student=Administration::where('room',205)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room205',compact('student'));
		
	}
	public function room204(){
		$student=Administration::where('room',204)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room204',compact('student'));
		
	}
	public function room203(){
		$student=Administration::where('room',203)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room203',compact('student'));
		
	}
	public function room202(){
		$student=Administration::where('room',202)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room202',compact('student'));
		
	}
	public function room201(){
		$student=Administration::where('room',201)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room201',compact('student'));
		
	}


	public function room107(){
		$student=Administration::where('room',107)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room107',compact('student'));
		
	}
	public function room106(){
		$student=Administration::where('room',106)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room106',compact('student'));
		
	}
	public function room105(){
		$student=Administration::where('room',105)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room105',compact('student'));
		
	}
	public function room104(){
		$student=Administration::where('room',104)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room104',compact('student'));
		
	}
	public function room103(){
		$student=Administration::where('room',103)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room103',compact('student'));
		
	}
	public function room102(){
		$student=Administration::where('room',102)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room102',compact('student'));
		
	}
	public function room101(){
		$student=Administration::where('room',101)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room101',compact('student'));
		
	}

	public function room525(){
		$student=Administration::where('room',525)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room525',compact('student'));
		
	}public function room524(){
		$student=Administration::where('room',524)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room524',compact('student'));
		
	}
	public function room523(){
		$student=Administration::where('room',523)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room523',compact('student'));
		
	}
	public function room522(){
		$student=Administration::where('room',522)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room522',compact('student'));
		
	}
	public function room521(){
		$student=Administration::where('room',521)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room521',compact('student'));
		
	}

	public function room520 (){
		$student=Administration::where('room',520 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room520',compact('student'));
		
	}
	public function room519(){
		$student=Administration::where('room',519 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room519',compact('student'));
		
	}
	public function room518(){
		$student=Administration::where('room',518)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room518',compact('student'));
		
	}
	public function room517 (){
		$student=Administration::where('room',517 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room517',compact('student'));
		
	}
	public function room516 (){
		$student=Administration::where('room',516 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room516',compact('student'));
		
	}
	public function room515 (){
		$student=Administration::where('room',515)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room515',compact('student'));
		
	}
	public function room514 (){
		$student=Administration::where('room',514 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room514',compact('student'));
		
	}
	public function room513 (){
		$student=Administration::where('room',513 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room513',compact('student'));
		
	}
	public function room512 (){
		$student=Administration::where('room',512 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room512',compact('student'));
		
	}

	public function room511 (){
		$student=Administration::where('room',511 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room511',compact('student'));
		
	}
	public function room510 (){
		$student=Administration::where('room',510 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room510',compact('student'));
		
	}
	public function room325(){
		$student=Administration::where('room',325)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room325',compact('student'));
		
	}public function room324(){
		$student=Administration::where('room',324)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room324',compact('student'));
		
	}
	public function room323(){
		$student=Administration::where('room',323)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room323',compact('student'));
		
	}
	public function room322(){
		$student=Administration::where('room',322)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room322',compact('student'));
		
	}
	public function room321(){
		$student=Administration::where('room',321)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room321',compact('student'));
		
	}

	public function room320 (){
		$student=Administration::where('room',320 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room320',compact('student'));
		
	}
	public function room319(){
		$student=Administration::where('room',319 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room319',compact('student'));
		
	}
	public function room318(){
		$student=Administration::where('room',318)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room318',compact('student'));
		
	}
	public function room317 (){
		$student=Administration::where('room',317 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room317',compact('student'));
		
	}
	public function room316 (){
		$student=Administration::where('room',316 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room316',compact('student'));
		
	}
	public function room315 (){
		$student=Administration::where('room',315)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room315',compact('student'));

	}
	public function room314 (){
		$student=Administration::where('room',314 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room314',compact('student'));
		
	}
	public function room313 (){
		$student=Administration::where('room',313 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room313',compact('student'));
		
	}
	public function room312 (){
		$student=Administration::where('room',312 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room312',compact('student'));
		
	}

	public function room311 (){
		$student=Administration::where('room',311 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room311',compact('student'));
		
	}
	public function room310 (){
		$student=Administration::where('room',310 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room310',compact('student'));
		
	}
	
	public function room223(){
		$student=Administration::where('room',223)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room223',compact('student'));
		
	}
	public function room222(){
		$student=Administration::where('room',222)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room222',compact('student'));
		
	}
	public function room221(){
		$student=Administration::where('room',221)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room221',compact('student'));
		
	}

	public function room220 (){
		$student=Administration::where('room',220 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room220',compact('student'));
		
	}
	public function room219(){
		$student=Administration::where('room',219 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room219',compact('student'));
		
	}
	public function room218(){
		$student=Administration::where('room',218)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room218',compact('student'));
		
	}
	public function room217 (){
		$student=Administration::where('room',217 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room217',compact('student'));
		
	}
	public function room216 (){
		$student=Administration::where('room',216 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room216',compact('student'));
		
	}
	public function room215 (){
		$student=Administration::where('room',215)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room215',compact('student'));
		
	}
	public function room214 (){
		$student=Administration::where('room',214 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room214',compact('student'));
		
	}
	public function room213 (){
		$student=Administration::where('room',213 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room213',compact('student'));
		
	}
	public function room212 (){
		$student=Administration::where('room',212 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room212',compact('student'));


	}

	public function room211 (){
		$student=Administration::where('room',211 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room211',compact('student'));
		
	}
	public function room210 (){
		$student=Administration::where('room',210 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room210',compact('student'));
		
	}
	public function room119(){
		$student=Administration::where('room',119 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room119',compact('student'));
		
	}
	public function room118(){
		$student=Administration::where('room',118)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room118',compact('student'));
		
	}
	public function room117 (){
		$student=Administration::where('room',117 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room117',compact('student'));
		
	}
	public function room116 (){
		$student=Administration::where('room',116 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room116',compact('student'));
		
	}
	public function room115 (){
		$student=Administration::where('room',115)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room115',compact('student'));
		
	}
	public function room114 (){
		$student=Administration::where('room',114 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room114',compact('student'));
		
	}
	public function room113 (){
		$student=Administration::where('room',113 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room113',compact('student'));
		
	}
	public function room112 (){
		$student=Administration::where('room',112 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room112',compact('student'));
		
	}

	public function room111 (){
		$student=Administration::where('room',111 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room111',compact('student'));
		
	}
	public function room110 (){
		$student=Administration::where('room',110 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room110',compact('student'));
		
	}
	public function room109 (){
		$student=Administration::where('room',109 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room109',compact('student'));
		
	}
	public function room108 (){
		$student=Administration::where('room',108 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room108',compact('student'));
		
	}

	//east side//
	public function room526 (){
		$student=Administration::where('room',526 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room526',compact('student'));
		
	}
	public function room527 (){
		$student=Administration::where('room',527 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room527',compact('student'));
		
	}
	public function room528 (){
		$student=Administration::where('room',528 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room528',compact('student'));
		
	}

	public function room529(){
		$student=Administration::where('room',529)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room529',compact('student'));
		
	}

	public function room530 (){
		$student=Administration::where('room',530 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room530',compact('student'));
		
	}

	public function room531 (){
		$student=Administration::where('room',531 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room531',compact('student'));
		
	}

	public function room532 (){
		$student=Administration::where('room',532 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room532',compact('student'));
		
	}

	public function room533 (){
		$student=Administration::where('room',533 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room533',compact('student'));
		
	}

	public function room534(){
		$student=Administration::where('room',534)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room534',compact('student'));
		
	}

	public function room535 (){
		$student=Administration::where('room',535 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room535',compact('student'));
		
	}

	public function room536 (){
		$student=Administration::where('room',536 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room536',compact('student'));
		
	}
	public function room537 (){
		$student=Administration::where('room',537 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room537',compact('student'));
		
	}
	public function room538 (){
		$student=Administration::where('room',538 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room538',compact('student'));
		
	}
	public function room539 (){
		$student=Administration::where('room',539 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room539',compact('student'));
		
	}
	public function room540 (){
		$student=Administration::where('room',540 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room540',compact('student'));
		
	}
	public function room426 (){
		$student=Administration::where('room',426 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room426',compact('student'));
		
	}
	public function room427 (){
		$student=Administration::where('room',427 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room427',compact('student'));
		
	}
	public function room428 (){
		$student=Administration::where('room',428 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room428',compact('student'));
		
	}
	public function room429(){
		$student=Administration::where('room',429)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room429',compact('student'));
		
	}
	public function room430 (){
		$student=Administration::where('room',430 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room430',compact('student'));
		
	}
	public function room431 (){
		$student=Administration::where('room',431 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room431',compact('student'));
		
	}
	public function room432 (){
		$student=Administration::where('room',432 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room432',compact('student'));
		
	}
	public function room433 (){
		$student=Administration::where('room',433 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room433',compact('student'));
		
	}
	public function room434 (){
		$student=Administration::where('room',434 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room434',compact('student'));
		
	}
	public function room435 (){
		$student=Administration::where('room',435 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room435',compact('student'));
		
	}
	public function room436 (){
		$student=Administration::where('room',436 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room436',compact('student'));
		
	}
	public function room437 (){
		$student=Administration::where('room',437 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room437',compact('student'));
		
	}
	public function room438 (){
		$student=Administration::where('room',438 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room438',compact('student'));
		
	}
	public function room439(){
		$student=Administration::where('room',439)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room439',compact('student'));
		
	}
	public function room440 (){
		$student=Administration::where('room',440 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room440',compact('student'));
		
	}
	public function room441(){
		$student=Administration::where('room',441)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room441',compact('student'));
		
	}
	public function room442 (){
		$student=Administration::where('room',442 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room442',compact('student'));
		
	}
	public function room443 (){
		$student=Administration::where('room',443 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room443',compact('student'));
		
	}
	public function room444 (){
		$student=Administration::where('room',444 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room444',compact('student'));
		
	}
	public function room445 (){
		$student=Administration::where('room',445 )
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room445',compact('student'));
		
	}
	public function room446(){
		$student=Administration::where('room',446)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room446',compact('student'));
		
	}
//=========
	public function roome324(){
		$student=Administration::where('room',324)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room324',compact('student'));
		
	}
	public function roome325(){
		$student=Administration::where('room',325)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room325',compact('student'));
		
	}
	public function roome326(){
		$student=Administration::where('room',326)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room326',compact('student'));
		
	}
	public function room327(){
		$student=Administration::where('room',327)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room327',compact('student'));
		
	}
	public function room328(){
		$student=Administration::where('room',328)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room328',compact('student'));
		
	}
	public function room329(){
		$student=Administration::where('room',329)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room329',compact('student'));
		
	}
	public function room330(){
		$student=Administration::where('room',330)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room330',compact('student'));
		
	}
	public function room331(){
		$student=Administration::where('room',331)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room331',compact('student'));
		
	}
	public function room332(){
		$student=Administration::where('room',332)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room332',compact('student'));
		
	}
	public function room333(){
		$student=Administration::where('room',333)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room333',compact('student'));
		
	}
	public function room334(){
		$student=Administration::where('room',334)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room334',compact('student'));
		
	}
	public function room335(){
		$student=Administration::where('room',335)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room335',compact('student'));
		
	}
	public function room336(){
		$student=Administration::where('room',336)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room336',compact('student'));
		
	}
	public function room337(){
		$student=Administration::where('room',337)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room337',compact('student'));
		
	}
	public function room338(){
		$student=Administration::where('room',338)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room338',compact('student'));
		
	}
	public function room224(){
		$student=Administration::where('room',224)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room224',compact('student'));
		
	}
	public function room225(){
		$student=Administration::where('room',225)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room225',compact('student'));
		
	}
	public function room226(){
		$student=Administration::where('room',226)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room226',compact('student'));
		
	}
	public function room227(){
		$student=Administration::where('room',227)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room227',compact('student'));
		
	}
	public function room228(){
		$student=Administration::where('room',228)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room228',compact('student'));
		
	}
	public function room229(){
		$student=Administration::where('room',229)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room229',compact('student'));
		
	}
	public function room230(){
		$student=Administration::where('room',230)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room230',compact('student'));
		
	}
	public function room231(){
		$student=Administration::where('room',231)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room231',compact('student'));
		
	}
	public function room232(){
		$student=Administration::where('room',232)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room232',compact('student'));
		
	}
	public function room233(){
		$student=Administration::where('room',233)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room233',compact('student'));
		
	}
	public function room234(){
		$student=Administration::where('room',234)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room234',compact('student'));
		
	}
	public function room235(){
		$student=Administration::where('room',235)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room235',compact('student'));
		
	}
	public function room236(){
		$student=Administration::where('room',236)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room236',compact('student'));
		
	}
	public function room237(){
		$student=Administration::where('room',237)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room237',compact('student'));
		
	}
	public function room238(){
		$student=Administration::where('room',238)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room238',compact('student'));
		
	}
	public function room122(){
		$student=Administration::where('room',122)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room122',compact('student'));
		
	}
	public function room123(){
		$student=Administration::where('room',123)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room123',compact('student'));
		
	}
	public function room124(){
		$student=Administration::where('room',124)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room124',compact('student'));
		
	}
	public function room125(){
		$student=Administration::where('room',125)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room125',compact('student'));
		
	}
	public function room126(){
		$student=Administration::where('room',126)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room126',compact('student'));
		
	}
	public function room127(){
		$student=Administration::where('room',127)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room127',compact('student'));
		
	}
	public function room128(){
		$student=Administration::where('room',128)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room128',compact('student'));
		
	}
	public function room129(){
		$student=Administration::where('room',129)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room129',compact('student'));
		
	}
	public function room130(){
		$student=Administration::where('room',130)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room130',compact('student'));
		
	}
	public function room131(){
		$student=Administration::where('room',131)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room131',compact('student'));
		
	}
	public function room132(){
		$student=Administration::where('room',132)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room132',compact('student'));
		
	}
	public function room133(){
		$student=Administration::where('room',133)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room133',compact('student'));
		
	}
	public function room134(){
		$student=Administration::where('room',134)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room134',compact('student'));
		
	}
	public function room135(){
		$student=Administration::where('room',135)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room135',compact('student'));
		
	}
	public function room136(){
		$student=Administration::where('room',136)
		->where('payment',2)
		->where('gender','MALE')
		->whereNotNull('room')->get();
		return view('MaleHall.pages.room.room136',compact('student'));
		
	}
}
