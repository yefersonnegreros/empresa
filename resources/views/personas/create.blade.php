@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/crud-styles.css') }}">
@endpush

@section('content')
<div class="crud-container ">
    <h1 class="crud-title">Agregar Persona</h1>

    <form class="crud-form" action="{{ route('personas.store') }}" method="POST">
    @include('partials.form',['btnText' => 'Guardar'])
    </form>
</div>
@endsection
