@extends('layouts.plantillaUser')
@section('modulo','| Mis Logros')
@section('seccion')
<link href="{{ asset('/css/mislogros.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs/build/css/alertify.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs/build/css/themes/default.min.css">

<div class="container mt-5">
    <h1 class="text-center"><strong>Mis Logros</strong></h1>

    <div class="row mt-5">
        <!-- Medallas -->
        <div class="col-md-6 text-center mb-4">
            <h2 class="mb-3">Medallas</h2>
            <div class="d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-medal fa-3x me-3 text-warning"></i>
                <div class="coCant border border-dark rounded p-3">
                    <h4 id="medallas">{{ $logros['medallas'] }}</h4>
                </div>
            </div>
            <button class="btn btn-info mt-3" onclick="showMedalAlert()">Ver detalle</button>
        </div>

        <!-- Racha de concentración -->
        <div class="col-md-6 text-center mb-4">
            <h2 class="mb-3">Racha de concentración</h2>
            <div class="d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-hourglass-half fa-3x me-3 text-info"></i>
                <div class="coCant border border-dark rounded p-3">
                    <h4 id="racha">{{ $logros['racha_concentracion'] }}</h4>
                </div>
                <span class="ms-2">Días</span>
            </div>
            <button class="btn btn-info mt-3" onclick="showRachaAlert()">Ver detalle</button>
        </div>
    </div>

    <!-- Alerta justo antes de la gráfica -->
    <div class="row mt-5">
        <div class="col-12">
            <!-- Aquí aparecerá la alerta -->
        </div>
    </div>

    <!-- Gráfica de progreso -->
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="text-center mb-4">Progreso Mensual</h2>
            <canvas id="logrosChart" width="600" height="300"></canvas>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Mostrar alerta de Alertify
        alertify.set('notifier', 'position', 'top-center');
        alertify.success('<strong>¡Tus logros han sido actualizados!</strong>');

        // Animación para medallas y racha
        let medallas = document.getElementById('medallas');
        let racha = document.getElementById('racha');

        let medallasTarget = parseInt(medallas.textContent);
        let rachaTarget = parseInt(racha.textContent);

        animateCount(medallas, 0, medallasTarget);
        animateCount(racha, 0, rachaTarget);

        function animateCount(element, count, target) {
            if (count < target) {
                element.textContent = count + 1;
                setTimeout(() => animateCount(element, count + 1, target), 50);
            }
        }

        // Inicializar gráfica
        const ctx = document.getElementById('logrosChart').getContext('2d');
        const data = {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],
            datasets: [{
                label: 'Progreso Mensual',
                data: [20, 12, 50, 81, 56, 90, 90],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };

        new Chart(ctx, {
            type: 'line',
            data: data
        });
    });

    function showMedalAlert() {
        Swal.fire({
            title: 'Tus Medallas',
            text: `¡Felicidades! Has obtenido {{ $logros['medallas'] }} medallas.`,
            icon: 'info',
            confirmButtonText: 'Cerrar',
        });
    }

    function showRachaAlert() {
        Swal.fire({
            title: 'Tu Racha de Concentración',
            text: `Llevas {{ $logros['racha_concentracion'] }} días consecutivos.`,
            icon: 'info',
            confirmButtonText: 'Cerrar',
        });
    }
</script>
@endsection
