<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Lane;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
// Begin admin
    // Alle reserveringen ophalen
    public function index()
    {
        $reservations = Reservation::get();

        return view('backend.reservations.index', compact('reservations'));
    }

    // Een specifieke reservering ophalen
    public function show(Reservation $reservation)
    {
        return view('backend.reservations.show', ['reservation' => $reservation]);
    }

    // Create form laten zien
    public function create()
    {
        return view('backend.reservations.create');
    }

    // Data uit create form opslaan in database
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

    // Specifieke reservering ophalen en data en edit form zetten
    public function edit(Reservation $reservation)
    {
        return view('backend.reservations.edit', ['reservation' => $reservation]);
    }

    // Data uit edit form opslaan in de database
    public function update(Reservation $reservation)
    {
        $reservation->LaneID = request('reserveringBaanID');
        $reservation->UserID = request('reserveringLidID');
        $reservation->ReservationStartTime = request('reserveringStartTime');
        $reservation->ReservationEndTime = request('reserveringEndTime');
        $reservation->ReservationDate = request('reserveringDate');

        $reservation->save();

        return redirect(route('backend.reservations'));
    }

    // Specifieke reservering verwijderen uit de database
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect(route('backend.reservations'));
    }
// Eind admin

// Begin frontend

    // Beschikbare tijden ophalen voor AJAX request
    public function getAvailableTime($lane, $date)
    {
        // Alle beschikbare tijden
        $availableTimes = 
        [
            1 => "12:00:00",
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

        ];
        // Alle reserveringen voor specifieke dag en baan ophalen
        $reservations = Reservation::get()->where('ReservationDate', $date)->where('LaneID', $lane);
        foreach($reservations as $key=>$value){
            // controleren of de start tijd voor komt in de beschikbare tijden
            if ($position = array_search($value->ReservationStartTime, $availableTimes, true)){
                // Al gereserveerde tijden uit beschikbare tijden halen
                unset($availableTimes[$position]);
            }
        }
        // Data terug sturen als json voor AJAX request
        echo json_encode($availableTimes);

    }

    public function userCreate()
    {
        $lanes = Lane::get();
        return view('frontend.reservation', [
            "userID"=>Auth::id(),
            "lanes"=> $lanes
            ]);
    }

    // Reservering die een gebruiker gemaakt heeft opslaan in de database
    public function userStore()
    {
        $reservation = new Reservation();

        $reservation->LaneID = request('reservationLane');
        $reservation->UserID = Auth::id();
        $reservation->ReservationStartTime = request('reserveringStartTime');
        $reservation->ReservationEndTime = date('H:i:s', strtotime(request('reserveringStartTime') . ' +1 hour'));
        $reservation->ReservationDate = request('reservationDate');

        $reservation->save();

        return redirect(route('frontend.reservation'));
    }
// Eind frontend
}
