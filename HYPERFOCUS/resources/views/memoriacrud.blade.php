
@extends('layouts.plantillaUser')
@section('modulo','| Memoria')
@section('seccion')
<link href="{{ asset('/css/memoria.css') }}" rel="stylesheet">

    <div class="container my-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ route('rutamemoria') }}" class="back-btn">&larr;</a>
            <h2 class="text-center flex-grow-1">{{ $concepto->nombre }}</h2>
            <div></div> 
        </div>
        <form action="{{  route('rutaupdateconjunto', $concepto->id)}}" method="POST">
            @csrf
            @method('PUT')
        <table class="table table-bordered" id="tabla-conceptos">
        <thead>
            <tr>
                <th class="text-center">Concepto</th>
                <th class="text-center">Definición</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($concepto as $concep)
                <tr>
                    <td><input type="text" name="concepto" value="{{ $concepto->nombre }}"></td>
                    <td><input type="text" name="definicion" value="{{ $concepto->definicion }}"></td>
                </tr>
            @endforeach
        </tbody>
    </table>

        <button class="btn btn-success mt-3">Agregar</button>
    </div>
        </form>
 @endsection