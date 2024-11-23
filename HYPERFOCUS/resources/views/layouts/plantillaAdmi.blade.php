<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyperfocus @yield('modulo')</title>
    @vite(['resources/js/app.js'])
    <link href="{{ asset('/css/plantillaUser.css') }}" rel="stylesheet">
    <!-- Fuente -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,400;1,700&family=Ruluko&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <!-- Navbar par el usuario -->
    <nav class="navbar border-4 border-bottom border-dark" aria-label="Light offcanvas navbar">
      <div class="container-fluid">
        <!-- Menu Hamburguesa para el offcanvas -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Apartado para perfil -->
        <div class="flex-shrink-0 dropdown me-4">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-circle-user fa-2xl"></i>
          </a>
          <ul class="dropdown-menu text-small shadow-start" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 34px);">
            <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li> -->
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('rutaprincipal')}}">Cerrar sesión</a></li>
          </ul>
        </div>

        <!-- Canvas -->
        <div class="offcanvas offcanvas-start canvaC text-white" tabindex="-1" id="offcanvasNavbarLight" aria-labelledby="offcanvasNavbarLightLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLightLabel">Menú</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <!-- Lista interna -->
            <ul class="nav nav-pills flex-column mb-auto text-white">
              {{--<li class="nav-item">
                <a href="{{route('APODO RUTA')}}" class="nav-link {{ request()->routeIs('APODO RUTA')?'active':'text-white' }}" aria-current="page">
                  <i class="fa-solid fa-house me-2"></i>
                  Panel principal
                </a>
              </li>--}}
              <li>
                <a href="{{route('admiUsuarios')}}" class="nav-link {{ request()->routeIs('APODO RUTA')?'active':'text-white' }}">
                  <i class="fa-solid fa-user-group me-2"></i>
                  Usuarios
                </a>
              </li>
              {{--<li>
                <a href="{{route('APODO RUTA')}}" class="nav-link {{ request()->routeIs('APODO RUTA')?'active':'text-white' }}">
                  <i class="fa-solid fa-object-group me-2"></i>
                  Sistema
                </a>
              </li>
              <li>
                <a href="{{route('APODO RUTA')}}" class="nav-link {{ request()->routeIs('APODO RUTA')?'active':'text-white' }}">
                  <i class="fa-solid fa-circle-question me-2"></i>
                  Soporte
                </a>
              </li>--}}
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- Contenedor de la pagina -->
    <div class="container-fluid mb-2">
      @yield('seccion')
    </div>
  </body>
</html>
