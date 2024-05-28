@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush

@section('content')
<section id="projects" class="py-5 mt-5">
    <div class="container">
        <h2 class="text-center mb-5">Nuestros Proyectos</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-bag-check display-4"></i>
                        </div>
                        <h5 class="card-title">Proyecto E-commerce</h5>
                        <p class="card-text">Desarrollamos una tienda en línea completa con características avanzadas.</p>
                        <a href="{{ route('proyectos.detalle', ['id' => 'ecommerce']) }}" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-person-lines-fill display-4"></i>
                        </div>
                        <h5 class="card-title">Sistema CRM</h5>
                        <p class="card-text">Implementamos un sistema CRM para gestionar las relaciones con los clientes.</p>
                        <a href="{{ route('proyectos.detalle', ['id' => 'crm']) }}" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-gear display-4"></i>
                        </div>
                        <h5 class="card-title">Sistema ERP</h5>
                        <p class="card-text">Desarrollamos un sistema ERP para optimizar los procesos internos de la empresa.</p>
                        <a href="{{ route('proyectos.detalle', ['id' => 'erp']) }}" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection