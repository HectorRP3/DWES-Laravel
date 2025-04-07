<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoPostRequest extends FormRequest
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
            'nombre' => 'required|max:50|string',
            'descripcion' => 'required|max:500|string',
            'ubicacion' => 'required|max:100|string',
            'tipoEvento' => 'required|in:competitivo,divertido',
            'tipoTerreno' => 'required|in:interior,exterior',
            'fecha' => 'required|date',
            'imagenUrl' => 'nullable|url',
            'anfitrion_id' => 'required|exists:usuarios,id'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.max' => 'El campo nombre no puede tener más de 50 caracteres.',
            'nombre.string' => 'El campo nombre debe ser una cadena de texto.',
            'descripcion.required' => 'El campo descripcion es obligatorio.',
            'descripcion.max' => 'El campo descripcion no puede tener más de 500 caracteres.',
            'descripcion.string' => 'El campo descripcion debe ser una cadena de texto.',
            'ubicacion.required' => 'El campo ubicacion es obligatorio.',
            'ubicacion.max' => 'El campo ubicacion no puede tener más de 100 caracteres.',
            'ubicacion.string' => 'El campo ubicacion debe ser una cadena de texto.',
            'tipoEvento.required' => 'El campo tipoEvento es obligatorio.',
            'tipoEvento.in' => 'El campo tipoEvento debe ser uno de los siguientes valores: competitivo, divertido.',
            'tipoTerreno.required' => 'El campo tipoTerreno es obligatorio.',
            'tipoTerreno.in' => 'El campo tipoTerreno debe ser uno de los siguientes valores: interior, exterior.',
            'fecha.required' => 'El campo fecha es obligatorio.',
            'fecha.date' => 'El campo fecha debe ser una fecha válida.',
            'imagenUrl.url' => 'La URL de la imagen no es válida.',
            'anfitrion_id.required' => 'El anfitrión es obligatorio.',
            'anfitrion_id.exists' => 'El anfitrión seleccionado no existe.'
        ];
    }
}
