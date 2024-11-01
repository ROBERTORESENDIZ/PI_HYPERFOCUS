@extends('layouts.plantillaPrincipal')
    @section('modulo','| Planes')
    @section('seccion')
  
        
        <div class="rounded-bottom ctitulo row">
            <h1 class="text-center">Planes</h1>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center g-4">
                <x-planes encabezado="Gratis" punto1="caracteristica 1" punto2="caracteristica 2" punto3="caracteristica3" precio="$10.00"></x-planes>
                <x-planes encabezado="Basico" punto1="caracteristica basica 1" punto2="caracteristica basica2" punto3="caracteristica basica 3" precio="$15.00"></x-planes>
                <x-planes encabezado="Premium" punto1="caracteristica  premuim 1" punto2="caracteristica premium 2" punto3="caracteristica premuim 3" precio="$20.00"></x-planes>
            
            </div>
        </div>

        
        
        


    @endsection