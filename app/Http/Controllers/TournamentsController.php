<?php

namespace App\Http\Controllers;

use App\Tournament;
use App\Participant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TournamentsController extends Controller
{
    public function index() {
        $tournaments = Tournament::get();

        return view('backend.tournaments.index', compact('tournaments'));
    }

    public function show(Tournament $tournament) {
        $participants = Participant::where('TournamentID', $tournament->id)->get();
        $count = $participants->count();
        $data = [];
        foreach($participants as $partic) {
            $user = User::where('id', $partic->UserID)->get();
            array_push($data, $user);
        }
        return view('backend.tournaments.show', compact(['tournament', 'data', 'count']));
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
            Participant::where('TournamentID', $tournament->id)->delete();
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

    public function indexOpenTournaments() {
        $tournaments = Tournament::get();

        return view('frontend.toernooien', compact('tournaments'));
    }

    public function storeParticipation() {

        $user = Participant::where('UserID', Auth::id())->where('TournamentID', request('tournamentId'))->get();
        if ($user->count() == 0) {
            Participant::create($this->validateParticipant());
            return redirect('/toernooien')->with('message', 'Je bent succesvol ingeschreven voor dit toernooi!');
        } else {
            return redirect('/toernooien')->with('message', 'Je bent al ingeschreven voor dit toernooi!');
        }

        
    }
    protected function validateParticipant()
    {
        request()->validate([
            'tournamentId' => 'required',
        ]);   

        return [
            'TournamentID' => request('tournamentId'),
            'UserID' => Auth::id()
        ];
    }
}
