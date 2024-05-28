@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush

@section('content')

<div class="container-fluid background-image d-flex align-items-center justify-content-center" style="background-color: rgba(255, 255, 255, 0.5);">
    <div class="text-white text-center shadow p-3">
        <h1 class="display-1">Bienvenido a Empresa</h1>
        <p class="lead">Tu mejor lugar para potenciar tu negocio</p>
    </div>
</div>

@endsection