<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
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
            'cPerApellido' => 'required|max:50',
            'cPerNombre' => 'required|max:50',
            'cPerDireccion' => 'required|max:100',
            'dPerFecNac' => 'required|date',
            'nPerEdad' => 'required|integer|min:0|max:150',
            'cPerSexo' => 'required|in:Masculino,Femenino',
            'nPerSueldo' => 'required|numeric|max:999999.99',
            'cPerRnd' => 'required|max:10',
            'nPerEstado' => 'required|in:0,1',
            'image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg',

        ];
    }

    public function messages()
    {
        return [
            'cPerApellido.required' => 'El apellido es obligatorio.',
            'cPerApellido.max' => 'El apellido no puede tener más de 50 caracteres.',
            'cPerNombre.required' => 'El nombre es obligatorio.',
            'cPerNombre.max' => 'El nombre no puede tener más de 50 caracteres.',
            'cPerDireccion.required' => 'La dirección es obligatoria.',
            'cPerDireccion.max' => 'La dirección no puede tener más de 100 caracteres.',
            'dPerFecNac.required' => 'La fecha de nacimiento es obligatoria.',
            'dPerFecNac.date' => 'La fecha de nacimiento no es válida.',
            'nPerEdad.required' => 'La edad es obligatoria.',
            'nPerEdad.integer' => 'La edad debe ser un número entero.',
            'nPerEdad.min' => 'La edad no puede ser negativa.',
            'nPerEdad.max' => 'La edad no puede ser mayor a 150.',
            'cPerSexo.required' => 'El sexo es obligatorio.',
            'cPerSexo.in' => 'El sexo no es válido.',
            'nPerSueldo.required' => 'El sueldo es obligatorio.',
            'nPerSueldo.numeric' => 'El sueldo debe ser un número.',
            'nPerSueldo.max' => 'El sueldo no puede ser mayor a 999999.99.',
            'cPerRnd.required' => 'El RND es obligatorio.',
            'cPerRnd.max' => 'El RND no puede tener más de 10 caracteres.',
            'nPerEstado.required' => 'El estado es obligatorio.',
            'nPerEstado.in' => 'El estado seleccionado no es válido.',
            'image.image' => 'El archivo debe ser una imagen.',
            'image.max' => 'La imagen no puede ser mayor a 2MB.',
        ];
    }
}
