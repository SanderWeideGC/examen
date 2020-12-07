<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function formatReservationDate() {
        return date('d M. Y', strtotime($this->ReservationDate));
    }

    public function formatStartTime() {
        return date("H:i", strtotime($this->ReservationStartTime));
    }

    public function formatEndTime() {
        return date("H:i", strtotime($this->ReservationEndTime));
    }
}
