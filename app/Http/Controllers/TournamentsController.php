<?php

namespace App\Http\Controllers;

use App\Tournament;
use Illuminate\Http\Request;

class TournamentsController extends Controller
{
    public function index() {
        $tournaments = Tournament::get();

        return view('backend.tournaments.index', compact('tournaments'));
    }

    public function show(Tournament $tournament) {
        return view('backend.tournaments.show', compact('tournament'));
    }

    public function create() {
        return view('backend.tournaments.create');
    }

    public function store() {
        Tournament::create($this->validateTournament());

        return redirect('/admin/toernooien');
    }

    public function edit(Tournament $tournament) {
        return view('backend.tournaments.edit', compact('tournament'));
    }

    public function update(Tournament $tournament) {
        $tournament->update($this->validateTournament());

        return redirect(route('backend.tournaments'));
    }

    public function destroy(Tournament $tournament, Request $request) {
        if($request->ajax()){
            $tournament->delete();
        } else {
            die("Deze pagina mag alleen via AJAX uitgevoerd worden.");
        }
    }

    protected function validateTournament()
    {
        return request()->validate([
            'tournamentTitle' => 'required',
            'tournamentDescription' => 'required',
            'tournamentCloseDate' => 'required',
            'tournamentParticipantAmount' => 'required',
            'tournamentStartDate' => 'required',
            'tournamentEndDate' => 'required',
        ]);   
    }
}
