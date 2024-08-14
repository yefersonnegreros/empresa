
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
    </div>
    @isset($category)   
            <div>
                <h1>{{$category->name}}</h1>
                <a href="{{route('personas.index')}}">Regresar a personas</a>
            </div>
        @else
            <h2 class="titulo-persona">Lista Personas</h2> 
        @endisset
    <div class="row">
        @foreach($personas as $persona)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if ($persona->image)
                        <img src="{{ asset('storage/' . $persona->image) }}" class="card-img-top" alt="{{ $persona->cPerNombre }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $persona->cPerNombre }} {{ $persona->cPerApellido }}</h5>
                        <p class="card-text">Dirección: {{ $persona->cPerDireccion }}</p>
                        <p class="card-text">Edad: {{ $persona->nPerEdad }}</p>
                        @if ($persona->category_id)
                            <a href="{{route('categories.show',$persona->category)}}" class="enlace-categoria">{{$persona->category->name}}</a>
                        @endif
                        <a href="{{ route('personas.edit', $persona->nPerCodigo) }}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('personas.show', $persona->nPerCodigo) }}" class="btn btn-secondary">Ver Detalles</a>

                        <form action="{{ route('personas.destroy', $persona->nPerCodigo) }}" method="POST" class="d-inline">
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
