<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'name'=>'required|min:4|max:30',
            'text'=>'required|min:10|max:50',
            'ptext'=>'required|min:4|max:15',
            'photo'=>'required|mimes:jpg,jpeg,png|max:2000'
        ];
    }

    public function messages()
    {

        return[
            'required'=>'The :attribute is required!',
            'min'=>'The :attribute must be long at :min',
            'mimes'=>'The :attribute must be in form :mimes',
            'max'=>'The :attribute must be long at :max'
        ];
    }
}
