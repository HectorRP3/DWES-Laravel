<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeneficioPostRequest extends FormRequest
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
            'descripcion' => 'required|max:100|string',
        ];
    }

    public function messages()
    {
        return [
            'descripcion.required' => 'El campo descripcion es obligatorio.',
            'descripcion.max' => 'El campo descripcion no puede tener más de 100 caracteres.',
            'descripcion.string' => 'El campo descripcion debe ser una cadena de texto.',
        ];
    }
}
