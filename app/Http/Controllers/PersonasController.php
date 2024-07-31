<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


class PersonasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

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

    // public function store(CreatePersonaRequest $request){
    //     $persona = new Persona($request->validated());
    //     $persona->image = $request->file('image')->store('images');
    //     $persona->save();
    //     return redirect()->route('personas.index')->with('success','La persona fue agregada correctamente');

    // }
    
    public function store(Request $request)
    {
        // Validar los datos
        $camposValidados = $request->validate([
            'cPerApellido' => 'required|max:50',
            'cPerNombre' => 'required|max:50',
            'cPerDireccion' => 'required|max:100',
            'dPerFecNac' => 'required|date',
            'nPerEdad' => 'required|integer|min:0|max:150',
            'cPerSexo' => 'required|in:Masculino,Femenino',
            'nPerSueldo' => 'required|numeric|max:999999.99',
            'cPerRnd' => 'required|max:10',
            'image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg',
        ]);

        // Manejar el archivo de imagen si está presente
        if ($request->hasFile('image')) {
            $camposValidados['image'] = $request->file('image')->store('images');
        }

        // Crear la persona
        Persona::create($camposValidados);

        // Redirigir con éxito
        return redirect()->route('personas.index')
                        ->with('success', 'Persona creada exitosamente.');
    }

    public function edit(Persona $persona)
    {
        return view('personas.edit', compact('persona'));
    }

    // public function update(Request $request, Persona $persona)
    // {
    //     $camposValidados = $request->validate([
    //         'cPerApellido' => 'required|max:50',
    //         'cPerNombre' => 'required|max:50',
    //         'cPerDireccion' => 'required|max:100',
    //         'dPerFecNac' => 'required|date',
    //         'nPerEdad' => 'required|integer|min:0|max:150',
    //         'cPerSexo' => 'required|in:Masculino,Femenino',
    //         'nPerSueldo' => 'required|numeric|max:999999.99',
    //         'cPerRnd' => 'required|max:10',
    //         'nPerEstado' => 'required|in:0,1',
    //     ]);
    
    //     $persona->update($camposValidados);
    
    //     return redirect()->route('personas.index')
    //                         ->with('success', 'Persona actualizada exitosamente.');
    // }

    public function update(Request $request, Persona $persona)
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
            'image' => 'nullable|image|max:2048', // Validación para la imagen
        ]);
    
        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior si existe
            if ($persona->image) {
                // Storage::delete('public/' . $persona->image);
                Storage::delete($persona->image);
            }
            
            // Subir la nueva imagen
            $camposValidados['image'] = $request->file('image')->store('images', 'public');
        }
    
        $persona->update($camposValidados);
    
        return redirect()->route('personas.index')
                         ->with('success', 'Persona actualizada exitosamente.');
    }
    




        public function destroy(Persona $persona)
        {
            $persona->delete();
            
            return redirect()->route('personas.index')->with('success', 'Persona eliminada exitosamente.');
        }
        


}