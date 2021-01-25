<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public $timestamps = false;

    public function event (){
        $events = Event::get();
        return view ('admin.layout.events',compact('events'));
    }
    public function event_form (){
        return view ('admin.dashforms.eventform');
    }

    public function add_event (Request $request){
        Event::create([
            'e_name' => $request->name ,
            'e_location' => $request->location ,
            'e_description' => $request->description ,
            'e_date' => $request->date 
            
        ]);
        return redirect()->back()->with('success','event created successfully');
    }
}
