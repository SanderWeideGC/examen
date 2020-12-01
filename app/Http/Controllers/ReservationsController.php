<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index()
    {
        $reservations = Reservation::get();

        return view('backend.reservations.index', compact('reservations'));
    }

    public function show($id)
    {
        # code...
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
        $reservation->ReservationTime = request('reserveringTime');
        $reservation->ReservationDate = request('reserveringDate');

        $reservation->save();

        return redirect(route('backend.reservations'));
    }

    public function edit()
    {
        # code...
    }

    public function update()
    {
        # code...
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect(route('backend.reservations'));
    }
}