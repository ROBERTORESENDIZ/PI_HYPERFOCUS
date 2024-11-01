@extends('layouts.plantillaLogin')
@section('modulo', '| Login')
@section('seccion')
<link href="{{ asset('/css/iniciarsesion.css') }}" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container d-flex align-items-center justify-content-center" style="height: 100vh; position: relative;">
    <!-- Formulario de inicio de sesión -->
    <div class="card p-4" style="width: 300px;">
        <h2 class="text-center mb-3">Iniciar sesión</h2>
        <div class="text-center mb-4">
            <i class="fas fa-user-circle fa-3x"></i> 
        </div>
        <form action="/iniciarsesion" method="POST"> 
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                <small class="text-danger">{{ $errors->first('email') }}</small>
            </div>
            <div class="form-group mt-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <small class="text-danger">{{ $errors->first('password') }}</small>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">Iniciar sesión</button>
            <div class="text-center mt-3">
                <a href="#" onclick="showPasswordResetAlert()">¿Olvidaste la contraseña?</a>
            </div>
        </form>
    </div>
</div>

<script>
    function showPasswordResetAlert() {
        Swal.fire({
            title: 'Correo enviado',
            text: 'Se ha enviado un enlace de restablecimiento de contraseña a tu correo.',
            icon: 'success',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#3085d6',
            background: '#f8f9fa'
        });
    }
</script>
@endsection
