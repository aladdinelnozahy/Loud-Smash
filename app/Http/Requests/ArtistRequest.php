<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|unique:artists,a_name',
            'about'=>'required:artists,a_about'

        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Artist name is required',
            'about.required'=>'tybe some thing about this artist'
        ];
    }
}
