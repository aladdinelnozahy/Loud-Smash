<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;
use App\Models\Event;


class ReservationController extends Controller
{
    public function reservation (){
        $events= Event::get();
        $reservation =Reservation::get();
        $eventslist = Event::lists('name', 'id');

        // @foreach ($reservation as $reservation){

        // }
        return view ('admin.layout.reservation', compact('reservation','events'));
    }
    public function reservation_form (){
        return view ('admin.dashforms.reservationform');
    }

    public function add_reservation (ReservationRequest $request){
// dd($request);

    //==============start reservatio creation=====================
    Reservation::create([
        'r_name' => $request->name ,
        'r_email' => $request->email,
        'r_phone' => $request->phone ,
        'e_id' => $request->event

    ]);
    return redirect()->back()->with('success','event created successfully');
    }
    //==============end reservatio creation=====================

    //==============start reservation delete=====================
       public function delete_reservation($id){
        $reservation= Reservation::find($id);
        $reservation ->delete();
        return redirect()->back()->with('deleted','deleted successfully');

    }
    //==============end reservation delete=====================
    //==============start edit reservation=====================

    public function edit_reservation($id){

        $reservation = Reservation::find($id);
        $array=array('reservation'=>$reservation);
        return view('admin.editforms.reservationedit',$array) ;
    }
    //==============start edit reservation=====================

    //==============start save edited reservation=====================

    public function update_reservation (Request $request,$id){

        $reservation =Reservation::find($id);
        $reservation->r_name =$request->get('name');
        $reservation->r_email =$request->get('email');
        $reservation->r_phone =$request->get('phone');
        $reservation->e_id =$request->get('event');
        $reservation->save();
        return redirect()->back()->with('success','reservation Updated Successfully');
    }
    //==============start save edited reservation=====================


}
