@extends('layouts.plantillaLogin')
@section('modulo','| Registrarse')
@section('seccion')
<link href="{{ asset('/css/iniciarsesion.css') }}" rel="stylesheet">

<div class="container d-flex justify-content-end align-items-center" style="height: 100vh; position: relative;">
    <!-- Formulario de registrO-->
    <div class="card p-4" style="width: 600px;">
        <h2 class="text-center mb-3">Registrarse</h2>
        <form action="/registrarse" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
                <small class="text-danger">{{ $errors->first('nombre') }}</small>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
                <small class="text-danger">{{ $errors->first('apellido') }}</small>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <small class="text-danger">{{ $errors->first('email') }}</small>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <small class="text-danger">{{ $errors->first('password') }}</small>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">Registrarse</button>
            <div class="text-center mt-3">
                <small>¿Ya tienes cuenta? <a href="{{ route('rutainiciarsesion') }}">Inicia sesión</a></small>
            </div>
        </form>
    </div>
</div>
@endsection
