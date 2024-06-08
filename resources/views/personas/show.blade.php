@extends('layouts.master')

@section('content')
<div class="container py-5 mt-5">
    <div class="card my-2">
        <div class="card-header text-center">
            <h2>Detalle de la Persona</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5 class="card-title mb-1">Nombre:</h5>
                    <p class="card-text">{{ $persona->cPerNombre }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="card-title mb-1">Apellido:</h5>
                    <p class="card-text">{{ $persona->cPerApellido }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5 class="card-title mb-1">Dirección:</h5>
                    <p class="card-text">{{ $persona->cPerDireccion }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="card-title mb-1">Fecha de Nacimiento:</h5>
                    <p class="card-text">{{ $persona->dPerFecNac }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5 class="card-title mb-1">Sexo:</h5>
                    <p class="card-text">{{ $persona->cPerSexo }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="card-title mb-1">Sueldo:</h5>
                    <p class="card-text">s/{{ $persona->nPerSueldo }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5 class="card-title mb-1">Estado:</h5>
                    <p class="card-text">{{ $persona->nPerEstado == '1' ? 'Activo' : 'Inactivo' }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="card-title mb-1">Fecha de Creación:</h5>
                    <p class="card-text">{{ $persona->created_at->diffForHumans() }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5 class="card-title mb-1">Fecha de Actualización:</h5>
                    <p class="card-text">{{ $persona->updated_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('personas.index') }}" class="btn btn-primary">Volver a la Lista</a>
        </div>
    </div>
</div>
@endsection
