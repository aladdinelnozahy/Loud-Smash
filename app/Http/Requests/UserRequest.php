<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'=>'required|unique:users,u_username'  ,
            'email'=>'required|unique:users,u_email' ,
            'password'=>'required:users,u_pass'
            ];
    }
    public function messages()
    {
        return [
            'username.required'=>'username is required',
            'username.unique'=>'user name is already exist',
            'email.required'=>'email address is required',
            'password.required'=>'password is required'
            ];
    }
}
