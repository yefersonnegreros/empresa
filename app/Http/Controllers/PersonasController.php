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

    public function store(Request $request)
    {
        $camposValidados = $request->validate([
            'cPerApellido' => 'required|max:50',
            'cPerNombre' => 'required|max:50',
            'cPerDireccion' => 'required|nullable|max:100',
            'dPerFecNac' => 'required|date',
            'nPerEdad' => 'required|integer|min:0|max:150',
            'cPerSexo' => 'required|in:Masculino,Femenino',
            'nPerSueldo' => 'required|numeric|max:999999.99',
            'cPerRnd' => 'required|nullable|max:10',
        ]);
        Persona::create($camposValidados);

        return redirect()->route('personas.index')
                        ->with('success', 'Persona creada exitosamente.');
    }
    // public function store(CreatePersonaRequest $request)
    // {
    //     $camposValidados = $request->validated();

    //     Persona::create($camposValidados);
        
    //     return redirect()->route('personas.index')
    //                     ->with('success', 'Persona creada exitosamente.');
    // }


    public function edit(Persona $id){

        return view('personas.edit',[
            'persona' =>$id
        ]);

    }

    // public function update(Persona $id)
    // {
    //     $id->update([
    //         'cPerApellido' => request('cPerApellido'),
    //         'cPerNombre' => request('cPerNombre'),
    //         'cPerDireccion' => request('cPerDireccion'),
    //         'dPerFecNac' => request('dPerFecNac'),
    //         'nPerEdad' => request('nPerEdad'),
    //         'cPerSexo' => request('cPerSexo'),
    //         'nPerSueldo' => request('nPerSueldo'),
    //         'cPerRnd' => request('cPerRnd'),
    //         'nPerEstado' => request('nPerEstado'),
    //     ]);

    //     return redirect()->route('personas.index',$id)
    //                     ->with('success', 'Persona actualizada exitosamente.');
    // }


    public function update(Request $request, Persona $id)
    {
        $camposValidados = $request->validate([
            'cPerApellido' => 'required|max:50',
            'cPerNombre' => 'required|max:50',
            'cPerDireccion' => 'required|max:100',
            'dPerFecNac' => 'required|date',
            'nPerEdad' => 'required|integer|min:0|max:150',
            'cPerSexo' => 'required|in:Masculino,Femenino',
            'nPerSueldo' => 'required|numeric|max:999999.99',
            'cPerRnd' => 'required|max:10',
            'nPerEstado' => 'required|in:0,1',
        ]);

        $id->update($camposValidados);

        return redirect()->route('personas.index', $id)
                        ->with('success', 'Persona actualizada exitosamente.');
    }

        // public function update(CreatePersonaRequest $request, Persona $persona)
        // {
        //     $camposValidados = $request->validated();
        //     $persona->update($camposValidados);

        //     return redirect()->route('personas.index', $persona)
        //                     ->with('success', 'Persona actualizada exitosamente.');
        // }

    
        public function destroy(Persona $persona)
        {
            $persona->delete();
            
            return redirect()->route('personas.index')->with('success', 'Persona eliminada exitosamente.');
        }
        


}