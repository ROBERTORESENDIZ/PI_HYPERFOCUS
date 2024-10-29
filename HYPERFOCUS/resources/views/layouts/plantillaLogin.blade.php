<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyperfocus @yield('modulo')</title>
    @vite(['resources/js/app.js'])
    <link href="{{ asset('/css/plantillaPrincipal.css') }}" rel="stylesheet">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >
</head>
<body>
    
    <!-- Navbar principal -->
    <header class="header1 d-flex flex-wrap justify-content-center py-3 border-bottom border-dark border-3">
        <a href="{{route('rutaprincipal')}}" class=" d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <i class="logo fa-solid fa-brain fa-2xl" style="color: #B197FC;"></i>
            <span class="ttHyperfocus fs-4">Hyperfocus</span>
        </a>
    </header>


    <!-- Contenedor de la pagina -->
    <div class="container-fluid ">
       @yield('seccion')
    </div>



</body>
</html>