<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Administration;
use App\Imports\CsvImport;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Validation\Rule;
use App\Dean;
use App\Register;
use App\CseDepartment;
use App\FemaleHall;
use Session;
use Image;
class AdministrationController extends Controller
{
	
	/*
		Administration Section
	*/
		public function __construct() {
    //Log out Back
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
    header("Pragma: no-cache"); // HTTP 1.0.
    header("Expires: 0"); // Proxies.
    header('Access-Control-Allow-Origin: *');      
}
public function index(){
	return view('Administration.administration');
}
public function addstudent(){
	return view('Administration.pages.addstudent');
}

public function storestudent(Request $request){
	$request->validate([
		'file' =>'required|file|mimes:csv,txt|max:2048',
	]);

	if ($request->hasFile('file')) {
		$path=$request->file('file')->getRealPath();
		$data=Excel::load($path)->get();
		foreach ($data as  $row) {
			
			if (Administration::where('sreg_no', $row->sreg_no)->exists()) {
				session()->flash('success', 'Data NOt Inserted Duplicate registration number');
				return redirect()->back();
			} else {
    // create new administration record, notify the student, and return redirect back

				

				Administration::create([
					'sname'=>$row->sname,
					'sfname'=>$row->sfname,
					'smname'=>$row->smname,
					'student_mobile'=>$row->student_mobile,
					'admission_roll'=>$row->admission_roll,
					'sboard_name'=>$row->sboard_name,
					'spass_year'=>$row->spass_year,
					'sroll_no'=>$row->sroll_no,
					'sreg_no'=>$row->sreg_no,
					'sgroup'=>$row->sgroup,
					'sgpa'=>$row->sgpa,
					'hboard_name'=>$row->hboard_name,
					'hpass_year'=>$row->hpass_year,
					'hroll_no'=>$row->hroll_no,
					'hreg_no'=>$row->hreg_no,
					'hgroup'=>$row->hgroup,
					'hgpa'=>$row->hgpa,
					'm_position'=>$row->m_position,
					'session'=>$row->session,
					'faculty'=>$row->faculty,
					'student_password'=>$row->student_password,
					'gender'=>$row->gender
				]);
			}

					//Notify Student
			
		}
	}
	session()->flash('success', 'Student Inserted  Successfully !!');
	return redirect()->back();
}
public function showstudent(){
	$students = Administration::OrderBy('id','desc')->get();
	return view('Administration.pages.managestudent',compact('students'));
}
public function viewstudent($id){
	$students=Administration::find($id);
	return view('Administration.pages.viewstudent',compact('students'));
}
public function hallnotice(){
	$this->AdminAuthCheck();
	$id=Session::get('id');
	$student=Administration::find($id);
	return view('Student.Hallnotice',compact('student'));
}
public function hallviewnotice($id){
	$this->AdminAuthCheck();
	$student=FemaleHall::find($id);
	return view('Student.hallnoticeview',compact('student'));
}
public function departmentviewnotice($id){
	$this->AdminAuthCheck();
	$student=CseDepartment::find($id);
			//dd($student);
	return view('Student.departmentnotice',compact('student'));
}
	/*
		Student Loging section
	*/
		public function studetn_login(){
			return view('welcome');
		}
		public function studentdashboard(){
			$this->AdminAuthCheck();
			return view('Student.dashboard');
		}
		public function login(Request $request){
			
			$request->validate([
				'sreg_no' =>'required',
				'student_password' =>'required',
			]);
			$sreg_no=$request->sreg_no;
			$student_password=$request->student_password;
			$students=Administration::where('sreg_no','=',$sreg_no)
			->where('student_password','=',$student_password)
			->first();
			if($students){
				Session::put('sreg_no',$students->sreg_no);
				Session::put('id',$students->id);
				$this->AdminAuthCheck();
				return redirect()->route('student.dashboard',compact('students'));
			}
			else{
				Session()->flash('success','Invalid User Id  & and password');
				return redirect()->route('student.index');
			}
		}
		protected function loggedOut(Request $request) {
			Session::put('sreg_no',null);
			Session::put('id',null);
			return redirect('student.index');
		}
		public function UpdateProfile(){
			$this->AdminAuthCheck();
			$id=Session::get('id');
			$student=Administration::find($id);
			
			return view('Student.Update',compact('student'));
		}
		public function StudentProfile(){
			$this->AdminAuthCheck();
			$id=Session::get('id');
			$student=Administration::find($id);
		//dd($student);
			return view('Student.StudentProfile',compact('student'));
		}
		public function deannotice(){
			$this->AdminAuthCheck();
			$id=Session::get('id');
			$student=Administration::find($id);
			return view('Student.DeanNotice',compact('student'));
		}
		public function viewnotice($id){
			$this->AdminAuthCheck();
			$student=Dean::find($id);
			return view('Student.deannoticeview',compact('student'));
		}
		public function registernotice(){
			$this->AdminAuthCheck();
			
			$student=Register::all();
			return view('Student.RegisterNotice',compact('student'));
		}
		public function registerviewnotice($id){
			$this->AdminAuthCheck();
			$student=Register::find($id);
			return view('Student.registernoticeview',compact('student'));
		}
		public function changepass(){
			$this->AdminAuthCheck();
			$id=Session::get('id');
			$student=Administration::find($id);
			return view('Student.changepass',compact('student'));
		}
		public function change(Request $request,$id){
			$student=Administration::find($id);
			$student->student_password=$request->student_password;
			$student->save();
			Session()->flash('success','Password Change Successfully!!');
			return redirect()->back();
		}
		public function individualdepartment(){
			$this->AdminAuthCheck();
			$id=Session::get('id');
			$student=Administration::find($id);
			
			
			return view('Student.department',compact('student'));
		}
		
