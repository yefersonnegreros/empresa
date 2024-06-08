<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = Persona::latest()->paginate(3);
        return view('personas.index', compact('personas'));
    }

    public function show($nPerCodigo)
    {
        $persona = Persona::findOrFail($nPerCodigo);
        return view('personas.show', compact('persona'));
    }
}