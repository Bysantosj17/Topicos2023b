<?php

namespace App\Http\Requests;

use App\Models\Cliente;
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
            'descripcion' => 'required',
            'slug' => 'required|min:5|unique:clientes,slug,cliente=id',
        ];
    }

    public function messages()
    {
        return [
            'nombres.required' => 'El campo nombre es obligatorio',
            'ap_materno.required' => 'llenar el campo apellido materno',
            'ap_paterno.required' => 'llenar el campo apellido paterno',
            'descripcion.required' => 'La descripcion es obligatoria',
            'slug.required' => 'El campo nombre usario es obligatorio',
        ];
    }

    public function attributes():array
    {
        return[

        ];
    }
}
