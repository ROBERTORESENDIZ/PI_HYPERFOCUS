@extends('layouts.plantillaUser')
@section('modulo','| Memoria')
@section('seccion')
<link href="{{ asset('/css/memoria.css') }}" rel="stylesheet">

<h1 class="text-center">Memoria</h1>

<!-- Botón que activa el modal para crear un nuevo conjunto -->
<div class="container-create">
    <a class="new-card-link" data-bs-toggle="modal" data-bs-target="#createModal">
        <div class="new-card">
            <div class="plus-sign">+</div>
            <div>Crear</div>
        </div>
    </a>
</div>

<div class="container">
    @foreach ($consultaConjunto as $conjunto)
        <div class="card">
            <div class="title">{{ $conjunto->nombre }}</div>
            <div class="description-title">Descripción</div>
            <div class="concepts">{{ $conjunto->descripcion }}</div>
            <div class="buttons">
                <button class="practice-btn">Practicar</button>
                <a href="{{ route('rutamemoriacrud') }}" class="edit-btn">Editar</a>
                <button class="delete-btn">Eliminar</button>
            </div>
        </div>
    @endforeach
</div>

<!-- Modal con form para insertar nuevo registro -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Crear nuevo conjunto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>

            @session('guardar')
            <script>
                Swal.fire({
                    title: "Guardado",
                    text: '{{ $value }}',
                    icon: "success"});
            </script>
            @endsession

            <form action="{{ route('rutainsertconjunto') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="conceptos" class="form-label">Descripción</label>
                        <input class="form-control" id="conceptos" name="descripcion" rows="3">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection