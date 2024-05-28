@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush

@section('content')
<section id="services" class="py-5 mt-5">
    <div class="container">
        <h2 class="text-center mb-5">Nuestros Servicios</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-laptop display-4"></i>
                        </div>
                        <h5 class="card-title">Desarrollo Web</h5>
                        <p class="card-text">Creamos sitios web modernos y funcionales, adaptados a las necesidades de tu negocio.</p>
                        <a href="{{ route('servicios.detalle', ['id' => 'web']) }}" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-phone display-4"></i>
                        </div>
                        <h5 class="card-title">Desarrollo de Aplicaciones Móviles</h5>
                        <p class="card-text">Diseñamos y desarrollamos aplicaciones móviles personalizadas para iOS y Android.</p>
                        <a href="{{ route('servicios.detalle', ['id' => 'movil']) }}" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-gear display-4"></i>
                        </div>
                        <h5 class="card-title">Desarrollo de Software a Medida</h5>
                        <p class="card-text">Creamos soluciones de software personalizadas para satisfacer las necesidades específicas de tu empresa.</p>
                        <a href="{{ route('servicios.detalle', ['id' => 'medida']) }}" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection