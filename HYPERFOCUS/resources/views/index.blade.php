@extends('layouts.plantillaPrincipal')
    @section('modulo','| Principal')
    @section('seccion')
    <link href="{{ asset('/css/index.css') }}" rel="stylesheet">
        
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12  cf rounded-bottom-5">
                        <div class="col-12 cont ">
                            <div class="row ">
                                <h1 class="text-center fuente mt-3">Un día a la vez!</h1>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="row ">
                    <!-- Espacio de contenidos -->
                    <div class=" col-md-12 mt-4">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 m-5">
                                <div class="row ">
                                    <div class="  fonc  ">
                                        <div class="i">
                                            <img class="img-fluid m-md-5" src="{{ asset('/img/Imagenf1.svg') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 mt-md-5 text-end">
                                <div class="row align-items-center">
                                    <div class=" col-12 mt-md-5">
                                        <h2 class=" mt-md-5"><strong>Organiza tus actividades!</strong></h2>
                                        <h4>Estructuramos tus tareas diarias de una manera eficiente para que no tengas que preocuparte por organizarlo. </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Espacio 2 -->
                    <div class=" col-md-12">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 m-5">
                                <div class="row align-items-center">
                                    <div class=" col-12 mt-md-5 text-start">
                                        <h2 class=" mt-md-5"><strong>Mejora tu concentración! </strong></h2>
                                        <h4>Personalizamos tu periodo de concentración para de tus tareas, utilizando el método pomodoro.</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5 col-sm-12 mt-md-5 ">
                                <div class="row ms-md-5 ">
                                    <div class="  fonc2  ms-md-5 ">
                                        <div class="">
                                            <img class="img-fluid " src="{{ asset('/img/Imagenf2.svg') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contenido 3 -->
                    <div class=" col-md-12 mt-4">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 m-5">
                                <div class="row ">
                                    <div class="  fonc3  ">
                                        <div class="i">
                                            <img class="img-fluid m-md-5" src="{{ asset('/img/Imagenf3.svg') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 mt-md-5 text-end">
                                <div class="row align-items-center">
                                    <div class=" col-12 mt-md-5">
                                        <h2 class=" mt-md-5"><strong>Trabaja tu memoria!</strong></h2>
                                        <h4>Trabaja tu memoria utilizando flash cards de repaso. </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contenedor final -->

                    <div class=" col-md-12 mt-4">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <div class="row ">
                                    <div class=" ">
                                        <div class="i">
                                            <img class="img-fluid" src="{{ asset('/img/Imagen4.svg') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 mt-md-5 text-center">
                                <div class="row align-items-center">
                                    <div class=" col-12 ">
                                        <h2 class=" mt-md-5"><strong>¡Cada uno de tus logros es importante! </strong></h2>
                                        <h4>Recolecta medallas y opten logros, mientras realizas tus actividades, tareas, ciclos de estudio y tiempos de concentración.  </h4>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-12 mt-md-5 ">
                                <div class="row align-items-center">
                                    <div class="row ">
                                        <div class="  ">
                                            <div class="">
                                                <img class="img-fluid " src="{{ asset('/img/Imagen5.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>




        

        
    @endsection