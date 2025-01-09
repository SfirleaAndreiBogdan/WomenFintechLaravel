<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function view(){
        $events = Events::all();
        return view('components.events',compact('events'));
    }


    public function viewAddEvent(){

        return view('components.add-event');
    }


    public function addEvent(Request $request){

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:25565',
            'event_date' => 'required|string|max:255',
        ]);


        $event = Events::create($validated);

        return redirect()->route('events.view')->with('success', 'Poveste adăugată cu succes!');

    }
}
