@extends('layouts.plantillaUser')
@section('modulo','| Mi semana')
@section('seccion')
<link href="{{ asset('/css/miSemana.css') }}" rel="stylesheet">

<div class="container-fluid">
    <div class="row mb-4">
        <h1 class="text-center"><strong>Mis actividades</strong></h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <div class="col-12 mt-2">
        <div class="row mb-4">
            <!-- Tabla del dia -->
            
            
            <div class="col-md-10 col-sm-12  offset-md-1 mt-5">
                
                <div class="">
                    <table class="table table-bordered border-dark">
                        <thead class="align-top" >
                            <tr>
                            <th class="colt ">Prioridad</th>
                            <th class="colt ">Actividad</th>
                            <th class="colt ">Descripción</th>
                            <th class="colt">Fecha de inicio</th>
                            <th class="colt">Hora de inicio</th>
                            <th class="colt">Duracion (Mins)</th>
                            <th class="colt">Hora de fin</th>
                            <th class="colt">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">


                            @foreach($actividades as $actividad)
                            <tr>
                                <td>
                                    {{ $actividad->prioridad }}
                                </td>
                                <td>
                                    {{ $actividad->nombre }}
                                </td>
                                <td>
                                    {{ $actividad->descripcion }}
                                </td>
                                <td>
                                    {{ $actividad->fecha_inicio }}
                                </td>
                                <td class="text-center">{{ $actividad->hora_inicio}}</td>
                                <td class="text-center">{{ $actividad->duracion}}</td>
                                <td class="text-center">{{ $actividad->hora_fin}}</td>
                                <td class="text-center">
                                    <button class="btn btn-danger btn-sm" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#Act{{$actividad->id}}"
                                            >
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <button class="btn btn-warning btn-sm" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#ModalA{{$actividad->id}}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </td>
                            </tr>
                            <x-EditarAct id='{{$actividad->id}}' nombre='{{ $actividad->nombre}}' prioridad='{{ $actividad->idPrio}}' fechaIn='{{ $actividad->fecha_inicio}}' fecha='{{ $fecha}}' horaInicio='{{ $actividad->hora_inicio}}' duracion='{{ $actividad->duracion}}' descripcion='{{ $actividad->descripcion}}'> </x-EditarAct>
                            <x-EliminarAct id='{{$actividad->id}}' nombre='{{ $actividad->nombre}}' > </x-EliminarAct>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            

            <div class="col-9  offset-md-1">
                
                <!-- Divistribucion del tiempo -->
                <div class="row">
                   
                    <div class="  mt-md-4">
                        <h3 class=""><strong>Actividades</strong></h3>
                    </div>
                    <div class="col-12  mb-4">
                        <form action="{{ route('actividad.guardar') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <input type="text " class="form-control border border-dark" name="nombre" >
                                        <small class="text-danger fts-italic">{{ $errors->first('nombre') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Prioridad:</label>
                                        <select class="form-control border border-dark" name="prioridad" >
                                            <option value="1">Alta</option>
                                            <option value="2">Media</option>
                                            <option value="3">Baja</option>
                                        </select>
                                        <small class="text-danger fts-italic">{{ $errors->first('nombre') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Fecha:</label>
                                        <input type="date" class="form-control border border-dark" name="fechaInicio" min="{{$fecha}}" >
                                        <small class="text-danger fts-italic">{{ $errors->first('fechaInicio') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Hora inicio:</label>
                                        <input type="time" class="form-control border border-dark" name="horaInicio" >
                                        <small class="text-danger fts-italic">{{ $errors->first('horaInicio') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Duración:</label>
                                        <div class="input-group ">
                                            <input type="number" class="form-control border border-dark" name="duracion" min="1" >
                                            <span class="input-group-text  border border-dark">Min</span>
                                            <small class="text-danger fts-italic">{{ $errors->first('duracion') }}</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Descripción:</label>
                                        <input type="text " class="form-control border border-dark" name="descripcion"  >
                                        <small class="text-danger fts-italic">{{ $errors->first('descripcion') }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <button type="submit" class="btn btn-success">Guardar Actividad</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>


    @session('exito')
      <script>
        Swal.fire({
            title: "Se guardo correctamente",
            text: "{{ $value }}",
            icon: "success"
          });
      </script>
    @endsession
    @session('ActEx')
      <script>
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "{{ $value }}",
          });
      </script>
    @endsession

    @session('exitoupdate')
      <script>
        Swal.fire({
            title: "Se edito correctamente",
            text: "{{ $value }}",
            icon: "success"
          });
      </script>
    @endsession
    @session('ActEx2')
      <script>
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "{{ $value }}",
          });
      </script>
    @endsession

    @session('exitodelete')
        <script>
        Swal.fire({
            title: "Eliminacion exitosa",
            text: "{{ $value }}",
            icon: "success",
            showConfirmButton: false,
            timer: 1700
            });
        </script>
    @endsession



















    



@endsection