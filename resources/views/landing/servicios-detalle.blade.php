@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush
@section('content')
<div class="container my-5 detalle-servicio py-5">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h1 class="card-title">{{ $servicio['nombre'] }}</h1>
                    <p class="card-text">{{ $servicio['descripcion'] }}</p>
                    <h3>Precio: <span class="text-success">{{ $servicio['precio'] }}</span></h3>
                    <h4>Características:</h4>
                    <ul class="list-group list-group-flush">
                        @foreach ($servicio['caracteristicas'] as $caracteristica)
                            <li class="list-group-item">{{ $caracteristica }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="text-center">
                    <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Volver a Servicios</a>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset($servicio['url_imagen']) }}" class="img-fluid rounded-end" alt="{{ $servicio['nombre'] }}">
            </div>
        </div>
    </div>
</div>
@endsection
