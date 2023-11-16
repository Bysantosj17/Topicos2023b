<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
            'nombre' => 'required',
            'categoria' => 'required',
            'precio' => 'required|numeric',
            'codigo_barras' => 'required|numeric',
            'fecha_caducidad' => 'required',
            'descripcion' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => "El nombre es requerido",
            'categoria.required' => 'La categoría es requerida',
            'precio.required' => 'El precio es requerido',
            'precio.numeric' => 'El precio debe ser un número',
            'codigo_barras' => 'El codigo de barras es requerido',
            'codigo_barras.numeric' => 'El codigo de barras debe ser numero',
            'fecha_caducidad' => 'La fecha de caducidad es requerida',
            'descripcion' => 'La descripcion es requerida',
        ];
    }
}
