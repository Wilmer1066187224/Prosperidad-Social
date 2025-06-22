@extends('layout')

@section('title', 'Colombia Mayor')

@section('content')
<div class="container my-5">

    <!-- Encabezado -->
    <div class="fondo-impactante">
        <h3 class="fw-bold text-uppercase">COLOMBIA MAYOR</h3>
    </div>

    <!-- Carrusel -->
    <div id="rentaCarousel" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicadores -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#rentaCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#rentaCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#rentaCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner rounded-3">
            <div class="carousel-item active">
                <img src="{{ asset('img/boton_rentajoven2.jpg') }}" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/boton_rentajoven.png') }}" class="d-block w-100" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/boton_rentajoven.png') }}" class="d-block w-100" alt="Imagen 3">
            </div>
        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#rentaCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#rentaCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

       <!-- Botones debajo del carrusel -->
 <div class="text-center my-4">
    <div class="row justify-content-center g-3">
        <div class="col-12 col-md-4">
            <a href="{{ route('projects.idex') }}" class="btn btn-lg btn-impactante w-100">
                <i class="fas fa-calendar-check me-2"></i> Cronograma
            </a>
        </div>
        <div class="col-12 col-md-4">
            <a href="#" class="btn btn-lg btn-impactante w-100">
                <i class="fas fa-bullhorn me-2"></i> Novedades
            </a>
        </div>
        <div class="col-12 col-md-4">
            <a href="#" class="btn btn-lg btn-impactante w-100">
                <i class="fas fa-hand-holding-heart me-2"></i> Inclusión Social
            </a>
        </div>
    </div>
</div>

    <!-- Botón con Popover -->
    <div class="text-center my-4">
        <button type="button" class="btn btn-info fw-bold"
            data-bs-toggle="popover"
            data-bs-trigger="hover"
            title="Información Importante"
            data-bs-content="Hola. Este programa busca apoyar a las personas mayores en situación de vulnerabilidad.">
            Ver Detalles del Programa
        </button>
    </div>

</div> <!-- cierre del container -->

<!-- Script para activar popovers -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
        popoverTriggerList.forEach(function (popoverTriggerEl) {
            new bootstrap.Popover(popoverTriggerEl);
        });
    });
</script>

@endsection
