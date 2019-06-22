<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UlogaRequest extends FormRequest
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
            'naziv'=>'required|min:2|alpha|max:10'
        ];
    }

    public function messages()
    {
//        return parent::messages(); // TODO: Change the autogenerated stub

        return[
            'required'=>'The :attribute is required!',
            'min'=>'The :attribute must be long at :min',
            'alpha'=>'The :attribute must be string',
            'max'=>'The :attribute must be long at :max'
        ];
    }
}
