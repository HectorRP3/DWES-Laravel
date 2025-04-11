<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EspeciePostRequest extends FormRequest
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
            'nombreCientifico' => 'required|max:50|string|unique:especies,nombreCientifico',
            'nombreComun' => 'required|max:50|string',
            'clima' => 'required|max:50|string',
            'regionOrigen' => 'required|max:50|string',
            'crecimiento' => 'required|max:50|string',
            'enlace' => 'nullable|url'
        ];
    }

    public function messages()
    {
        return [
            'nombreCientifico.required' => 'El campo nombreCientifico es obligatorio.',
            'nombreCientifico.max' => 'El campo nombreCientifico no puede tener más de 50 caracteres.',
            'nombreCientifico.string' => 'El campo nombreCientifico debe ser una cadena de texto.',
            'nombreCientifico.unique' => 'El nombre científico ya está en uso.',
            'nombreComun.required' => 'El campo nombreComun es obligatorio.',
            'nombreComun.max' => 'El campo nombreComun no puede tener más de 50 caracteres.',
            'nombreComun.string' => 'El campo nombreComun debe ser una cadena de texto.',
            'clima.required' => 'El campo clima es obligatorio.',
            'clima.max' => 'El campo clima no puede tener más de 50 caracteres.',
            'clima.string' => 'El campo clima debe ser una cadena de texto.',
            'regionOrigen.required' => 'El campo regionOrigen es obligatorio.',
            'regionOrigen.max' => 'El campo regionOrigen no puede tener más de 50 caracteres.',
            'regionOrigen.string' => 'El campo regionOrigen debe ser una cadena de texto.',
            'crecimiento.required' => 'El campo crecimiento es obligatorio.',
            'crecimiento.max' => 'El campo crecimiento no puede tener más de 50 caracteres.',
            'crecimiento.string' => 'El campo crecimiento debe ser una cadena de texto.',
            'imagenUrl.required' => 'La URL de la imagen es obligatoria.',
            'enlace.url' => 'La URL del enlace no es válida.'
        ];
    }
}
