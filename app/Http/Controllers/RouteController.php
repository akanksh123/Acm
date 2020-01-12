<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Event;

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
        $events =Event::orderBy('id','desc')->paginate(3);
        return view('/events')->with(['events' => $events]);
    }

    

    public function eventInfo(Event $id)
    {
        //$res=events::where('id','=',$id)->get();
        return view('/eventdetails', ['res' => $id]);
    }
}