<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    // public $timestamps = false;

    public function event (){
        $events = Event::get();
        return view ('admin.layout.events',compact('events'));
    }
    public function event_form (){
        return view ('admin.dashforms.eventform');
    }

    public function add_event (EventRequest $request){
    // dd($request->date, $request->name, $request);
    //==============start photo validation====================
    // $filename =  $this->savePhoto($request->photo , 'photos/events' );


    //==============start photo validation====================


    //==============start event creation=====================
        Event::create([
            'e_name' => $request->name ,
            'e_location' => $request->location ,
            'e_description' => $request->description ,
            'e_date' => $request->date

        ]);
        return redirect()->back()->with('success','event created successfully');
    }
    //==============end event creation=====================

    //==============start event delete=====================
    public function delete_event($id){
        $event= event::find($id);
        $event ->delete();
        return redirect()->back()->with('deleted','deleted successfully');

    }
    //==============end event delete=====================
    //==============start edit event=====================

    public function edit_event($id){
        $event = event::find($id);
        $array=array('event'=>$event);
        return view('admin.editforms.eventedit',$array) ;
    }
    //==============start edit event=====================

    //==============start save edited event=====================

    public function update_event (Request $request,$id){

        $event =event::find($id);
        $event->e_name =$request->get('name');
        $event->e_location =$request->get('location');
        $event->e_date =$request->get('date');
        $event->e_description =$request->get('description');
        $event->save();
        return redirect()->back()->with('success','Event Updated Successfully');
    }
    //==============start save edited event=====================

}
