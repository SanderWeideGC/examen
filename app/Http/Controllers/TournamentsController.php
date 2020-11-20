<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TournamentsController extends Controller
{
    public function index() {
        return view('backend.tournaments');
    }
}
