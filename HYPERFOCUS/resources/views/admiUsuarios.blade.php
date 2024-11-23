@extends('layouts.plantillaAdmi')
@section('modulo', '| USUARIOS')

@section('seccion')
<div class="container mt-4">
    <!-- Título -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>USUARIOS</h2>
        <div>
            <span>Todos ({{ $usuarios->count() }}) | Administrador ({{ $usuarios->where('tipo_perfil', 'administrador')->count() }})</span>
        </div>
    </div>

    @if(session('success'))
    <script>
        Swal.fire({
            title: '¡Éxito!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'Aceptar'
        });
    </script>
    @endif
    
    @if(session('deleted'))
    <script>
        Swal.fire({
            title: '¡Eliminado!',
            text: '{{ session('deleted') }}',
            icon: 'warning',
            confirmButtonText: 'Aceptar'
        });
    </script>
    @endif
    

    @if($errors->any())
    <script>
        Swal.fire({
            title: '¡Error!',
            text: '{{ $errors->first() }}',
            icon: 'error',
            confirmButtonText: 'Aceptar'
        });
    </script>
    @endif


    <!-- Filtros y búsqueda -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-group">
            <label for="filtroFecha">Filtrar por fecha</label>
            <select id="filtroFecha" class="form-select">
                <option value="recientes">Más reciente primero</option>
                <option value="antiguos">Más antiguo primero</option>
            </select>
        </div>
        <div class="d-flex">
            <input type="text" class="form-control me-2" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-dark">Buscar usuario</button>
        </div>
    </div>

    <!-- Tabla de usuarios -->
    <table class="table table-striped text-center align-middle">
        <thead class="table-light">
            <tr>
                <th>Nombre de usuario</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Tipo de perfil</th>
                <th>Acciones</th>
                <th>Estatus</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <!-- Nombre de usuario -->
                <td>
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-primary text-white text-center me-2" style="width: 30px; height: 30px;">
                            {{ strtoupper(substr($usuario->nombre, 0, 1)) }}
                        </div>
                        {{ $usuario->nombre }}
                    </div>
                </td>
                <!-- Nombre completo -->
                <td>{{ $usuario->nombre }} {{ $usuario->apellido }}</td>
                <!-- Correo -->
                <td>{{ $usuario->correo_electronico }}</td>
                <!-- Tipo de perfil -->
                <td>{{ ucfirst($usuario->tipo_perfil) }}</td>
                <!-- Acciones -->
                <td>
                    <a href="{{ route('usuarios.editar', $usuario->id) }}" class="btn btn-primary btn-sm me-2">
                        <i class="fas fa-pen"></i>
                    </a>
                    
                    <form action="{{ route('eliminarUsuario', $usuario->id) }}" method="POST" class="d-inline delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm delete-btn">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>                    
                </td>
                <!-- Estatus -->
                <td>
                    <input type="checkbox" 
                           class="form-check-input {{ $usuario->estatus ? 'text-primary' : 'text-secondary' }}" 
                           {{ $usuario->estatus ? 'checked' : '' }} 
                           disabled>
                </td>                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();

            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡Esta acción no se puede deshacer!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Enviar el formulario si confirma
                    button.closest('.delete-form').submit();
                }
            });
        });
    });
</script>

@endsection
