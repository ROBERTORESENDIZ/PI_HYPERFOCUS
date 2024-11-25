@extends('layouts.plantillaAdmi')
@section('modulo', '| EDITAR USUARIO')

@section('seccion')
<div class="container mt-5">
    <h2 class="mb-4">Editar Usuario</h2>

    <form action="{{ route('usuarios.actualizar', $usuario->id) }}" method="POST">
        @csrf
        <!-- Datos no editables -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" class="form-control" value="{{ $usuario->nombre }}" disabled>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" id="apellido" class="form-control" value="{{ $usuario->apellido }}" disabled>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" id="email" class="form-control" value="{{ $usuario->correo_electronico }}" disabled>
        </div>

        <!-- Campos editables -->
        <div class="mb-3">
            <label for="estatus" class="form-label">Estatus</label>
            <select name="estatus" id="estatus" class="form-select">
                <option value="1" {{ $usuario->estatus ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ !$usuario->estatus ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="rol_id" class="form-label">Tipo de Perfil</label>
            <select name="rol_id" id="rol_id" class="form-select">
                @foreach($roles as $id => $nombre)
                    <option value="{{ $id }}" {{ $usuario->rol_id == $id ? 'selected' : '' }}>
                        {{ ucfirst($nombre) }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Botones -->
        <div class="d-flex justify-content-end">
            <a href="{{ route('admiUsuarios') }}" class="btn btn-secondary me-2">Cancelar</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
</div>
@endsection
