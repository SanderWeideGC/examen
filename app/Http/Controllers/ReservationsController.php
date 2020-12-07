<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index()
    {
        $reservations = Reservation::get();

        return view('backend.reservations.index', compact('reservations'));
    }

    public function show(Reservation $reservation)
    {
        return view('backend.reservations.show', ['reservation' => $reservation]);
    }

    public function create()
    {
        return view('backend.reservations.create');
    }

    public function store()
    {
        $reservation = new Reservation();

        $reservation->LaneID = request('reserveringBaanID');
        $reservation->UserID = request('reserveringLidID');
        $reservation->ReservationStartTime = request('reserveringStartTime');
        $reservation->ReservationEndTime = request('reserveringEndTime');
        $reservation->ReservationDate = request('reserveringDate');

        $reservation->save();

        return redirect(route('backend.reservations'));
    }

    public function edit(Reservation $reservation)
    {
        return view('backend.reservations.edit', ['reservation' => $reservation]);
    }

    public function update(Reservation $reservation)
    {
        $reservation->LaneID = request('reserveringBaanID');
        $reservation->UserID = request('reserveringLidID');
        $reservation->ReservationStartTime = request('reserveringStartTime');
        $reservation->ReservationEndTime = request('reserveringEndTime');
        $reservation->ReservationDate = request('reserveringDate');

        $reservation->save();

        return redirect(route('reservations.edit', $reservation));
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect(route('backend.reservations'));
    }

    //frontend
    public function getAvailableTime($lane, $date)
    {
        $availableTimes = 
        [
            "12:00:00",
            "13:00:00",
            "14:00:00",
            "15:00:00",
            "16:00:00",
            "17:00:00",
            "18:00:00",
            "19:00:00",
            "20:00:00",
            "21:00:00",
            "22:00:00",
            "23:00:00",

        ];

        $reservations = Reservation::get()->where('ReservationDate', $date)->where('LaneID', $lane);
        foreach($reservations as $key=>$value){
            if ($position = array_search($value->ReservationStartTime, $availableTimes, true)){
                unset($availableTimes[$position]);
            }
        }
        
        echo json_encode($availableTimes);

    }

    
    public function userStore()
    {
        // dd(request('reservationDate'));
        $reservation = new Reservation();

        $reservation->LaneID = request('reservationLane');
        $reservation->UserID = Auth::id();
        $reservation->ReservationStartTime = request('reserveringStartTime');
        $reservation->ReservationEndTime = date('H:i:s', strtotime(request('reserveringStartTime') . ' +1 hour'));
        $reservation->ReservationDate = request('reservationDate');

        $reservation->save();
        

        return redirect(route('frontend.reservation'));
    }

}
