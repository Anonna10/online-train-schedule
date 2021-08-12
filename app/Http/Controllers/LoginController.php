<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Ragistration()
    {
        return view('Backend.Layouts.Login');
        

    }
    public function Ragistrationpost(Request $ragistration)
    {
        
dd($ragistration->all());

    }
}
