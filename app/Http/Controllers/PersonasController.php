<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function show($id)
    {
        $persona = Persona::findOrFail($id);
        return view('personas.show', compact('persona'));
    }
}