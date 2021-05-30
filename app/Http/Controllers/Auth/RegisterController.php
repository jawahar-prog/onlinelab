<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // password with phone number first and last four characters
        $data['password'] = substr($data['inputphone'],0,4).substr($data['inputphone'],6,4);

        $userData = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'user_type' => $data['user_type'],
            'lab_code' => $data['lab_code'],
            'center_name' => $data['center_name'],
            'address1' => $data['address_first'],
            'address2' => $data['address_second'],
            'picode' => $data['picode'],
            'inputphone' => $data['inputphone'],
            'password' => Hash::make($data['password']),
        ]);

            $details = [
        'title' => 'Patho Lab Registration',
        'body' => 'Hi'.$data['name'].','.PHP_EOL.'Profile Detail'.PHP_EOL.'User Name: '.$data['name'].PHP_EOL.'Password : '.$data['password']
        ];
       
        \Mail::to($data['email'])
            ->send(new \App\Mail\PathoRegister($details));
        return $userData;
    }

     public function redirectTo()
    {
        if (Auth()->user()->user_type == 2) {
            return '/admin/dashboard';
        } else if (Auth()->user()->user_tyoe == 3) {
            return '/app';
        } else {
            return '/home';
        }
    }
}
