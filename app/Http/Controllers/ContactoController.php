<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\mail\MensajeRecibido;

class ContactoController extends Controller
{
    public function store()
    {
        $mensaje = request()->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|email',
            'asunto' => 'required|max:255',
            'mensaje' => 'required',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede tener más de 255 caracteres.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Debe ingresar un correo electrónico válido.',
            'asunto.required' => 'El asunto es obligatorio.',
            'asunto.max' => 'El asunto no puede tener más de 255 caracteres.',
            'mensaje.required' => 'El mensaje es obligatorio.',
        ]);

        // return new MensajeRecibido(
        //     $mensaje['nombre'],
        //     $mensaje['email'],
        //     $mensaje['asunto'],
        //     $mensaje['mensaje']
        // );
        
        Mail::to('negrerosempresa@gmail.com')->send(new MensajeRecibido($mensaje));

        // return 'Datos validados y correo enviado';
        return redirect()->route('contacto.index')->with('success', '¡Correo enviado correctamente!');
            
    }



    //***Para visualizarlo en laravel.log pruebas */
    // public function store()
    // {
    //     $data = request()->validate([
    //         'nombre' => 'required|max:255',
    //         'email' => 'required|email',
    //         'asunto' => 'required|max:255',
    //         'mensaje' => 'required',
    //     ], [
    //         'nombre.required' => 'El nombre es obligatorio.',
    //         'nombre.max' => 'El nombre no puede tener más de 255 caracteres.',
    //         'email.required' => 'El correo electrónico es obligatorio.',
    //         'email.email' => 'Debe ingresar un correo electrónico válido.',
    //         'asunto.required' => 'El asunto es obligatorio.',
    //         'asunto.max' => 'El asunto no puede tener más de 255 caracteres.',
    //         'mensaje.required' => 'El mensaje es obligatorio.',
    //     ]);

    //     Mail::to('negreros@gmail.com')->send(new MensajeRecibido(
    //         $data['nombre'],
    //         $data['email'],
    //         $data['asunto'],
    //         $data['mensaje']
    //     ));

    //     return 'Datos validados y correo enviado';
    // }
}