		public function StudentInfoUpdate(Request $request,$id)
		{
			$this->AdminAuthCheck();
			$request->validate([
				
				'hchool_name' => 'required',
				//nullable field//
				'university_name' => 'nullable',
				'institue_name' => 'nullable',
				'ugpass_year' => 'nullable',
				'ugroll_no' => 'nullable',
				'ureg_no' => 'nullable',
				'subject' => 'nullable',
				'ugpa' => 'nullable',
				//student address
				'par_address' => 'required',
				'pre_address' => 'required',
				'mobile' => 'required',
				'gardian_name' => 'required',
				'gardian_mobile' => 'required',
				'gardian_address' => 'required',
				'gardian_relationship' => 'required',
				'gardian_income' => 'required',
				'local_gardian' => 'required',
				'local_gardian_relationship' => 'required',
				'religion' => 'required',
				'age' => 'required',
				'bday' => 'required',
				'community' => 'nullable',
				'scholorship' => 'nullable',
				'enroll_any' => 'nullable',
				'student_pro' => 'nullable',
				'smar_unmr' => 'required',
				's_gap' => 'nullable',
				'village'=>'required',
				'postoffice'=>'required',
				'police_station'=>'required',
				'signature' => 'nullable|image',
				'images' => 'nullable|image',
			]);
			$student=Administration::find($id);
			
			$student->student_email=$request->student_email;
			$student->school_name=$request->school_name;
			$student->hchool_name=$request->hchool_name;
			$student->university_name=$request->university_name;
			$student->institue_name=$request->institue_name;
			$student->ugpass_year=$request->ugpass_year;
			$student->ugroll_no=$request->ugroll_no;
			$student->ureg_no=$request->ureg_no;
			$student->subject=$request->subject;
			$student->ugpa=$request->ugpa;
			$student->par_address=$request->par_address;
			$student->pre_address=$request->pre_address;
			$student->mobile=$request->mobile;
			$student->gardian_name=$request->gardian_name;
			$student->gardian_mobile=$request->gardian_mobile;
			$student->gardian_address=$request->gardian_address;
			$student->gardian_relationship=$request->gardian_relationship;
			$student->gardian_income=$request->gardian_income;
			$student->local_gardian=$request->local_gardian;
			$student->local_gardian_relationship=$request->local_gardian_relationship;
			$student->religion=$request->religion;
			$student->age=$request->age;
			$student->bday=$request->bday;
			$student->community=$request->community;
			$student->scholorship=$request->scholorship;
			$student->enroll_any=$request->enroll_any;
			$student->student_pro=$request->student_pro;
			$student->smar_unmr=$request->smar_unmr;
			$student->s_gap=$request->s_gap;
			
			$student->village=$request->village;
			
			$student->postoffice=$request->postoffice;
			$student->police_station=$request->police_station;
			$student->verify=1;
			if (($request->images) > 0) {
			//insert image
				$images = $request->file('images');
				$img = time() . '.' . $images->getClientOriginalExtension();
				$location = public_path('images/student/'. $img);
				Image::make($images)->save($location);
				$student->images = $img;
			}
			if (($request->signature) > 0) {
			//insert image
				$signature = $request->file('signature');
				$img = time() . '.' . $signature->getClientOriginalExtension();
				$location = public_path('images/signature/'. $img);
				Image::make($signature)->save($location);
				$student->signature = $img;
			}
			$student->save();
			session()->flash('success','Profile Updated Successfully');
			return back();
		}
		public function admission(){
			$this->AdminAuthCheck();
			$id=Session::get('id');
			$student=Administration::find($id);
			return view('Student.Admission',compact('student'));
		}
		public function payment(){
			$this->AdminAuthCheck();
			$id=Session::get('id');
			$student=Administration::find($id);
			return view('Student.Payment',compact('student'));
		}
		public function hallpayment($id){
			$this->AdminAuthCheck();
			$student=Administration::find($id);
			$student->payment=1;
			$student->save();
			session()->flash('success','Payment  Successfully');
			return back();
		}
		public function registration(){
			$this->AdminAuthCheck();
			$id=Session::get('id');
			$studentdatails=Administration::find($id);
			return view('Student.Registration',compact('studentdatails'));
		}
		public function AdminAuthCheck()
		{
			$id=Session::get('id');
			if ($id) {
				return;
			}
			else{
				return Redirect::to('/')->send();
			}
		}
	}