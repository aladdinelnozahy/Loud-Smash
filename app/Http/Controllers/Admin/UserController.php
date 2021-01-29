<?php

namespace App\Http\Controllers\Admin;

use App\Notifications\UserCreated;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;   
use Illuminate\Support\Facades\Notification;


class UserController extends Controller{

    //==============start get data=====================

    public function user (){
        $users =User::get();
        foreach($users as $user){
            // if($user->u_role ==1){
            //     $user->u_role = 'Super Admin';
            // }else {
            //     $user->u_role ='admin';
            // }
            $user->u_role = $user->u_role == 1 ? 'Super Admin' : 'Admin';

        }

        return view ('admin.layout.users', compact('users'));
    }
    public function user_form (){
        return view ('admin.dashforms.userform');
    }
    //==============end get data=====================

    public function add_user (UserRequest $request){
    //==============start form validation=====================

    $validator=validator::make($request->all() );

    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInputs($request->flash());
    }
    //==============end form validation=====================

        $user =User::create([
            'u_username' => $request->username ,
            'u_name' =>$request->name,
            'u_email' =>$request->phone,
            'u_pass' =>$request->password,
            // 'r_id' =>$request->reservation
        ]);
        Notification::send($user,new UserCreated($user));
        return redirect()->back()->with('success','user created successfully');
        //==============start photo validation=====================
        $filename =  $this->savePhoto($request->photo , 'photos/users' );

        //==============start photo validation=====================
    }

    //==============start delete user=====================
    public function delete_user ($id){
        $user= user::find($id);
        $user->delete();
        return redirect()->back()->with('deleted','deleted successfully');
     }
    //==============end delete user=====================
    //==============start edit category=====================

    public function edit_user($id){
        $user = user::find($id);
        $array=array('user'=>$user);
        return view('admin.editforms.useredit',$array) ;
    }
    //==============start edit category=====================

    //==============start save edited category=====================

    public function update_user (Request $request,$id){

        $user =user::find($id);
        $user->u_username =$request->get('username');
        $user->u_name =$request->get('name');
        $user->u_email =$request->get('email');
        $user->u_pass =$request->get('pass');
        $user->u_phone =$request->get('phone');
        // $category->u_photo =$request->get('photo');

        $user->save();
        return redirect()->back()->with('success','User Updated Successfully');
    }
    //==============start save edited category=====================



}
