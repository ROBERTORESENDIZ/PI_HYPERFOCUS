@extends('layouts.plantillaLogin')
@section('modulo','| Bienvenida')
@section('seccion')

<style>
    .bienvenida-container {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 5%;
    }

    .texto-bienvenida {
        max-width: 50%;
        text-align: center;
        margin-right: 12rem;
        margin-left: 15%;
    }

    .icono-bienvenida {
        color: #B197FC;
    }

    .texto-bienvenida h1 {
        font-size: 80px;
        font-weight: bold;
        margin-bottom: 0;
    }

    .texto-bienvenida h2 {
        margin-top: 0;
        font-size: 1.5rem;
    }

    .imagen-cerebro {
        max-width: 90%;
    }

    .btn-comenzar {
        background-color: #4f6ef5;
        border: none;
        color: white;
        padding: 0.5rem 1.5rem;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 5px;
    }

    .btn-comenzar:hover {
        background-color: #3d58c9;
    }
</style>

<div class="bienvenida-container">
    <!-- Contenedor del texto -->
    <div class="texto-bienvenida">
        <div class="mb-4">
            <i class="fas fa-check-circle fa-5x icono-bienvenida"></i>
        </div>
        <h1>¡BIENVENIDO!</h1>
        <h2>{{ $nombreUsuario }}</h2>
        <hr class="my-5" />
        <p><strong>COMIENZA TU EXPERIENCIA CON</strong></p>
        <div class="my-3">
            <img src="{{ asset('img/logo-hyperfocus.png') }}" alt="HyperFocus Logo" class="img-fluid" style="max-width: 300px;">
        </div>
        <div>
            <a href="{{ route('rutahome') }}" class="btn btn-comenzar">Comenzar</a>
        </div>
    </div>

    <!-- Contenedor de la imagen -->
    <div>
        <img src="{{ asset('img/cerebro.png') }}" alt="Cerebro" class="img-fluid imagen-cerebro">
    </div>
</div>

@endsection



