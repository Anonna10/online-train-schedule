<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StationController extends Controller
{
    public function platform()
    {
        return view('Backend.Layouts.Station');
        

    }
}
