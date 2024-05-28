@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
<section id="contact" class="py-5 mt-5">
    <div class="container">
        <h2 class="text-center mb-5">Contáctanos</h2>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <form method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Asunto</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-lg-6 mb-4">
                <h5 class="mb-3">Información de Contacto</h5>
                <p><strong>Dirección:</strong>  Calle Negreros 369, Lima, Perú</p>
                <p><strong>Teléfono:</strong> +51 98747478</p>
                <p><strong>Email:</strong> topicossoluciones@empresa.com</p>
                <div class="mt-4">
                    <h5 class="mb-3">Síguenos en las Redes Sociales</h5>
                    <a href="#" class="btn btn-outline-dark me-2"><i class="bi bi-facebook"></i> Facebook</a>
                    <a href="#" class="btn btn-outline-dark me-2"><i class="bi bi-twitter"></i> Twitter</a>
                    <a href="#" class="btn btn-outline-dark"><i class="bi bi-linkedin"></i> LinkedIn</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
