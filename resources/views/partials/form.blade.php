@csrf
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="apellido" class="form-label">Apellido:</label>
        <input type="text" id="apellido" name="cPerApellido" class="form-control @error('cPerApellido') is-invalid @enderror" value="{{ old('cPerApellido') }}">
        @error('cPerApellido')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="col-md-6 mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" id="nombre" name="cPerNombre" class="form-control @error('cPerNombre') is-invalid @enderror" value="{{ old('cPerNombre') }}">
        @error('cPerNombre')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="direccion" class="form-label">Dirección:</label>
        <input type="text" id="direccion" name="cPerDireccion" class="form-control @error('cPerDireccion') is-invalid @enderror" value="{{ old('cPerDireccion') }}">
        @error('cPerDireccion')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="col-md-6 mb-3">
        <label for="fecha_nac" class="form-label">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nac" name="dPerFecNac" class="form-control @error('dPerFecNac') is-invalid @enderror" value="{{ old('dPerFecNac') }}">
        @error('dPerFecNac')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="edad" class="form-label">Edad:</label>
        <input type="number" id="edad" name="nPerEdad" class="form-control @error('nPerEdad') is-invalid @enderror" value="{{ old('nPerEdad') }}">
        @error('nPerEdad')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="col-md-6 mb-3">
        <label for="sexo" class="form-label">Sexo:</label>
        <select id="sexo" name="cPerSexo" class="form-select @error('cPerSexo') is-invalid @enderror">
            <option value="Masculino" {{ old('cPerSexo') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
            <option value="Femenino" {{ old('cPerSexo') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
        </select>
        @error('cPerSexo')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="sueldo" class="form-label">Sueldo:</label>
        <input type="number" id="sueldo" name="nPerSueldo" step="0.01" class="form-control @error('nPerSueldo') is-invalid @enderror" value="{{ old('nPerSueldo') }}">
        @error('nPerSueldo')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="col-md-6 mb-3">
        <label for="rnd" class="form-label">RND:</label>
        <input type="text" id="rnd" name="cPerRnd" class="form-control @error('cPerRnd') is-invalid @enderror" value="{{ old('cPerRnd') }}">
        @error('cPerRnd')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="category" class="form-label">Categoría:</label>
        <select id="category" name="category_id" class="form-select @error('category_id') is-invalid @enderror">
            <option value="">Seleccione una categoría</option>
            @foreach($categories as $id => $name)
                <option value="{{ $id }}" {{ old('category_id', $persona->category_id) == $id ? 'selected' : '' }}>{{ $name }}</option>
            @endforeach
        </select>
        @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        <label for="image" class="form-label">Imagen:</label>
        <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror">
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="pie-tarjeta text-center">
    <div>
        <a href="{{ route('personas.index') }}" class="btn btn-secondary">Volver a la Lista</a>
    </div>
    <div>
        <button class="btn btn-primary">{{$btnText}}</button>
    </div>
</div>