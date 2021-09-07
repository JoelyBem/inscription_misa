<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngularController extends Controller
{
    //function which will return angularview
    public function index()
    {
        return view('angular');
    }
}
