<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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

        request()->validate([
            'UserFirstname' => 'required',
            'UserLastname' => 'required',
            'UserBirthdate' => 'required',
            'email' => 'required',
            'UserStreet' => 'required',
            'UserHousenumber' => 'required',
            'UserPostalcode' => 'required',
            'UserCity' => 'required',
            'UserPassword' => 'required'
        ]);

        User::create([
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
            'UserPassword' => request('password')
        ]);

        return redirect('/admin/leden');
    
    }

    public function edit(User $user) {
        return view('backend.users.edit', ['user' =>$user]);
    }

    public function update(User $user) {

        request()->validate([
            'UserFirstname' => 'required',
            'UserLastname' => 'required',
            'UserBirthdate' => 'required',
            'email' => 'required',
            'UserStreet' => 'required',
            'UserHousenumber' => 'required',
            'UserPostalcode' => 'required',
            'UserCity' => 'required',
            'UserPassword' => 'required'
        ]);

        $user->UserFirstname = request('firstname');
        $user->UserPrefix = request('prefix');
        $user->UserLastname = request('lastname');
        $user->UserGender = request('gender');
        $user->UserBirthdate = request('birthdate');
        $user->UserPhonenumber = request('phonenumber');
        $user->email = request('email');
        $user->UserStreet = request('street');
        $user->UserHousenumber = request('housenumber');
        $user->UserPostalcode = request('postalcode');
        $user->UserCity = request('city');
        $user->UserPassword = request('password');

        $user->save();

        return redirect('/admin/leden');
    }

    public function destroy(User $user) {

    }

}
