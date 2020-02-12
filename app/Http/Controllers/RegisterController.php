<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Administration;
use App\Imports\CsvImport;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Validation\Rule;
use App\Dean;
use App\Register;
use App\CseDepartment;
use App\FemaleHall;
use Session;
use Image;
class RegisterController extends Controller
{
    public function uploadroll_dept(){
        return view('Register.pages.studentupload');
    }
    public function deactive($id){
        $student=Administration::find($id);
        $student->status=0;
        $student->save();
        session()->flash('success','Student Deactive Successfully!!');
        return back();
    }
    public  function active($id){
        $student=Administration::find($id);
        $student->status=1;
        $student->save();
        session()->flash('success','Student Active Successfully!!');
        return back();
    }
    public function import(Request $request)
    {
        $request->validate([
            'file' =>'required|file|mimes:csv,txt|max:2048',
        ]);

        if($request->file('file'))
        {
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path, function($reader)
            {
            })->get();
            if(!empty($data) && $data->count())
            {
                foreach ($data->toArray() as $row)
                {
                    if(!empty($row))
                    {
                        $dataArray[] =
                        [
                            //'name' => $row['name'],
                            'dept' => $row['dept'],
                            'roll_number' => $row['roll_number'],
                            'reg_number' => $row['reg_number'],
                            //'created_at' => $row['created_at']
                        ];
                    }
                    if(!empty($dataArray)) {
                        foreach ($dataArray as $array) {
                            DB::table('administrations')
                            ->where('sreg_no', $row['sreg_no'])
                            ->update($array);
                        }
                    }                }
                }
            }
            session()->flash('success','Roll & Dept Inserted Successfully!!');
            return back();
        }
        public function view(){
            $student=Administration::whereNull('dept')->where('verify',2)->get();
            return view('Register.pages.student',compact('student'));
        }
        public function profile($id){
            $students=Administration::find($id);
            return view('Register.pages.profile',compact('students'));
        }
        public function studentroll($id){
            $student=Administration::find($id);
            return view('Register.pages.deptroll',compact('student'));
        }
        public function rollstore(Request $request,$id){
            $student=Administration::find($id);
            $request->validate([
                'roll_number' => 'required',
                'dept' => 'required',
            ]);
            $student->roll_number=$request->roll_number;
            $student->dept=$request->dept;
            $student->save();
            session()->flash('success','Roll & Dept Inserted Successfully!!');
            return back();
        }
        public function admited(){
            $student=Administration::whereNotNull('dept')->whereNotNull('roll_number')->get();
            return view('Register.pages.admitedstudent',compact('student'));
        }
        public function upload(){
            return view('Register.pages.upload');
        }
        public function uploadnotice(Request $request){
            $student = new Register;
            $student->message=$request->message;
            $student->name=$request->name;
            if (($request->image) > 0) {
                //insert image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/register/'. $img);
                Image::make($image)->save($location);
                $student->image = $img;
            }
            $student->save();
            session()->flash('success','Upload Notice Successfully!!');
            return back();
        }
        public function viewnotice(){
            $student = Register::orderBy('created_at', 'desc')->take(20)->get();
            return view('Register.pages.notice',compact('student'));
        }
        public function registernotice($id){
            $student=Register::find($id);
            return view('Register.pages.uploadednotice',compact('student'));
        }
        public function noticedelete($id){
            $student=Register::find($id);
            $student->delete();
            session()->flash('success','Deleted Successfully!!');
            return back();
        }
        public function noticeupdate($id){
            $student=Register::find($id);
            return view('Register.pages.update',compact('student'));
        }
        public function updatednotice(Request $request,$id){
            $student=Register::find($id);
            $student->name=$request->name;
            $student->message=$request->message;
            if (($request->image) > 0) {
                //insert image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/register/'. $img);
                Image::make($image)->save($location);
                $student->image = $img;
            }
            $student->update();
            session()->flash('success',' Notice Updated Successfully!!');
            return back();
        }
        public function pharmacy(){
            $student=Administration::where('dept',10)->get();
            return view('Register.pages.dept.pharmacy',compact('student'));
        }
        public function genetics(){
            $student=Administration::where('dept',6)->get();
            return view('Register.pages.dept.genetics',compact('student'));
        }
        public function microbiology(){
            $student=Administration::where('dept',3)->get();
            return view('Register.pages.dept.microbilogy',compact('student'));
        }
        public function fisharies(){
            $student=Administration::where('dept',4)->get();
            return view('Register.pages.dept.fisharies',compact('student'));
        }
        public function physio(){
            $student=Administration::where('dept',24)->get();
            return view('Register.pages.dept.physio',compact('student'));
        }
        public function nurshing(){
            $student=Administration::where('dept',26)->get();
            return view('Register.pages.dept.nurshing',compact('student'));
        }
        public function cse(){
            $student=Administration::where('dept',1)->get();
            return view('Register.pages.dept.cse',compact('student'));
        }
        public function eee(){
            $student=Administration::where('dept',11)->get();
            return view('Register.pages.dept.eee',compact('student'));
        }
        public function ipe(){
            $student=Administration::where('dept',7)->get();
            return view('Register.pages.dept.ipe',compact('student'));
        }
        public function che(){
            $student=Administration::where('dept',5)->get();
            return view('Register.pages.dept.che',compact('student'));
        }
        public function pme(){
            $student=Administration::where('dept',8)->get();
            return view('Register.pages.dept.pme',compact('student'));
        }
        public function te(){
            $student=Administration::where('dept',22)->get();
            return view('Register.pages.dept.te',compact('student'));
        }
        public function bme(){
            $student=Administration::where('dept',19)->get();
            return view('Register.pages.dept.bme',compact('student'));
        }
        public function phy(){
            $student=Administration::where('dept',13)->get();
            return view('Register.pages.dept.phy',compact('student'));
        }
        public function chemi(){
            $student=Administration::where('dept',14)->get();
            return view('Register.pages.dept.chemi',compact('student'));
        }
        public function math(){
            $student=Administration::where('dept',15)->get();
            return view('Register.pages.dept.math',compact('student'));
        }
        public function est(){
            $student=Administration::where('dept',2)->get();
            return view('Register.pages.dept.est',compact('student'));
        }
        public function nft(){
            $student=Administration::where('dept',9)->get();
            return view('Register.pages.dept.nft',compact('student'));
        }
        public function appt(){
            $student=Administration::where('dept',17)->get();
            return view('Register.pages.dept.appt',compact('student'));
        }
        public function ais(){
            $student=Administration::where('dept',18)->get();
            return view('Register.pages.dept.ais',compact('student'));
        }
        public function mark(){
            $student=Administration::where('dept',23)->get();
            return view('Register.pages.dept.mark',compact('student'));
        }
        public function manage(){
            $student=Administration::where('dept',21)->get();
            return view('Register.pages.dept.manage',compact('student'));
        }
        public function finance(){
            $student=Administration::where('dept',20)->get();
            return view('Register.pages.dept.finance',compact('student'));
        }
        public function english(){
            $student=Administration::where('dept',16)->get();
            return view('Register.pages.dept.english',compact('student'));
        }
        public function pess(){
            $student=Administration::where('dept',12)->get();
            return view('Register.pages.dept.pess',compact('student'));
        }
    }