<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lane extends Model
{   
    protected $guarded = [];

    public function formatStatus() {
        switch($this->LaneStatus) {
            case 1: 
                return "Beschikbaar";
            break;

            case 2: 
                return "Niet-Beschikbaar";
            break;
        }
    }

    public function formatCategory() {
        switch($this->LaneCategory) {
            case 1: 
                return "Tennis";
            break;

            case 2: 
                return "Squash";
            break;
        }
    }

    public function formatPositioning() {
        switch($this->LanePositioning) {
            case 1: 
                return "Binnen";
            break;

            case 2: 
                return "Buiten";
            break;
        }
    }
}
