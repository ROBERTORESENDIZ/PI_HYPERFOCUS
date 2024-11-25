@extends('layouts.plantillaUser')
@section('modulo','| Memoria')
@section('seccion')

<h1 class="text-center my-4">Memoria</h1>

<!-- Botón que activa el modal para crear un nuevo conjunto -->
<div class="text-center mb-4">
    <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#createModal">
        Crear Nuevo Conjunto
    </button>
</div>

<!-- Alertas de SweetAlert para las sesiones -->
@if(session('destroy'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Eliminado!',
            text: '{{ session("destroy") }}',
            timer: 3000,
            showConfirmButton: false
        });
    </script>
@endif

@if(session('update'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Actualizado!',
            text: '{{ session("update") }}',
            timer: 3000,
            showConfirmButton: false
        });
    </script>
@endif

@if(session('guardar'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Guardado!',
            text: '{{ session("guardar") }}',
            timer: 3000,
            showConfirmButton: false
        });
    </script>
@endif

<div class="container">
    <div class="row g-3">
        @foreach ($consultaConjunto as $conjunto)
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white position-relative">
                    {{ $conjunto->nombre }}
                    <button class="btn btn-light btn-sm position-absolute top-0 end-0 m-1"
                            title="Editar"
                            data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            data-id="{{ $conjunto->id }}"
                            data-nombre="{{ $conjunto->nombre }}"
                            data-descripcion="{{ $conjunto->descripcion }}">
                        <i class="bi bi-pencil"></i>
                    </button>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Descripción</h6>
                    <p class="card-text">{{ $conjunto->descripcion }}</p>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-success btn-sm">Practicar</button>
                        <a href="{{ route('rutamemoriacrud') }}" class="btn btn-warning btn-sm">Agregar conceptos</a>
                        <form id="form-eliminar-{{ $conjunto->id }}" action="{{ route('rutadeleteconjuto', $conjunto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmarEliminacion('{{ $conjunto->id }}', '{{ $conjunto->nombre }}')">
                                Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Modal para crear un nuevo conjunto -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Crear nuevo conjunto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <form action="{{ route('rutainsertconjunto') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="conceptos" class="form-label">Descripción</label>
                        <textarea class="form-control" id="conceptos" name="descripcion" rows="3" required></textarea>
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

<!-- Modal para editar un conjunto -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar conjunto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <form action="{{ route('rutaupdateconjunto',$conjunto->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit-titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="edit-titulo" name="nombre" value="{{ $conjunto->nombre }}">
                    </div>
                    <div class="mb-3">
                        <label for="edit-descripcion" class="form-label">Descripción</label>
                        <input class="form-control" id="edit-descripcion" name="descripcion" rows="3" value="{{ $conjunto->descripcion }}"></input>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function confirmarEliminacion(id, nombre) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: '¡Sí, eliminar!',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.isConfirmed) {
                // Enviar el formulario de eliminación
                document.getElementById('form-eliminar-' + id).submit();
            }
        });
    }
</script>


@endsection