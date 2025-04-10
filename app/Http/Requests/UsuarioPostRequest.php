<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioPostRequest extends FormRequest
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
            'nick' => 'required|max:50|string|unique:usuarios,nick',
            'email' => 'required|email|unique:usuarios,email',
            'suscrito' => 'boolean',
            'karma' => 'integer',
            'nombre' => 'required|max:50|string',
            'apellidos' => 'required|max:100|string',
            'password' => 'required|min:8|string',
        ];
    }

    public function messages()
    {
        return [
            'nick.required' => 'El campo nick es obligatorio.',
            'nick.max' => 'El campo nick no puede tener más de 50 caracteres.',
            'nick.string' => 'El campo nick debe ser una cadena de texto.',
            'nick.unique' => 'El nick ya está en uso.',
            'email.required' => 'El campo email es obligatorio.',
            'email.email' => 'El campo email debe ser una dirección de correo electrónico válida.',
            'email.unique' => 'El email ya está en uso.',
            'suscrito.boolean' => 'El campo suscrito debe ser verdadero o falso.',
            'karma.integer' => 'El campo karma debe ser un número entero.',
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.max' => 'El campo nombre no puede tener más de 50 caracteres.',
            'nombre.string' => 'El campo nombre debe ser una cadena de texto.',
            'apellidos.required' => 'El campo apellidos es obligatorio.',
            'apellidos.max' => 'El campo apellidos no puede tener más de 100 caracteres.',
            'apellidos.string' => 'El campo apellidos debe ser una cadena de texto.',
            'password.required' => 'El campo password es obligatorio.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ];
    }
}
