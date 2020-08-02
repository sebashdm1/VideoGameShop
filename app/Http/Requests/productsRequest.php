<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productsRequest extends FormRequest
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
            'name' => ['required','min:4'],
            'description' => ['required','string'],
            'slug' => ['required','string'],
            'price' => ['required','numeric'],
            'stock' => ['required','integer'],
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Nombre del producto requerido',
            'name.min' => 'El nombre debe tener almenos 4 carácteres',
            'price.numeric' => 'El precio debe de ser numerico',

         ];
    }




}
