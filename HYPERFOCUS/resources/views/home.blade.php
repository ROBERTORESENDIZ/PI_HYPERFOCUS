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
                        <h5>Actividades del día:</h5>

                        <!-- Inicio card list  -->
                        <div class=" fontS card border-dark ms-md-3" >
                            <ul class="list-group list-group-flush ">
                                
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input class="form-check-input border-dark me-2 mb-1" type="checkbox" value="" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Actividad 1 esta es la actividad 1 que se realizara en el día
                                        </label>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input class="form-check-input border-dark me-2 mb-1" type="checkbox" value="" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Actividad 2 esta es la actividad 1 que se realizara en el día
                                        </label>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input class="form-check-input border-dark me-2 mb-1" type="checkbox" value="{{old('')}}" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Actividad 3 esta es la actividad 1 que se realizara en el día
                                        </label>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input class="form-check-input border-dark me-2 mb-1" type="checkbox" value="" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Actividad 4
                                        </label>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    



                    <!-- Progresos -->
                    <div class="col-md-6 offset-md-1 col-sm-12 fontP ">

                        <!-- progreso díario -->
                        <h5>Progreso del día:</h5>
                        
                        <div class="row d-flex align-items-center ms-3">
                            <div class="col-md-5 col-sm-12 ">
                                <div class="progress " role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar text-dark cProgreso" style="width: 50% ">50%</div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 pt-2">

                                <div class="pt-md-3 col-md-7 ms-5">
                                    <h6>Actividades completadas:</h6>
                                    <div class="text-center mb-4">
                                        <samp class="fs-1 fontS">2</samp>
                                    </div>
                                    
                                    <h6>Actividades restantes:</h6>
                                    <div class="text-center">
                                        <samp class="fs-1 fontS">2</samp>
                                    </div>
                                   
                                </div>
                                
                                 
                            </div>
                        </div>
                        
                        
                        <!-- Progreso de la semana-->
                        <h5 class="mt-5">Progreso de la semana:</h5>
                        
                        <div class="row d-flex align-items-center py-4">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="progress " role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar text-dark cProgreso" style="width: 10% ">10%</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        
    @endsection