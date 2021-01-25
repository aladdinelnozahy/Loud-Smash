<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;

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
        // event form  validation
            $validator = validator::make($request->all(),
            [
                'name'=>'required|unique:events,e_name',
                'location' => 'required:events,e_location',
                'date' => 'required:events,e_date'
            ],
            [
                'name.required'=>'Event name is required',
                'name.unique'=>'Event name already exist',
                'location.required'=>'location is required',
                'date.required'=>'date is required'
            ]);
            if($validator->fails()){
                return redirect()->back()->
                withErrors($validator)->withInputs($request->all());
            }


        // event creation
        Event::create([
            'e_name' => $request->name ,
            'e_location' => $request->location ,
            'e_description' => $request->description ,
            'e_date' => $request->date 
            
        ]);
        return redirect()->back()->with('success','event created successfully');
    }
}
