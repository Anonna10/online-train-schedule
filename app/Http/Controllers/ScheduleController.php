<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function arrival()
    {
        return view('Backend.Layouts.Schedule');
        

    }
}
