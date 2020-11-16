<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryPost extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255'
        ];

    }

    public function messages()
        {
            return [
                'required' => 'El campo :attribute es requerido',
                'string' => 'El campo :attribute debe contener caracteres alfanuméricos',
                'max' => 'El campo :attribute debe contener un máximo de :max caracteres'
            ];
        }

    public function attributes()
    {
        return [
            'name' => 'nombre',
            'description' => 'descripción'
        ];
    }
}
