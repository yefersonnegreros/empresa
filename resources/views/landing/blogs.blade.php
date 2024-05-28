@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
<section id="blogs" class="py-5 mt-5">
    <div class="container">
        <h2 class="text-center mb-5">Nuestro Blog</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-pencil display-4"></i>
                        </div>
                        <h5 class="card-title">Innovaciones Tecnológicas</h5>
                        <p class="card-text">Exploramos las últimas innovaciones en tecnología y cómo impactan nuestras vidas.</p>
                        <a href="{{ route('blogs.detalle', ['id' => '1']) }}" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-globe display-4"></i>
                        </div>
                        <h5 class="card-title">Tendencias en Desarrollo Web</h5>
                        <p class="card-text">Descubre las tendencias más actuales en el desarrollo web y diseño.</p>
                        <a href="{{ route('blogs.detalle', ['id' => '2']) }}" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-phone display-4"></i>
                        </div>
                        <h5 class="card-title">Aplicaciones Móviles del Futuro</h5>
                        <p class="card-text">Un vistazo a las aplicaciones móviles más innovadoras que están por venir.</p>
                        <a href="{{ route('blogs.detalle', ['id' => '3']) }}" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
