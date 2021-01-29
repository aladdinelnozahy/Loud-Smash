<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'name'=>'required:reservations,r_name',
            'email' => 'required:reservations,r_email',
            'phone' => 'required:reservations,r_phone',
            // 'event'=>'required:reservations,e_id'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'reservation name is required',
            'email.required'=>'email is required',
            'phone.required'=>'phone is required'  ,
            // 'reservation.required'=>'event is required'  
        ];
    }
}
