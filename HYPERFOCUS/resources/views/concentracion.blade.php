@extends('layouts.plantillaUser')
@section('modulo','| Concentración')
@section('seccion')
<!-- Agregamos el enlace al archivo CSS -->
<link href="{{ asset('/css/concentracion.css') }}" rel="stylesheet">

<div class="container mt-4">
    <div class="row">
        <h1 class="text-center mb-4">Concentración</h1>
    </div>

    <div class="concentration-container">
        <div class="card">
            <div class="card-body">
                <!-- Selector de tiempo -->
                <div class="mb-4">
                    <label class="form-label">Tiempo destinado:</label>
                    <div class="d-flex gap-2">
                        <select id="tiempoTotal" class="form-select w-auto">
                            <option value="20">20 min</option>
                            <option value="30">30 min</option>
                            <option value="45">45 min</option>
                            <option value="60">60 min</option>
                        </select>
                        <button id="btnGenerar" class="btn btn-success">Generar</button>
                    </div>
                </div>

                <!-- Display del temporizador -->
                <div class="text-center mb-4">
                    <h4>Tu ciclo de concentración:</h4>
                    <div id="displayTiempo" class="display-timer bg-pink p-4 rounded-3 d-inline-block">
                        <span id="minutos">00</span>
                        <br>Min
                    </div>
                </div>

                <!-- Configuración de intervalos -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="interval-section">
                            <h5>Intervalos de concentración:</h5>
                            <div class="d-flex gap-2 align-items-center interval-inputs">
                                <input type="number" id="numIntervalos" class="form-control" value="2" min="1">
                                <span>De</span>
                                <input type="number" id="tiempoConcentracion" class="form-control" value="9" min="1">
                                <span>min</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="interval-section">
                            <h5>Intervalos de descanso:</h5>
                            <div class="d-flex gap-2 align-items-center interval-inputs">
                                <input type="number" id="numDescansos" class="form-control" value="1" min="1">
                                <span>De</span>
                                <input type="number" id="tiempoDescanso" class="form-control" value="2" min="1">
                                <span>min</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botones de control -->
                <div class="text-center">
                    <button id="btnEmpezar" class="btn btn-primary btn-control">Empezar</button>
                    <button id="btnPausar" class="btn btn-secondary btn-control" disabled>Pausar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// El mismo código JavaScript que teníamos antes
document.addEventListener('DOMContentLoaded', function() {
    let temporizador;
    let tiempoRestante;
    let estaPausado = true;
    let estaEnConcentracion = true;
    let cicloActual = 1;
    
    const btnGenerar = document.getElementById('btnGenerar');
    const btnEmpezar = document.getElementById('btnEmpezar');
    const btnPausar = document.getElementById('btnPausar');
    const displayMinutos = document.getElementById('minutos');
    
    btnGenerar.addEventListener('click', function() {
        const tiempoTotal = parseInt(document.getElementById('tiempoTotal').value);
        tiempoRestante = tiempoTotal * 60;
        actualizarDisplay();
        resetearEstado();
    });
    
    btnEmpezar.addEventListener('click', function() {
        if (estaPausado) {
            iniciarTemporizador();
            btnEmpezar.textContent = 'Reiniciar';
            btnPausar.disabled = false;
            estaPausado = false;
        } else {
            resetearEstado();
        }
    });
    
    btnPausar.addEventListener('click', function() {
        if (!estaPausado) {
            clearInterval(temporizador);
            btnPausar.textContent = 'Reanudar';
            estaPausado = true;
        } else {
            iniciarTemporizador();
            btnPausar.textContent = 'Pausar';
            estaPausado = false;
        }
    });
    
    function iniciarTemporizador() {
        clearInterval(temporizador);
        temporizador = setInterval(function() {
            if (tiempoRestante > 0) {
                tiempoRestante--;
                actualizarDisplay();
            } else {
                if (estaEnConcentracion) {
                    tiempoRestante = parseInt(document.getElementById('tiempoDescanso').value) * 60;
                    estaEnConcentracion = false;
                    document.getElementById('displayTiempo').classList.remove('bg-pink');
                    document.getElementById('displayTiempo').classList.add('bg-blue');
                } else {
                    tiempoRestante = parseInt(document.getElementById('tiempoConcentracion').value) * 60;
                    estaEnConcentracion = true;
                    cicloActual++;
                    document.getElementById('displayTiempo').classList.remove('bg-blue');
                    document.getElementById('displayTiempo').classList.add('bg-pink');
                    
                    if (cicloActual > parseInt(document.getElementById('numIntervalos').value)) {
                        finalizarSesion();
                        return;
                    }
                }
                actualizarDisplay();
            }
        }, 1000);
    }
    
    function actualizarDisplay() {
        const minutos = Math.floor(tiempoRestante / 60);
        const segundos = tiempoRestante % 60;
        displayMinutos.textContent = `${String(minutos).padStart(2, '0')}:${String(segundos).padStart(2, '0')}`;
    }
    
    function resetearEstado() {
        clearInterval(temporizador);
        estaPausado = true;
        estaEnConcentracion = true;
        cicloActual = 1;
        btnEmpezar.textContent = 'Empezar';
        btnPausar.textContent = 'Pausar';
        btnPausar.disabled = true;
        document.getElementById('displayTiempo').classList.remove('bg-blue');
        document.getElementById('displayTiempo').classList.add('bg-pink');
    }
    
    function finalizarSesion() {
        clearInterval(temporizador);
        resetearEstado();
        alert('¡Sesión de concentración completada!');
    }
    
    const tiempoInicial = parseInt(document.getElementById('tiempoTotal').value);
    tiempoRestante = tiempoInicial * 60;
    actualizarDisplay();
});
</script>
@endsection