@extends('layouts.master')

@section('content')
    <div class="container py-5 mt-5 ">
        <div class="card">
            <div class="card-header text-center">
                <h2>Detalle de la Persona</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <h5 class="card-title mb-1">Nombre:</h5>
                        <p class="card-text">{{ $persona->nombre }}</p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <h5 class="card-title mb-1">Apellido:</h5>
                        <p class="card-text">{{ $persona->apellido }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <h5 class="card-title mb-1">Email:</h5>
                        <p class="card-text">{{ $persona->email }}</p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <h5 class="card-title mb-1">Teléfono:</h5>
                        <p class="card-text">{{ $persona->telefono }}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('personas.index') }}" class="btn btn-primary">Volver a la Lista</a>
            </div>
        </div>
    </div>
@endsection
