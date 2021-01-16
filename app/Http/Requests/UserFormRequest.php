<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'fullname' =>   'required|string|max:80',
            'email' => 'required|email',
            'password'  =>  'required'
        ];
    }

    /**
     *  Custom message for validation 
     * 
     *  @return array
     */
    public function messages(){

        return [
           'fullname.required' => 'Enter a valid name',
           'email.required' => 'Enter a valid email address',
           'password.required' => 'Enter a concrete password'
        ];
    }
}
