<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function team()
    {
        return view('team');
    }

    public function events()
    {
        return view('events');
    }
}
