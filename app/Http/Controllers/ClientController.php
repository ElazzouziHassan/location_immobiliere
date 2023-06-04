<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clients()
    {
        return view('dashboard.clients');
    }

    public function ajouterclient()
    {
        return view('dashboard.ajouter-client');
    }
}
