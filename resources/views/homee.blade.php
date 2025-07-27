@extends('layout')

@section('title','homee')
@push('styles')
  <link rel="stylesheet" href="{{ asset('css/Rciudadana.css') }}">
  
@endpush


@section('content')



<!-- <div class="container">
    <div class="row "> -->
      
    <div id="rentaCiudadanaCarousel" class="carousel slide" data-bs-ride="carousel">
  
  <!-- Indicadores (puntos) -->
   
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#rentaCiudadanaCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#rentaCiudadanaCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#rentaCiudadanaCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <img src="{{ asset('img/imagen-renta.png') }}" alt="Prosperidad Social">
      <div class="carousel-caption text-start">
        <h2 class="fs-1">Prosperidad Social</h2>
        <p class="fs-4">Evolucionamos para quienes más lo necesitan.</p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <img src="{{ asset('img/renta1.jpg') }}" alt="Impacto Social">
      <div class="carousel-caption text-end">
        <h2 class="fs-1">Impacto Social</h2>
        <p class="fs-4">Apoyamos a los hogares más vulnerables para garantizar sus derechos.</p>
      </div>
    </div>
<!-- Slide 3: Renta Joven -->
<div class="carousel-item">
      <img src="{{ asset('img/Renta-Joven.jpeg') }}" alt="Renta Joven">
      <div class="carousel-caption text-center">
        <h2 class="fs-1">Renta Joven</h2>
        <p class="fs-4">Impulsamos oportunidades educativas y laborales para los jóvenes.</p>
      </div>
    </div>

  </div>
  
  </div>

  <!-- Controles -->
  <button class="carousel-control-prev" type="button" data-bs-target="#rentaCiudadanaCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#rentaCiudadanaCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

</div>





@endsection