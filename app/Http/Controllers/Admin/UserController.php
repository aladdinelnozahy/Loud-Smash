<?php

namespace App\Http\Controllers\Admin;

use App\Notifications\UserCreated;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use App\Traits\PhotosTrait;


class UserController extends Controller{

    use PhotosTrait;

    //==============start get data=====================

    public function user (){
        $users =User::get();
        foreach($users as $user){
            if($user->u_role ==1){
                $user->u_role = 'Super Admin';
            }else {
                $user->u_role ='user';
            }
            // $user->u_role = $user->u_role == 1 ? 'Super Admin' : 'user';

        }

        return view ('admin.layout.users', compact('users'));
    }
    public function user_form (){
        return view ('admin.dashforms.userform');
    }
    //==============end get data=====================





    public function add_user (UserRequest $request ){
        // dd($request);
        // dd($request->role);

        $filename =  $this->savePhoto($request->photo ,User::$photodirectory);
        $user =User::create([
            'u_username' => $request->username ,
            'u_name' =>$request->name,
            'u_email' =>$request->phone,
            'u_pass' =>$request->pass,
            'u_phone' =>$request->phone,
            'u_role' =>$request->role,
            'u_photo' =>$filename ,
        ]);

        Notification::send($user,new UserCreated($user));
        return redirect()->back()->with('success','user created successfully');
        $validator=validator::make($request->all() );

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->flash());


        }

        //==============start photo validation=====================

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
        $user = User::find($id);
        $data= User::get();
        $array=array('user'=>$user);
        return view('admin.editforms.useredit',$array,compact('user')) ;
    }
    //==============start edit category=====================

    //==============start save edited category=====================

    public function update_user (Request $request,$id){

        $user =User::find($id);
        // dd($request->photo);
        $user->u_username =$request->get('username');
        $user->u_name =$request->get('name');
        $user->u_email =$request->get('email');
        $user->u_pass =$request->get('pass');
        $user->u_phone =$request->get('phone');
        // $user->u_role =$request->get('role');

        if ($request->photo) {
            $filename =$this->savePhoto($request->photo, User::$photodirectory);
            $user->u_photo =$filename ;
            dd($filename);
        }

        $user->save();
        return redirect()->back()->with('success','User Updated Successfully');
    }
    //==============end save edited category=====================



}
