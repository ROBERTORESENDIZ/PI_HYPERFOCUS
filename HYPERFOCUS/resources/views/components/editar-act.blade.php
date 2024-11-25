<div class="modal fade" id="ModalA{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Actividad</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="/mi-semana/editar/{{$id}}" method="POST">
                        <!-- llave de paso para envios por post -->
                        @csrf

                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <input type="text " class="form-control border border-dark" name="nombre2"  value="{{$nombre}}">
                                        <small class="text-danger fts-italic">{{ $errors->first('nombre2') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descripción:</label>
                                        <input type="text " class="form-control border border-dark" name="descripcion2"  value="{{$descripcion}}" >
                                        <small class="text-danger fts-italic">{{ $errors->first('descripcion2') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Prioridad:</label>
                                        <select class="form-control border border-dark" id="prioridad{{$id}}" name="prioridad2" >
                                            <option value="1">Alta</option>
                                            <option value="2">Media</option>
                                            <option value="3">Baja</option>
                                        </select>
                                        <small class="text-danger fts-italic">{{ $errors->first('prioridad2') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fecha:</label>
                                        <input type="date" class="form-control border border-dark" name="fechaInicio2" min="{{$fecha}}" value="{{$fechaIn}}" >
                                        <small class="text-danger fts-italic">{{ $errors->first('fechaInicio2') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Hora inicio:</label>
                                        <input type="time" class="form-control border border-dark" name="horaInicio2" value="{{$horaInicio}}">
                                        <small class="text-danger fts-italic">{{ $errors->first('horaInicio2') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Duración:</label>
                                        <div class="input-group ">
                                            <input type="number" class="form-control border border-dark" name="duracion2" min="1" value="{{$duracion}}" >
                                            <span class="input-group-text  border border-dark">Min</span>
                                            <small class="text-danger fts-italic">{{ $errors->first('duracion2') }}</small>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="sumit" class="btn btn-success">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            // Configura el valor deseado
            document.getElementById('prioridad{{$id}}').value = {{$prioridad}};
        </script>
    </div>

    