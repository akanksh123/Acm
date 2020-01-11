<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddEvent;
use App\Event;
use App\EventImage;

class AdminController extends Controller
{
    public function showAddEvents()
    {
        return view('/addeventpage');
    }

    public function showAddTeamPage()
    {
        return view('/addteam');
    }

    public function showManageTeam()
    {
        return view('/manageteam');
    }

    public function showManageEvents()
    {
        return view('/manageevents');
    }

    public function addEvents(AddEvent $req)
    {
        $data = $req->validated();
        $data['eventimage'] = substr($req->file('eventimage')->store('public'), 7);
        $rep = Event::create($data);
        if ($req->has('images')) {
            foreach ($req->file('images') as $image) {
                EventImage::create(['image' => substr($image->store('public'), 7), 'event_id' => $rep->id]);
            }
        }
        return redirect('/dashboard')->with('alert', 'Event added successfully !');
    }
}