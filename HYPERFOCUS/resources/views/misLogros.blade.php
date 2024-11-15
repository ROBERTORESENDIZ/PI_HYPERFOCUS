@extends('layouts.plantillaUser')
    @section('modulo','| Mis Logros')
    @section('seccion')
    <link href="{{ asset('/css/mislogros.css') }}" rel="stylesheet">
        
        <div class=" row">
            
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <h1 class="text-center mt-5"><strong>Mis logros</strong></h1>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6 text-center mb-5">
                                    <h2 class="mb-4">Medallas</h2>
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-1  ">
                                            <i class=" fa-solid fa-medal fa-2xl"> </i>
                                        </div>
                                        <div class="col-1 coCant border border-dark rounded  ">
                                            <h4 class=" text-center">5</h4>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>

                                <div class="col-md-6 text-center">
                                    <h2 class="mb-4">Racha de concentración</h2>
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-1 ">
                                            <i class="fa-solid fa-hourglass-half fa-2xl"></i>
                                        </div>
                                        <div class="col-1 coCant border border-dark rounded">
                                            <h4 class=" text-center ">10</h4>
                                        </div>
                                        <div class="col-1">
                                            <h4 class=" text-center">Dias</h4>
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