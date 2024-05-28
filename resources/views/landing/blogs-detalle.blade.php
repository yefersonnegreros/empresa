@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
<section id="blog-detalle" class="py-5 mt-5">
    <div class="container my-5 detalle-blog">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="mb-4">{{ $blog['titulo'] }}</h2>
                <p class="text-muted mb-4">{{ $blog['fecha'] }}</p>
                <img src="{{ asset($blog['url_imagen']) }}" class="img-fluid mb-4" alt="{{ $blog['titulo'] }}">
                <p>{{ $blog['contenido'] }}</p>
            </div>
            
            <div class="col-lg-4">
                <h5 class="mb-3">Categorías</h5>
                <ul class="list-group">
                    @foreach ($blog['categorias'] as $categoria)
                        <li class="list-group-item">{{ $categoria }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Volver a Servicios</a>
    </div>
</section>
@endsection
