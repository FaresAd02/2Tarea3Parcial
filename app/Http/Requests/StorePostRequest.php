<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            "nombres" => "required|max:30",
            "apellidos" => "required|max:30",
            "telefono" => "required|max:12",
            "direccion" => "required|max:50",
            "fechanac" => "required",
            "foto" => "required|max:30",
        ];
    }
}
