<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Category;
use App\Events\PersonaSaved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use App\Http\Requests\CreatePersonaRequest;
use Intervention\Image\Laravel\Facades\Image;



class PersonasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    // public function index()
    // {
    //     $personas = Persona::latest()->paginate(3);
    //     return view('personas.index', compact('personas'));
    // }
    public function index()
    {
        $personas = Persona::with('category')->latest()->paginate(3);
        return view('personas.index', compact('personas'));
    }


    public function show($nPerCodigo)
    {
        $persona = Persona::findOrFail($nPerCodigo);
        return view('personas.show', compact('persona'));
    }

    public function create(){
        return view('personas.create', [
            'persona' => new Persona(),
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    public function store(Request $request)
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
            // 'nPerEstado' => 'required|in:0,1',
            'image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg',
            'category_id' => 'required|exists:categories,id', // Validación de categoría
        ]);

        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image')->getPathname());

            $image->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            $imagePath = 'images/' . $request->file('image')->hashName();
            Storage::put($imagePath, (string) $image->toPng());

            $camposValidados['image'] = $imagePath;
        }

        Persona::create($camposValidados);

        return redirect()->route('personas.index')
                            ->with('success', 'Persona creada exitosamente.');
    }


    // public function edit(Persona $persona)
    // {
    //     return view('personas.edit', compact('persona'));
    // }

    public function edit(Persona $persona){
        return view('personas.edit', 
        [   'persona' => $persona,
            'categories' => Category::pluck('name','id')
        ]);

    }

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
            'image' => 'nullable|image|max:2048',
            'category_id' => 'required|exists:categories,id'
        ]);
    
        if ($request->hasFile('image')) {

            if ($persona->image) {
                Storage::delete($persona->image);
            }
    
            $manager = new ImageManager(new Driver()); 
    
            $image = $manager->read($request->file('image')->getPathname());
    
            $image->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
    
            $imagePath = 'images/' . $request->file('image')->hashName();
    
            Storage::put($imagePath, (string) $image->toPng());
    
            $camposValidados['image'] = $imagePath;
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