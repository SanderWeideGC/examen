<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $guarded = [];

    public function formatParticipantAmount() {
        // dd($this->tournamentParticipantAmount);
        switch($this->TournamentParticipantAmount) {
            case 1: 
                return "4";
            break;

            case 2: 
                return "8";
            break;

            case 3: 
                return "16";
            break;

            case 4: 
                return "32";
            break;
        }
    }
}
