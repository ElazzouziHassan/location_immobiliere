<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function locations()
    {
        return view('dashboard.locations');
    }
}
