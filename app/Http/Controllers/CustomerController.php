<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function details()
    {
        return view('Backend.Layouts.Customers');
        

    }

}
