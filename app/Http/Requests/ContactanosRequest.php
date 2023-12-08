<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactanosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombres' => 'required',
            'correo' => 'required',
            'mensaje' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombres.required' => 'El campo nombre es obligatorio',
            'correo.required' => 'El campo correo es obligatorio',
            'mensaje.required' => 'Se require agregar un mensaje',
        ];
    }
}
