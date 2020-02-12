<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administration;
use App\FemaleHall;
use Image;

class FemaleHallController extends Controller
{
    public function index(){
        $student=Administration::where('payment',1)
        ->where('gender','FEMALE')->get();

        return view('FemaleHall.pages.Idrequest',compact('student'));


    }
    public function givenroom($id){
        $student=Administration::find($id);
        return view('FemaleHall.pages.Room',compact('student'));


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
    public function studentid($id){
        $student=Administration::find($id);
        return view('FemaleHall.pages.idcard',compact('student'));
    }
    public function studenthall($id){
        $students=Administration::find($id);
        return view('FemaleHall.pages.StudentProfile',compact('students'));

    }
    public function roomdistribution(){
        $student=Administration::where('payment',2)
        ->where('gender','FEMALE')
        ->whereNull('room')->get();
        return view('FemaleHall.pages.RegisterUser',compact('student'));

    }
    public function accept_payment($id){
        $student=Administration::find($id);
        $student->payment=2;
        $student->hall_name="SHH";
        $student->save();
        session()->flash('success','Payment Accepted  Successfully');
        return back();
    }
public function registerstudent(){
        $student=Administration::where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.Residential',compact('student'));

    }
    public function RoomLocation($id){
        $student=Administration::find($id);
        return view('FemaleHall.pages.HallRoom',compact('student'));
    }
    public function viewnotice(){
        $student=FemaleHall::where('gender','FEMALE')->get();
        return view('FemaleHall.pages.viewnotice',compact('student'));
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
        return view('FemaleHall.pages.update',compact('student'));
    }
    public function upload(){
        return view('FemaleHall.pages.upload');
    }
    public function shownotice($id){
        $student=FemaleHall::find($id);
        return view('FemaleHall.pages.shownotice',compact('student'));
    }
    public function uploadnotice(Request $request)
    {
        $student=new FemaleHall;
        $student->name=$request->name;
        $student->message=$request->message;
        $student->gender='FEMALE';
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







    public function room(){

    	return view('FemaleHall.pages.RoomView');
    }

    public function froom501(){
        $student=Administration::where('room',501)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom501',compact('student'));
    }
    public function froom502(){
        $student=Administration::where('room',502)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom502',compact('student'));
    }
    public function froom503(){
        $student=Administration::where('room',503)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom503',compact('student'));
    }
    public function froom504(){
        $student=Administration::where('room',504)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom504',compact('student'));
    }
    public function froom505(){
        $student=Administration::where('room',505)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom505',compact('student'));
    }
    public function froom506(){
        $student=Administration::where('room',506)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom506',compact('student'));
    }
    public function froom507(){
        $student=Administration::where('room',507)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom507',compact('student'));
    }
    public function froom508(){
        $student=Administration::where('room',508)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom508',compact('student'));
    }
    public function froom509(){
        $student=Administration::where('room',509)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom509',compact('student'));
    }
    public function froom510(){
        $student=Administration::where('room',510)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom510',compact('student'));
    }
    public function froom511(){
        $student=Administration::where('room',511)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom511',compact('student'));
    }
    public function froom512(){
        $student=Administration::where('room',512)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom512',compact('student'));
    }
    public function froom513(){
        $student=Administration::where('room',513)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom513',compact('student'));
    }
    public function froom514(){
        $student=Administration::where('room',514)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom514',compact('student'));
    }
    public function froom515(){
        $student=Administration::where('room',515)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom515',compact('student'));
    }
    public function froom516(){
        $student=Administration::where('room',516)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom516',compact('student'));
    }
    public function froom517(){
        $student=Administration::where('room',517)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom517',compact('student'));
    }
    public function froom518(){
        $student=Administration::where('room',518)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom518',compact('student'));
    }
    public function froom519(){
        $student=Administration::where('room',519)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom519',compact('student'));
    }
    public function froom520(){
        $student=Administration::where('room',520)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom520',compact('student'));
    }
    public function froom521(){
        $student=Administration::where('room',521)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom521',compact('student'));
    }
    public function froom522(){
        $student=Administration::where('room',522)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom522',compact('student'));
    }
    public function froom523(){
        $student=Administration::where('room',523)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom523',compact('student'));
    }
    public function froom524(){
        $student=Administration::where('room',524)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom524',compact('student'));
    }
    public function froom525(){
        $student=Administration::where('room',525)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom525',compact('student'));
    }
    public function froom526(){
        $student=Administration::where('room',526)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom526',compact('student'));
    }
    public function froom527(){
        $student=Administration::where('room',527)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom527',compact('student'));
    }
    public function froom528(){
        $student=Administration::where('room',528)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom528',compact('student'));
    }
    public function froom529(){
        $student=Administration::where('room',529)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom529',compact('student'));
    }
    public function froom530(){
        $student=Administration::where('room',530)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom530',compact('student'));
    }
    public function froom531(){
        $student=Administration::where('room',531)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom531',compact('student'));
    }
    public function froom532(){
        $student=Administration::where('room',532)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom532',compact('student'));
    }
    public function froom401(){
        $student=Administration::where('room',401)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom401',compact('student'));
    }
    public function froom402(){
        $student=Administration::where('room',402)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom402',compact('student'));
    }
    public function froom403(){
        $student=Administration::where('room',403)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom403',compact('student'));
    }
    public function froom404(){
        $student=Administration::where('room',404)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom404',compact('student'));
    }
    public function froom405(){
        $student=Administration::where('room',405)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom405',compact('student'));
    }
    public function froom406(){
        $student=Administration::where('room',406)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom406',compact('student'));
    }
    public function froom407(){
        $student=Administration::where('room',407)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom407',compact('student'));
    }
    public function froom408(){
        $student=Administration::where('room',408)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom408',compact('student'));
    }
    public function froom409(){
        $student=Administration::where('room',409)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom409',compact('student'));
    }
    public function froom410(){
        $student=Administration::where('room',410)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom410',compact('student'));
    }
    public function froom411(){
        $student=Administration::where('room',411)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom411',compact('student'));
    }
    public function froom412(){
        $student=Administration::where('room',412)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom412',compact('student'));
    }
    public function froom413(){
        $student=Administration::where('room',413)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom413',compact('student'));
    }
    public function froom414(){
        $student=Administration::where('room',414)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom414',compact('student'));
    }
    public function froom415(){
        $student=Administration::where('room',415)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom415',compact('student'));
    }
    public function froom416(){
        $student=Administration::where('room',416)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom416',compact('student'));
    }
    public function froom417(){
        $student=Administration::where('room',417)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom417',compact('student'));
    }
    public function froom418(){
        $student=Administration::where('room',418)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom418',compact('student'));
    }
    public function froom419(){
        $student=Administration::where('room',419)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom419',compact('student'));
    }
    public function froom420(){
        $student=Administration::where('room',420)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom420',compact('student'));
    }
    public function froom421(){
        $student=Administration::where('room',421)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom421',compact('student'));
    }
    public function froom422(){
        $student=Administration::where('room',422)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom422',compact('student'));
    }
    public function froom423(){
        $student=Administration::where('room',423)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom423',compact('student'));
    }
    public function froom424(){
        $student=Administration::where('room',424)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom424',compact('student'));
    }
    public function froom425(){
        $student=Administration::where('room',425)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom425',compact('student'));
    }
    public function froom426(){
        $student=Administration::where('room',426)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom426',compact('student'));
    }
    public function froom427(){
        $student=Administration::where('room',427)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom427',compact('student'));
    }
    public function froom428(){
        $student=Administration::where('room',428)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom428',compact('student'));
    }
    public function froom429(){
        $student=Administration::where('room',429)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom429',compact('student'));
    }
    public function froom430(){
        $student=Administration::where('room',430)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom430',compact('student'));
    }
    public function froom431(){
        $student=Administration::where('room',431)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom431',compact('student'));
    }
    public function froom432(){
        $student=Administration::where('room',432)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom432',compact('student'));
    }
    public function froom301(){
        $student=Administration::where('room',301)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom301',compact('student'));
    }
    public function froom302(){
        $student=Administration::where('room',302)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom302',compact('student'));
    }
    public function froom303(){
        $student=Administration::where('room',303)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom303',compact('student'));
    }
    public function froom304(){
        $student=Administration::where('room',304)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom304',compact('student'));
    }
    public function froom305(){
        $student=Administration::where('room',305)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom305',compact('student'));
    }
    public function froom306(){
        $student=Administration::where('room',306)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom306',compact('student'));
    }
    public function froom308(){
        $student=Administration::where('room',308)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom308',compact('student'));
    }
    public function froom309(){
        $student=Administration::where('room',309)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom309',compact('student'));
    }
    public function froom310(){
        $student=Administration::where('room',310)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom310',compact('student'));
    }
    public function froom311(){
        $student=Administration::where('room',311)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom311',compact('student'));
    }
    public function froom312(){
        $student=Administration::where('room',312)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom312',compact('student'));
    }
    public function froom313(){
        $student=Administration::where('room',313)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom313',compact('student'));
    }
    public function froom314(){
        $student=Administration::where('room',314)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom314',compact('student'));
    }
    public function froom315(){
        $student=Administration::where('room',315)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom315',compact('student'));
    }
    public function froom316(){
        $student=Administration::where('room',316)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom316',compact('student'));
    }
    public function froom317(){
        $student=Administration::where('room',317)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom317',compact('student'));
    }
    public function froom318(){
        $student=Administration::where('room',318)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom318',compact('student'));
    }
    public function froom319(){
        $student=Administration::where('room',319)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom319',compact('student'));
    }
    public function froom320(){
        $student=Administration::where('room',320)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom320',compact('student'));
    }
    public function froom321(){
        $student=Administration::where('room',321)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom321',compact('student'));
    }
    public function froom322(){
        $student=Administration::where('room',322)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom322',compact('student'));
    }
    public function froom323(){
        $student=Administration::where('room',323)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom323',compact('student'));
    }
    public function froom324(){
        $student=Administration::where('room',324)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom324',compact('student'));
    }
    public function froom325(){
        $student=Administration::where('room',325)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom325',compact('student'));
    }
    public function froom326(){
        $student=Administration::where('room',326)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom326',compact('student'));
    }
    public function froom327(){
        $student=Administration::where('room',327)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom327',compact('student'));
    }
    public function froom328(){
        $student=Administration::where('room',328)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom328',compact('student'));
    }
    public function froom329(){
        $student=Administration::where('room',329)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom329',compact('student'));
    }
    public function froom330(){
        $student=Administration::where('room',330)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom330',compact('student'));
    }
    public function froom201(){
        $student=Administration::where('room',201)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom201',compact('student'));
    }
    public function froom202(){
        $student=Administration::where('room',202)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom202',compact('student'));
    }
    public function froom203(){
        $student=Administration::where('room',203)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom203',compact('student'));
    }
    public function froom204(){
        $student=Administration::where('room',204)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom204',compact('student'));
    }
    public function froom205(){
        $student=Administration::where('room',205)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom205',compact('student'));
    }
    public function froom206(){
        $student=Administration::where('room',206)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom206',compact('student'));
    }
    public function froom207(){
        $student=Administration::where('room',207)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom207',compact('student'));
    }
    public function froom208(){
        $student=Administration::where('room',208)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom208',compact('student'));
    }
    public function froom209(){
        $student=Administration::where('room',209)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom209',compact('student'));
    }
    public function froom210(){
        $student=Administration::where('room',210)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom210',compact('student'));
    }
    public function froom211(){
        $student=Administration::where('room',211)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom211',compact('student'));
    }
    public function froom212(){
        $student=Administration::where('room',212)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom212',compact('student'));
    }
    public function froom213(){
        $student=Administration::where('room',213)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom213',compact('student'));
    }
    public function froom214(){
        $student=Administration::where('room',214)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom214',compact('student'));
    }
    public function froom215(){
        $student=Administration::where('room',215)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom215',compact('student'));
    }
    public function froom216(){
        $student=Administration::where('room',216)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom216',compact('student'));
    }
    public function froom217(){
        $student=Administration::where('room',217)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom217',compact('student'));
    }
    public function froom218(){
        $student=Administration::where('room',218)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom218',compact('student'));
    }
    public function froom219(){
        $student=Administration::where('room',219)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom219',compact('student'));
    }
    public function froom220(){
        $student=Administration::where('room',220)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom220',compact('student'));
    }
    public function froom222(){
        $student=Administration::where('room',222)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom222',compact('student'));
    }
    public function froom223(){
        $student=Administration::where('room',223)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom223',compact('student'));
    }
    public function froom224(){
        $student=Administration::where('room',224)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom224',compact('student'));
    }
    public function froom225(){
        $student=Administration::where('room',225)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom225',compact('student'));
    }
    public function froom226(){
        $student=Administration::where('room',226)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom226',compact('student'));
    }
    public function froom101(){
        $student=Administration::where('room',101)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom101',compact('student'));
    }
    public function froom102(){
        $student=Administration::where('room',102)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom102',compact('student'));
    }
    public function froom106(){
        $student=Administration::where('room',106)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom106',compact('student'));
    }
    public function froom107(){
        $student=Administration::where('room',107)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom107',compact('student'));
    }
    public function froom108(){
        $student=Administration::where('room',108)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom108',compact('student'));
    }
    public function froom109(){
        $student=Administration::where('room',109)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom109',compact('student'));
    }
    public function froom110(){
        $student=Administration::where('room',110)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom110',compact('student'));
    }
    public function froom111(){
        $student=Administration::where('room',111)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom111',compact('student'));
    }
    public function froom112(){
        $student=Administration::where('room',112)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom112',compact('student'));
    }
    public function froom113(){
        $student=Administration::where('room',113)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom113',compact('student'));
    }
    public function froom114(){
        $student=Administration::where('room',114)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom114',compact('student'));
    }
    public function froom115(){
        $student=Administration::where('room',115)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom115',compact('student'));
    }
    public function froom116(){
        $student=Administration::where('room',116)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom116',compact('student'));
    }
    public function froom117(){
        $student=Administration::where('room',117)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom117',compact('student'));
    }
    public function froom118(){
        $student=Administration::where('room',118)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom118',compact('student'));
    }
    public function froom119(){
        $student=Administration::where('room',119)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom119',compact('student'));
    }
    public function froom120(){
        $student=Administration::where('room',120)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom120',compact('student'));
    }
    public function froom121(){
        $student=Administration::where('room',121)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom121',compact('student'));
    }
    public function froom122(){
        $student=Administration::where('room',122)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom122',compact('student'));
    }
    public function froom123(){
        $student=Administration::where('room',123)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom123',compact('student'));
    }
    public function froom124(){
        $student=Administration::where('room',124)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom124',compact('student'));
    }
    public function froom125(){
        $student=Administration::where('room',125)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom125',compact('student'));
    }
    public function froom126(){
        $student=Administration::where('room',126)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom126',compact('student'));
    }
    public function froom127(){
        $student=Administration::where('room',127)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom127',compact('student'));
    }
    public function froom128(){
        $student=Administration::where('room',128)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom128',compact('student'));
    }
    public function froom129(){
        $student=Administration::where('room',129)
        ->where('payment',2)
        ->where('gender','FEMALE')
        ->whereNotNull('room')->get();
        return view('FemaleHall.pages.room.froom129',compact('student'));
    }

}
