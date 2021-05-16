<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Report;
use App\Appointment;
use App\Customer;
use DB;
use Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $user = $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if( Auth::User()->user_type != 2 ){
            abort('404');
        }    
        return view('admin.dashboard');
    }

    /**
     * Show the application pateint.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Patient()
    {
        if( Auth::User()->user_type != 2 ){
            abort('404');
        }
        $userDetail = DB::table('reports')->join('users', function ($join) {
            $join->on('users.id', '=', 'reports.user_id')
                 ->where('users.user_type', '=', 1);
        })->paginate();
        //dd($userDetail);
        return view('admin.patatient', compact('userDetail'));
    }

    /**
     * Show the application pateint.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function PatientData()
    {
        if( Auth::User()->user_type != 2 ){
            abort('404');
        }
        $userDetail = User::with('ReportDetail')->get()->where('status',1)->toArray();
        return response()
            ->json(['userDetail' => $userDetail]);
    }
    public function appointmentsList(){

        if( Auth::User()->user_type != 2 ){
            abort('404');
        }
       $Appointment = Appointment::where('status',1)->paginate(25);
        return view('admin.appointment', compact('Appointment'));
    }


    public function pathologyCenter(){

        if( Auth::User()->user_type != 2 ){
            abort('404');
        }
       $center = Customer::where('lab_status',1)->paginate(25);
        return view('admin.center', compact('center'));
    }

    public function downloadAppointment()
    {
        if( Auth::User()->user_type != 2 ){
            abort('404');
        }
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=appointment.xlsx",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $reviews = Appointment::all();
        $columns = array('Name', 'PatientID', 'Phone Number', 'Gender', 'Age', 'Date & Time');
       
        $filename = public_path('/reports/appoint.csv');
            $file = fopen($filename, 'w');
            fputcsv($file, $columns);
                foreach($reviews as $review) {
                    fputcsv($file, array($review->lab_customer_fname,$review->lab_customer_cd,$review->lab_cust_mobile,$review->lab_customer_gender,$review->lab_Age,
                    \Carbon\Carbon::parse($review->lab_report_date)->format("d/m/Y g:i A ")));
                }
            fclose($file);
        
        return Response::download($filename, 'Appointment.csv', $headers);
    }

    // Patients

    public function downloadPatient()
    {
        if( Auth::User()->user_type != 2 ){
            abort('404');
        }
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=patient.xlsx",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );
        $filename = public_path('/reports/patient.csv');
        $users = User::where('status',1)->get();
        $columns = array('Name', 'PatientID', 'Phone Number','Date & Time');

            $file = fopen($filename, 'w');
            fputcsv($file, $columns);

                foreach($users as $review) {
                    fputcsv($file, array($review->name, '082PAT'.sprintf("%04d", $review->id),
                     \Carbon\Carbon::parse($review->report_date)->format("d/m/Y g:i A ")));
                }
            fclose($file);
        return Response::download($filename, 'Patient.csv', $headers);
    }
    //  Pathology collelction center

    public function downloadCenter()
    {
        if( Auth::User()->user_type != 2 ){
            abort('404');
        }
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=center.xlsx",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );
        $filename = public_path('/reports/center.csv');
        $reviews = Customer::where('lab_status',1)->get();
        $columns = array('ID','Name', 'Address', 'Pincode', 'Registration Date');

            $file = fopen($filename, 'w');
            fputcsv($file, $columns);

                foreach($reviews as $review) {
                    fputcsv($file, array('082PAT'.sprintf("%04d", $review->id), $review->lab_ctrname, $review->lab_addline1.', '.$review->lab_addline2, $review->lab_pincode, $review->lab_Age,
                     \Carbon\Carbon::parse($review->lab_regdate)->format("d/m/Y g:i A ")));
                }
            fclose($file);
        return Response::download($filename, 'pathologyCenter', $headers);
    }

    // delete appointment
    public function deleteAppointment(Request $request){
        
        if( Auth::User()->user_type != 2 ){
            abort('404');
        }
        $appointment = Appointment::where('lab_customer_cd',$request->id)->update(['status'=>3]);
        
        return redirect()->back()->with('success','Row deleted successfuly.');

    }
     // delete patient
    public function deletePatient(Request $request){
        
        if( Auth::User()->user_type != 2 ){
            abort('404');
        }
        $patient = User::where('id',$request->id)->update(['status'=>3]);
        
        return redirect()->back()->with('success','Row deleted successfuly.');

    }

     // delete patient
    public function deleteCenter(Request $request){

        if( Auth::User()->user_type != 2 ){
            abort('404');
        }
        $patient = DB::table('lab_collection_ctr')->where('lab_ctrid',$request->id)->update(['lab_status'=>3]);
        
        return redirect()->back()->with('success','Row deleted successfuly.');

    }
    // get profile
    public function getProfile(Request $request){
        
        if( Auth::User()->user_type != 2 ){
            abort('404');
        }
        $user = User::find($request->id);

        return view('admin.profile',compact('user'));

    }

    // update profile
    public function updateProfile(Request $request){
        
        if( Auth::User()->user_type != 2 ){
            abort('404');
        }
        $inputs = $request->all();
        $user['lab_code'] = $inputs['lab_code'];
        $user['center_name'] = $inputs['center_name'];
        $user['address1'] = $inputs['address_first'];
        $user['address2'] = $inputs['address_second'];
        $user['picode'] = $inputs['picode'];
        $user['inputphone'] = $inputs['inputphone'];

        $updateProfile = User::where('id',$inputs['prof_id'])->update($user);
        return redirect()->back()->with('success','Profile updated successfuly.');

    }
    // update password
    public function updatePassword(Request $request){
        
        // if( Auth::User()->user_type != 2 ){
        //     abort('404');
        // }
        return view('admin.updatePassword');
    }
    // save password
    public function savePassword(Request $request){
        
        // if( Auth::User()->user_type != 2 ){
        //     abort('404');
        // }
        $validator = Validator::make($request->all(), [
                        'old_password' =>'required',
                        'password' => ['required', 'confirmed']
                    ]);
        $user = User::where('id',Auth::id())->first();
        if (Hash::check($request->old_password, $user->password)) {
             $user->password = Hash::make($request->password);
            $user->save ();
            return redirect()->back()->with('success','password updated successfuly.');
           
        }else{
            return redirect()->back()->with('error','Old password did not match, Try again.');
        }
    }
}
