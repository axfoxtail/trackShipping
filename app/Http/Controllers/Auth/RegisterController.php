<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/myaccount';

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
            'fname' => ['required', 'string', 'max:255'],
            // 'lname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'max:255']
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

        if($data['role'] == 'normal'){
            return User::create([
                'fname' => $data['fname'],
                'lname' => $data['lname'],
                'username' => $data['username'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'fax' => $data['fax'],
                'password' => Hash::make($data['password']),
                'role' => $data['role'],

                'address' => $data['address'],
                'city' => $data['city'],
                'country' => $data['country'],
                'postcode' => $data['postcode'],
                'partner_email' => $data['partner_email'],

            ]);
        } else {
            return User::create([
                'fname' => $data['fname'],
                'bname' => $data['bname'],
                'username' => $data['username'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'fax' => $data['fax'],
                'url' => $data['url'],
                'password' => Hash::make($data['password']),
                'role' => $data['role'],

                'address' => $data['address'],
                'city' => $data['city'],
                'country' => $data['country'],
                'postcode' => $data['postcode'],

                'bnature' => $data['bnature'],
                'btype' => $data['btype'],
                'title' => $data['title'],
                'bfname' => $data['bfname'],
                'blname' => $data['blname'],
          
          

              
            ]);

        }
        
    }
}
