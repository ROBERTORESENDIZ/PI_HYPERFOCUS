@extends('layouts.plantillaUser')
@section('modulo','| Memoria')
@section('seccion')
<link href="{{ asset('/css/memoria.css') }}" rel="stylesheet">

<div class="row">
    <h1 class="text-center">Memoria</h1>
    <div class="container">
        <div class="card">
            <div class="title">Práctica 1</div>
            <div class="concepts">## Conceptos</div>
            <div class="buttons">
                <button class="practice-btn">Practicar</button>
                <button class="edit-btn">Editar</button>
                <button class="delete-btn">Eliminar</button>
            </div>
        </div>
        
       
        <a href="{{ route('rutamemoriacrud') }}" class="new-card-link">
            <div class="new-card">
                <div class="plus-sign">+</div>
                <div>Crear</div>
            </div>
        </a>
    </div>
</div>

@endsection
