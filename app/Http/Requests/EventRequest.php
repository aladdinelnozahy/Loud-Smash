<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'name'=>'required|unique:events,e_name',
            'location' => 'required:events,e_location',
            'date' => 'required:events,e_date'
    ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Event name is required',
            'name.unique'=>'Event name already exist',
            'location.required'=>'location is required',
            'date.required'=>'date is required'        ];
    }
}
