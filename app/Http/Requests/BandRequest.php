<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BandRequest extends FormRequest
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
            'name'=> 'required|unique:bands,b_name',
            'bio'=>'required:bands,n_bio'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'band name is required',
            'name.unique'=>'this band name is already exist'
        ];
    }
}
