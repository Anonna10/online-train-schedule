<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketBookingController extends Controller
{
    public function Conformation()
    {
        return view('Backend.Layouts.TicketBooking');
        

    }
}
