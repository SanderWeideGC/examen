<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanesController extends Controller
{
    public function index() {
        return view('backend.lanes');
    }
}
