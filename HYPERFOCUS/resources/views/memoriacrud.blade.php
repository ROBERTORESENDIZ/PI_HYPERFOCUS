
@extends('layouts.plantillaUser')
@section('modulo','| Memoria')
@section('seccion')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">
<link href="{{ asset('/css/memoriacrud.css') }}" rel="stylesheet">


    <div class="container my-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ route('rutamemoria') }}" class="back-btn">&larr;</a>
            <h2 class="text-center flex-grow-1">Nombre de conjunto</h2>
            <div></div> 
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Concepto</th>
                    <th class="text-center">Definición</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ejemplo</td>
                    <td>La definición del concepto ingresado se mostrará aqui una vez validada</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                        <button class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></button>
                    </td>
                </tr>
                
            </tbody>
        </table>

        <button class="btn btn-success mt-3">Agregar</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>

    @endsection