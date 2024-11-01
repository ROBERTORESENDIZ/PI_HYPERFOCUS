<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyperfocus @yield('modulo')</title>
    @vite(['resources/js/app.js'])
    <link href="{{ asset('/css/plantillaPrincipal.css') }}" rel="stylesheet">

    <!-- fuente-->
    <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,400;1,700&family=Ruluko&display=swap" rel="stylesheet">
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
      
        <ul class=" nav nav-pills">
            <li class=" nav-item"><a href="{{route('rutaplanes')}}" class=" {{ request()->routeIs('rutaplanes')?'tnav':'text-dark' }} nav-link ">Planes</a></li>
            <li class="nav-item"><a href="{{route('rutapreguntas')}}" class=" {{ request()->routeIs('rutapreguntas')?'tnav':'text-dark' }} nav-link ">Preguntas frecuentes</a></li>
        </ul>

        <div class="login col-md-2 text-end">
            <a type="button" href="{{route('rutainiciarsesion')}}" class="btn btn-outline-secondary mb-1">Iniciar sesión</a>
            <a type="button" href="{{route('rutaregistrarse')}}" class="btn btn-dark ">Registrarse</a>
            
        </div>
    </header>


    <!-- Contenedor de la pagina -->
    <div class="container-fluid mb-2">
       @yield('seccion')
    </div>



    <!-- Pie de pagina -->
    <footer class=" rounded-top-5 d-flex flex-wrap  align-items-center py-3  ">
        <div class="mx-4 ">
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
        </div>

        <div class="d-flex align-items-center">
        <i class="logo  fa-solid fa-brain fa-lg" style="color: #B197FC;"></i>
        <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Hypperfocus</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-body-secondary" href="{{route('rutaplanes')}}">Planes</a></li>
        <li class="ms-3"><a class="text-body-secondary" href="{{route('rutapreguntas')}}">Preguntas</li>
        <li class="ms-3"><a class="text-body-secondary" href="#"></a></li>
        </ul>
    </footer>
</body>
</html>