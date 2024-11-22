@extends('layouts.plantillaPrincipal')
@section('modulo','| Preguntas')
@section('seccion')
<link href="{{ asset('/css/preguntasf.css') }}" rel="stylesheet"> 
        
<div class="rounded-bottom ctitulo row">
    <h1 class="text-center">Preguntas</h1>
</div>

<div class="container my-4">
    <div class="accordion" id="accordionExample">
        <div class="question-card">
            <div class="question-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-block text-left question-button" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ¿Pregunta 1?
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="question-content">
                Aqui debe ir toda la respuesta detallada de la pregunta 1
                </div>
            </div>
        </div>
        
        <div class="question-card">
            <div class="question-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-block text-left question-button collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Pregunta 2?
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="question-content">
                Aqui debe ir toda la respuesta detallada de la pregunta 2
                </div>
            </div>
        </div>

        <!-- Más bloques de preguntas añadidos -->
        <div class="question-card">
            <div class="question-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-block text-left question-button collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ¿Pregunta 3?
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="question-content">
                    Aqui debe ir toda la respuesta detallada de la pregunta 3
                </div>
            </div>
        </div>

        <div class="question-card">
            <div class="question-header" id="headingFour">
                <h2 class="mb-0">
                    <button class="btn btn-block text-left question-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        ¿Pregunta 4?
                    </button>
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="question-content">
                Aqui debe ir toda la respuesta detallada de la pregunta 4
                </div>
            </div>
        </div>

        <div class="question-card">
            <div class="question-header" id="headingFive">
                <h2 class="mb-0">
                    <button class="btn btn-block text-left question-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        ¿Pregunta 5?
                    </button>
                </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="question-content">
                Aqui debe ir toda la respuesta detallada de la pregunta 5
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection
