<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            'name' => ['required'],
            'userName' => ['required'],
            'email' => ['required','email','unique:users'],
            'password' =>['required','min:8']
        ];
    }

    public function messages(){
        return [
            'name.required' => 'El nombre es requerido',
            'password.min' => 'El password debe tener minimo 8 caracteres ',
            'email.required' => 'El email es requerido',
        ];
    }
}
