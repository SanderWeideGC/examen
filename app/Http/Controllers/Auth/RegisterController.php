<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = '/';

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
            'userFirstName' => ['required', 'string', 'max:255'],
            'userPrefix' => ['nullable'],
            'userLastName' => ['required', 'string', 'max:255'],
            'userPhonenumber' => ['required', 'string', 'max:255'],
            'userCity' => ['required', 'string', 'max:255'],
            'userStreet' => ['required', 'string', 'max:255'],
            'userHousenumber' => ['required', 'string', 'max:255'],
            'userPostalcode' => ['required', 'string', 'max:255'],
            'userGender' => ['required', 'string', 'max:255'],
            'userBirthdate' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
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
        return User::create([
            'UserFirstname' => $data['userFirstName'],
            'UserPrefix' => $data['userPrefix'],
            'UserLastname' => $data['userLastName'],
            'UserPhonenumber' => $data['userPhonenumber'],
            'UserCity' => $data['userCity'],
            'UserStreet' => $data['userStreet'],
            'UserHousenumber' => $data['userHousenumber'],
            'UserPostalcode' => $data['userPostalcode'],
            'UserGender' => $data['userGender'],
            'UserBirthdate' => $data['userBirthdate'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
        ]);
    }
}
