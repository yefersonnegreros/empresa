{{-- @extends('layouts.master')

@section('content')
    <h1>Personas</h1>
    <ul>
        @foreach($personas as $persona)
            <li><a href="{{ route('personas.show', $persona->id) }}">{{ $persona->nombre }} {{ $persona->apellido }}</a></li>
        @endforeach
    </ul>
@endsection --}}
{{-- @extends('layouts.master')

@section('content')
    <div class="container mt-5 pt-5">
        <h1 class="my-4 text-center">Personas</h1>
        <div class="row">
            @foreach($personas as $persona)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $persona->nombre }} {{ $persona->apellido }}</h5>
                            <p class="card-text">Email: {{ $persona->email }}</p>
                            <p class="card-text">Teléfono: {{ $persona->telefono }}</p>
                            <a href="{{ route('personas.show', $persona->id) }}" class="btn btn-primary">Ver Detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection --}}

@extends('layouts.master')

@section('content')
    <div class="container py-5 mt-5">
        <h1 class="my-4 text-center">Personas</h1>
        <div class="row">
            @foreach($personas as $persona)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $persona->cPerNombre }} {{ $persona->cPerApellido }}</h5>
                            <p class="card-text">Direccion: {{ $persona->cPerDireccion }}</p>
                            <p class="card-text">Edad: {{ $persona->nPerEdad }}</p>
                            
                            <a href="{{ route('personas.show', $persona->nPerCodigo) }}" class="btn btn-primary">Ver Detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $personas->links('pagination::bootstrap-5') }} 
        </div>
    </div>
@endsection
