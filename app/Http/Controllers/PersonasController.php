<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest;


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

    public function create(){
        
        return view('personas.create');
    }

    // public function store(Request $request)
    // {
    //     $camposValidados = $request->validate([
    //         'cPerApellido' => 'required|max:50',
    //         'cPerNombre' => 'required|max:50',
    //         'cPerDireccion' => 'required|nullable|max:100',
    //         'dPerFecNac' => 'required|date',
    //         'nPerEdad' => 'required|integer|min:0|max:150',
    //         'cPerSexo' => 'required|in:Masculino,Femenino',
    //         'nPerSueldo' => 'required|numeric|max:999999.99',
    //         'cPerRnd' => 'required|nullable|max:10',
    //     ]);
    //     Persona::create($camposValidados);

    //     return redirect()->route('personas.index')
    //                     ->with('success', 'Persona creada exitosamente.');
    // }
    public function store(CreatePersonaRequest $request)
    {
        $camposValidados = $request->validated();

        Persona::create($camposValidados);
        
        return redirect()->route('personas.index')
                        ->with('success', 'Persona creada exitosamente.');
    }

}