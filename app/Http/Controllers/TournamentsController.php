<?php

namespace App\Http\Controllers;

use App\Tournament;
use Illuminate\Http\Request;

class TournamentsController extends Controller
{
    public function index() {
        $tournaments = Tournament::get();

        return view('backend.tournaments', compact('tournaments'));
    }

    public function show(Lane $lane) {
        return view('backend.lanes.show', compact('lane'));
    }

    public function create() {
        return view('backend.lanes.create');
    }

    public function store() {
        Lane::create($this->validateLane());

        return redirect('/admin/banen')->with('success', 'A new lane was successfully created!');
    }

    public function edit(Lane $lane) {
        return view('backend.lanes.edit', compact('lane'));
    }

    public function update(Lane $lane) {
        $lane->update($this->validateLane());

        return redirect($lane->path());
    }

    public function destroy() {
        $lane->delete();

        return redirect(route('backend.lanes.index'))->with('success', 'The lane was successfully deleted!');
    }

    protected function validateLane()
    {
        return request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'phone_number' => 'required',
            'address' => 'required',
            'country' => 'required',
            'city_town' => 'required',
            'password' => 'required|same:confirm_password', 'string', 'min:8',
        ]);   
    }
}
