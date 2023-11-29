<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombres' => 'required|min:3',
            'ap_paterno' => 'required',
            'ap_materno' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'rfc' => 'required',
            'direccion' => 'required',
            'descripcion' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombres.required' => 'El campo nombre es obligatorio',
            'ap_materno.required' => 'llenar el campo apellido materno',
            'ap_paterno.required' => 'llenar el campo apellido paterno',
            'descripcion.required' => 'La descripcion es obligatoria',


        ];
    }

    public function attributes():array
    {
        return[

        ];
    }
}
