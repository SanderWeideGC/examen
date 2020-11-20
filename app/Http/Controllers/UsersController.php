<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{

    public function index() {
        $users = User::latest()->get();
        return view('backend.users.users', ['users']);
    }

    public function show(User $user) {
        $user = User::find($id);
        return view('users.show', ['user' =>$user]); /* bestaat nog niet*/
    }

    public function create() {
        return view('users.create'); /* bestaat ook nog niet */
    }

    public function store(Request $request) {

    }

    public function edit(User $user) {

    }

    public function update(Request $request, User $user) {

    }

    public function destroy(User $user) {

    }

}
