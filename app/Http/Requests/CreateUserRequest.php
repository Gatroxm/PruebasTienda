<?php

namespace Distry\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'correo' => 'required|email|unique:usuarios',
            'name' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'restauranteName' => 'required|string|max:100',
            'password' => 'required'
        ];
    }


    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'restauranteName' => 'El campo nombre del restaurante es obligatorio'
        ];
    }
}
