<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function home()
    {
        return view('calendars.home');
    }
}
