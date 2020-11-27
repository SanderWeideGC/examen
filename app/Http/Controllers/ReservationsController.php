<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $reservations = Reservation::latest()->get();
=======
        # code...
>>>>>>> 3a7b17d... crud functions in all controllers
    }

    public function show($id)
    {
        # code...
    }

    public function create()
    {
        # code...
    }

    public function store()
    {
        # code...
    }

    public function edit()
    {
        # code...
    }

    public function update()
    {
        # code...
    }

    public function destroy()
    {
        # code...
    }
}
