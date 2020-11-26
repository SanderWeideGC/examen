<?php

namespace App\Http\Controllers;

use App\Lane;
use Illuminate\Http\Request;

class LanesController extends Controller
{
    public function index() {
        $lanes = Lane::get();

        return view('backend.lanes.index', compact('lanes'));
    }  

    public function show(Lane $lane) {
        return view('backend.lanes.show', compact('lane'));
    }

    public function create() {
        return view('backend.lanes.create');
    }

    public function store() {
        Lane::create($this->validateLane());

        return redirect('/admin/banen');
    }

    public function edit(Lane $lane) {
        return view('backend.lanes.edit', compact('lane'));
    }

    public function update(Lane $lane) {
        $lane->update($this->validateLane());

        return redirect(route('backend.lanes'));
    }

    public function destroy(Lane $lane, Request $request) {
        if($request->ajax()){
            $lane->delete();
        } else {
            die("Deze pagina mag alleen via AJAX uitgevoerd worden.");
        }
    }

    protected function validateLane() {
        

        return request()->validate([
            'laneName' => 'required',
            'laneCategory' => 'required',
            'lanePositioning' => 'required',
            'laneLenght' => 'required',
            'laneWidth' => 'required',
            'laneFlooring' => 'required',
            'laneLastCheck' => 'required',
            'laneLastService' => 'required',
            'laneStatus' => 'required',
        ]);   
    }
}
