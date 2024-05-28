@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush

@section('content')
<section id="client-details" class="py-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset($cliente['url_imagen']) }}" class="img-fluid rounded-end">
            </div>
            <div class="col-md-6">
                <h2>{{ $cliente['nombre'] }}</h2>
                <p><strong>Industria:</strong> {{ $cliente['industria'] }}</p>
                <p><strong>Descripción:</strong> {{ $cliente['descripcion'] }}</p>
                <p><strong>Empleados:</strong> {{ $cliente['empleados'] }}</p>
                <p><strong>Ubicación:</strong> {{ $cliente['ubicacion'] }}</p>
                <div class="text-center">
                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver a Clientes</a>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection
