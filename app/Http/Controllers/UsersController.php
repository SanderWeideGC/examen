<?php

namespace App\Http\Controllers;

use App\User;
use App\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function index() {
        $users = User::latest()->get();
        return view('backend.users.users', ['users'=>$users]);
    }

    public function show(User $user) {
        return view('backend.users.show', ['user' =>$user]);
    }

    public function create() {
        return view('backend.users.create');
    }

    public function store() {
        User::create($this->validateUser());
        return redirect('/admin/leden');
    }

    public function edit(User $user) {
        return view('backend.users.edit', ['user' =>$user]);
    }

    public function update(User $user) {
        $user->update($this->validateUser());
        return redirect('/admin/leden');
    }

    public function delete(User $user, Request $request) {
        if($request->ajax()){
            Participant::where('UserID', $user->id)->delete();
            $user->delete();
        } else {
            die("Deze pagina mag alleen via AJAX uitgevoerd worden.");
        }
    }

    protected function validateUser() {

        if(request()->isMethod('PUT')) {
            request()->validate([
                'firstname' => 'required',
                'prefix',
                'lastname' => 'required',
                'gender' => 'required',
                'birthdate' => 'required',
                'phonenumber' => 'required',
                'email' => 'required',
                'street' => 'required',
                'housenumber' => 'required',
                'postalcode' => 'required',
                'city' => 'required',
                'userIsAdmin'
            ]);

            return [
                'UserFirstname' => request('firstname'),
                'UserPrefix' => request('prefix'),
                'UserLastname' => request('lastname'),
                'UserGender' => request('gender'),
                'UserBirthdate' => request('birthdate'),
                'UserPhonenumber' => request('phonenumber'),
                'email' => request('email'),
                'UserStreet' => request('street'),
                'UserHousenumber' => request('housenumber'),
                'UserPostalcode' => request('postalcode'),
                'UserCity' => request('city'),
                'UserIsAdmin' => request('userIsAdmin')
            ];
        } else {
            request()->validate([
                'firstname' => 'required',
                'prefix',
                'lastname' => 'required',
                'gender' => 'required',
                'birthdate' => 'required',
                'phonenumber' => 'required',
                'email' => 'required|unique:users',
                'street' => 'required',
                'housenumber' => 'required',
                'postalcode' => 'required',
                'city' => 'required',
                'password' => 'required',
                'userIsAdmin'
            ]);

            return [
                'UserFirstname' => request('firstname'),
                'UserPrefix' => request('prefix'),
                'UserLastname' => request('lastname'),
                'UserGender' => request('gender'),
                'UserBirthdate' => request('birthdate'),
                'UserPhonenumber' => request('phonenumber'),
                'email' => request('email'),
                'UserStreet' => request('street'),
                'UserHousenumber' => request('housenumber'),
                'UserPostalcode' => request('postalcode'),
                'UserCity' => request('city'),
                'password' => Hash::make(request('password')),
                'UserIsAdmin' => request('userIsAdmin')
            ];
        }
        
        
    }

}
