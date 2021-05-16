<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Hash;

class HomeController extends Controller
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

        $userDetail = User::with('ReportDetail')->where('id',Auth::id())->first();

        if( $userDetail->user_type != 1 ){
            abort('404');
        }

        return view('home', compact('userDetail'));
    }
    public function updatePassword(Request $request){
        
        
        if( Auth::User()->user_type != 1 ){
            abort('404');
        }
        return view('updatePassword');
    }
    // save password
    public function savePassword(Request $request){
        
        if( Auth::User()->user_type != 1 ){
            abort('404');
        }
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
