<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductPost extends FormRequest
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
            'name' => 'required|max:255|string',
            'description' => 'required|min:5|string',
            'long_description' => 'required|min:5|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El campo :attribute es requerido',
            'min' => 'El campo :attribute debe contener al menos :min caracteres',
            'max' => 'El campo :attribute no debe contener más de :max caracteres',
            'string' => 'El campo :attribute debe ser alfanumérico'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nombre',
            'description' => 'Descripción',
            'long_description' => 'Descripción larga',
            'price' => 'Precio',
            'category_id' => 'Categoría'
        ];
    }
}
