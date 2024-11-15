@extends('layouts.plantillaUser')
    @section('modulo','| Home')
    @section('seccion')
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    
        <!-- div Principal -->
        <div class="rowP row ">
            <div class="col-md-12 col-sm-12">

                <div class="row">

                    <div class="mb-5 col-md-12 col-sm-12 text-center fontP">
                        <h1>Hola Usuario!</h1>
                    </div>

                    <!-- Actividades del día -->
                    <div class="col-md-4 ms-md-5  col-sm-12 mb-3 fontP ">
                        <h5>Actividades del día: </h5>
                        <h5 class="text-center">{{$nombreDia }} {{ $fechaHoy}}</h5>

                        <!-- Inicio card list  -->
                        <div class=" fontS card border-dark ms-md-3" >
                            <ul class="list-group list-group-flush ">
                                <form action="/guardarProgreso" method="POST">
                                    @csrf
                                @for($i=0; $i< $totalActD; $i++)
                                    <li class="list-group-item">
                                        <div class="form-check">
                                            <input class="form-check-input border-dark me-2 mb-1 progressCheckbox" type="checkbox" value="" id="checkbox-{{$i}}" onchange="updateProgress()">
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                               {{$actD[$i]}}
                                            </label>
                                        </div>
                                    </li>
                                @endfor
                                
                                
                            </ul>
                        </div>
                        <button type="sumit" class=" btn btn-success mt-3 ms-3">Guardar Progreso</button>
                        </form>
                    </div>
                    



                    <!-- Progresos -->
                    <div class="col-md-6 offset-md-1 col-sm-12 fontP ">

                        <!-- progreso díario -->
                        <h5>Progreso del día:</h5>
                        
                        <div class="row d-flex align-items-center ms-3">
                            <div class="col-md-5 col-sm-12 ">
                                <div class="progress " aria-label="Example with label" aria-valuenow="0"  aria-valuemax="100" >
                                    <div class="progress-bar text-dark cProgreso"  id="progressBarDiario" ></div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 pt-2">

                                <div class="pt-md-3 col-md-7 ms-5">
                                    <h6>Actividades completadas:</h6>
                                    <div class="text-center mb-4">
                                        <samp class="fs-1 fontS" id="actC">0</samp>
                                    </div>
                                    
                                    <h6>Actividades restantes:</h6>
                                    <div class="text-center">
                                        <samp class="fs-1 fontS"  id="actF">{{$totalActD}}</samp>
                                    </div>
                                   
                                </div>
                                
                                 
                            </div>
                        </div>
                        
                        
                        <!-- Progreso de la semana-->
                        <h5 class="mt-5">Progreso de la semana:</h5>
                        
                        <div class="row d-flex align-items-center py-4">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="progress " role="progressbar" aria-label="Example with label"  aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar text-dark cProgreso"  id="progressBarSemana"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            @if(session('progresoGC'))
                <script>
                    Swal.fire({
                    title: "Progreso Guardado correctamente!",
                    icon: "success"
                    });
                </script>
            @endif
        </div>
    



        <script>

            function updateProgress() {
                //Cantidad de acts por semana
                const cantActSemana = {{$totalActS}};

                            //pPORCENTAJE POR DIA
                //Identificación de check boxes
                const checkboxes = document.querySelectorAll('.progressCheckbox');
                //Indentifacación de la barra de progreso y num actividades
                const progressBarDiario = document.getElementById('progressBarDiario');
                const actividadesCompletas = document.getElementById('actC');
                const actividadesFaltantes = document.getElementById('actF');
                //Cantidad de checkboxes
                const totalCheckboxes = checkboxes.length;

                // Contar cuántos checkboxes están marcados
                const checkedCant = Array.from(checkboxes).filter(checkbox => checkbox.checked).length;

                // Calcular el porcentaje de progreso
                const progresoPD = (checkedCant / totalCheckboxes) * 100;

                // Actualizar la barra de progreso
                progressBarDiario.style.width = progresoPD + '%';
                progressBarDiario.textContent = Math.round(progresoPD) + '%';
                //Actualizar la cantidad de acts
                actividadesCompletas.textContent = checkedCant;
                actividadesFaltantes.textContent = totalCheckboxes - checkedCant;





                            //PORCENTAJE POR SEMANA
                //Indentifacación de la barra de progreso
                const progressBarSemana = document.getElementById('progressBarSemana');

                // Calcular el porcentaje de progreso
                const progresoPS = (checkedCant / cantActSemana) * 100;

                // Actualizar la barra de progreso
                progressBarSemana.style.width = progresoPS + '%';
                progressBarSemana.textContent = Math.round(progresoPS) + '%';
            }
        </script>
        
    @endsection