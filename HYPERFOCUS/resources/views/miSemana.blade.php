@extends('layouts.plantillaUser')
@section('modulo','| Mi semana')
@section('seccion')
<link href="{{ asset('/css/miSemana.css') }}" rel="stylesheet">

<div class="container-fluid">
    <div class="row mb-4">
        <h1 class="text-center">Mi semana</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="calendar-section">
        <h2>Día</h2>
        <div class="calendar-table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Día</th>
                        <th>Actividad</th>
                        <th>Hora</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($actividades as $actividad)
                    <tr>
                        <td>{{ $actividad['dia'] }}</td>
                        <td>{{ $actividad['nombre'] }}</td>
                        <td>{{ $actividad['hora_inicio'] }}</td>
                        <td>
                            <button class="btn btn-danger btn-sm" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#eliminarActividadModal"
                                    onclick="setEliminarActividadId({{ $actividad['id'] }})">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="time-distribution">
        <h2>Distribución de tiempo</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="time-section">
                    <h3>Tiempo libre:</h3>
                    <form action="{{ route('tiempo.guardar', 'libre') }}" method="POST">
                        @csrf
                        <div class="time-inputs">
                            <label>De:</label>
                            <input type="time" name="desde" required>
                            <label>a</label>
                            <input type="time" name="hasta" required>
                        </div>
                        <button type="submit" class="btn btn-success">Agregar</button>
                    </form>
                    
                    <div class="mt-3">
                        @foreach($tiemposLibres as $tiempo)
                        <div class="time-item">
                            <span>{{ $tiempo['desde'] }} - {{ $tiempo['hasta'] }}</span>
                            <button class="btn btn-danger btn-sm"
                                    data-bs-toggle="modal"
                                    data-bs-target="#eliminarTiempoLibreModal">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="time-section">
                    <h3>Tiempo ocupado:</h3>
                    <form action="{{ route('tiempo.guardar', 'ocupado') }}" method="POST">
                        @csrf
                        <div class="time-inputs">
                            <label>De:</label>
                            <input type="time" name="desde" required>
                            <label>a</label>
                            <input type="time" name="hasta" required>
                        </div>
                        <button type="submit" class="btn btn-success">Agregar</button>
                    </form>
                    
                    <div class="mt-3">
                        @foreach($tiemposOcupados as $tiempo)
                        <div class="time-item">
                            <span>{{ $tiempo['desde'] }} - {{ $tiempo['hasta'] }}</span>
                            <button class="btn btn-danger btn-sm"
                                    data-bs-toggle="modal"
                                    data-bs-target="#eliminarTiempoOcupadoModal">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="activities-section">
        <h2>Actividades</h2>
        <form action="{{ route('actividad.guardar') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Duración:</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="duracion" required>
                            <span class="input-group-text">Min</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Prioridad:</label>
                        <select class="form-control" name="prioridad" required>
                            <option value="Alta">Alta</option>
                            <option value="Media">Media</option>
                            <option value="Baja">Baja</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Hora inicio:</label>
                        <input type="time" class="form-control" name="hora_inicio" required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Guardar Actividad</button>
                </div>
            </div>
        </form>
    </div>
</div>

@include('components.deleteModals')

<script>
function setEliminarActividadId(id) {
    document.getElementById('eliminarActividadForm').action = 
        "{{ route('actividad.eliminar', '') }}/" + id;
}
</script>

@endsection