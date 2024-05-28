@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush
@section('content')
<div class="container py-5 mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>{{ $proyecto['nombre'] }}</h2>
            <p>{{ $proyecto['descripcion'] }}</p>
            <p><strong>Fecha:</strong> {{ $proyecto['fecha'] }}</p>
            <h5>Características:</h5>
            <ul>
                @foreach ($proyecto['caracteristicas'] as $caracteristica)
                    <li>{{ $caracteristica }}</li>
                @endforeach
            </ul>
            <div class=" text-center">
                <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Volver a Servicios</a>
            </div>
        </div>
        
        <div class="col-md-6">
            <img src="{{ asset($proyecto['url_imagen']) }}" alt="{{ $proyecto['nombre'] }}" class="img-fluid rounded">
        </div>
    </div>
</div>
@endsection
