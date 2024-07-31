@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/crud-styles.css') }}">
@endpush

@section('content')
<div class="crud-container ">
    <h1 class="crud-title">Agregar Persona</h1>

    <form class="crud-form" action="{{ route('personas.store') }}" method="POST" enctype="multipart/form-data">
    @include('partials.form',['btnText' => 'Guardar'])

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </form>
</div>
@endsection
