<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class User_Validetion extends FormRequest
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
        // dd($_REQUEST);
        return [
            'email'=>'required|unique:user_register|email',
            'psw'=>'required'
        ];
    }
    public function messages(){

        return [
            'uname.required' => 'A name is required',
            'psw.required' => 'A password is required',
        ];
    }
}
