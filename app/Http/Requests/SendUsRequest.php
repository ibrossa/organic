<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendUsRequest extends FormRequest
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
            'name'=> 'required|min:3|max:255',
            'email'=> 'email:rfc,dns',
            'phone'=>'required|min:7|max:255',
            'subject'=> 'required|min:3|max:255',
            'text'=> 'required|min:5',
        ];
    }
}
