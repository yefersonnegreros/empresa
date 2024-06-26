@extends('layouts.master')

@section('content')

<div class="container py-5 mt-5">
    <div class="card my-2">
        <div class="card-header text-center">
            <h2>Editar Persona</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('personas.update', $persona) }}">
                @csrf
                @method('PATCH')
                {{-- @include('partials.form',['btnText'=>'Actualizar']) --}}
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control @error('cPerNombre') is-invalid @enderror" id="nombre"
                            name="cPerNombre" value="{{ old('cPerNombre', $persona->cPerNombre) }}">
                        @error('cPerNombre')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control @error('cPerApellido') is-invalid @enderror"
                            id="apellido" name="cPerApellido" value="{{ old('cPerApellido', $persona->cPerApellido) }}">
                        @error('cPerApellido')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="direccion" class="form-label">Dirección:</label>
                        <input type="text" class="form-control @error('cPerDireccion') is-invalid @enderror"
                            id="direccion" name="cPerDireccion" value="{{ old('cPerDireccion', $persona->cPerDireccion) }}">
                        @error('cPerDireccion')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="fec_nac" class="form-label">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control @error('dPerFecNac') is-invalid @enderror" id="fec_nac"
                            name="dPerFecNac" value="{{ old('dPerFecNac', $persona->dPerFecNac) }}">
                        @error('dPerFecNac')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="sexo" class="form-label">Sexo:</label>
                        <select class="form-select @error('cPerSexo') is-invalid @enderror" id="sexo"
                            name="cPerSexo">
                            <option value="Masculino" {{ old('cPerSexo', $persona->cPerSexo) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                            <option value="Femenino" {{ old('cPerSexo', $persona->cPerSexo) == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                        </select>
                        @error('cPerSexo')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="sueldo" class="form-label">Sueldo:</label>
                        <input type="text" class="form-control @error('nPerSueldo') is-invalid @enderror" id="sueldo"
                            name="nPerSueldo" value="{{ old('nPerSueldo', $persona->nPerSueldo) }}">
                        @error('nPerSueldo')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="edad" class="form-label">Edad:</label>
                        <input type="number" class="form-control @error('nPerEdad') is-invalid @enderror" id="edad"
                            name="nPerEdad" value="{{ old('nPerEdad', $persona->nPerEdad) }}">
                        @error('nPerEdad')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cPerRnd" class="form-label">Campo RND:</label>
                        <input type="text" class="form-control @error('cPerRnd') is-invalid @enderror" id="cPerRnd"
                            name="cPerRnd" value="{{ old('cPerRnd', $persona->cPerRnd) }}">
                        @error('cPerRnd')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="estado" class="form-label">Estado:</label>
                        <select class="form-select @error('nPerEstado') is-invalid @enderror" id="estado"
                            name="nPerEstado">
                            <option value="1" {{ old('nPerEstado', $persona->nPerEstado) == '1' ? 'selected' : '' }}>Activo</option>
                            <option value="0" {{ old('nPerEstado', $persona->nPerEstado) == '0' ? 'selected' : '' }}>Inactivo</option>
                        </select>
                        @error('nPerEstado')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="{{ route('personas.index') }}" class="btn btn-secondary">Volver a la Lista</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- @if ($errors->any())
<div class="alert alert-danger mt-4">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}
@include('partials.validation-errors')
@endsection

