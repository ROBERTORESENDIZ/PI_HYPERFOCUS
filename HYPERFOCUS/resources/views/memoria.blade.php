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
            title: "Actualizado",
            text: '{{ session("update") }}',
            icon: "success"
        });
    </script>
@endif

<div class="container">
    <div class="row g-3">
        @foreach ($consultaConjunto as $conjunto)
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        {{ $conjunto->nombre }}
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Descripción</h6>
                        <p class="card-text">{{ $conjunto->descripcion }}</p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-success btn-sm">Practicar</button>
                            <a href="{{ route('rutamemoriacrud') }}" class="btn btn-warning btn-sm">Editar</a>
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

<!-- Modal con form para insertar nuevo registro -->
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

<script>
    function confirmarEliminacion(id, nombre) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`form-eliminar-${id}`).submit();
            }
        })
    }
</script>
@endsection
