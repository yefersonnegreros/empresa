@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/crud-styles.css') }}">
@endpush

@section('content')

<div class="container py-5 mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-center flex-grow-1 mb-0">Personas</h1>
        @auth
        <a href="{{ route('personas.create') }}" class="btn btn-success">
            <i class="bi bi-plus"></i> Agregar
        </a>
        @endauth
        {{-- <a href="{{ route('personas.create') }}" class="btn btn-success">
            <i class="bi bi-plus"></i> Agregar
        </a> --}}
    </div>
    
    <div class="row">
        @foreach($personas as $persona)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $persona->cPerNombre }} {{ $persona->cPerApellido }}</h5>
                        <p class="card-text">Dirección: {{ $persona->cPerDireccion }}</p>
                        <p class="card-text">Edad: {{ $persona->nPerEdad }}</p>
                        <a href="{{ route('personas.edit', $persona->nPerCodigo) }}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('personas.show', $persona->nPerCodigo) }}" class="btn btn-secondary">Ver Detalles</a>

                        <form action="{{ route('personas.destroy', $persona->nPerCodigo) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    
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
