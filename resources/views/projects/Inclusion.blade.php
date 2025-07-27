@extends('layout')

@section('title', 'Inclusión Productiva')

@section('content')

<div class="container my-5">
    <!-- Fondo Impactante igual al de Renta Joven -->
   <div class="fondo-impactante text-center shadow mb-5" style="border-radius: 50px;">
    <h3 class="fw-bold text-uppercase mb-0">INCLUSIÓN PRODUCTIVA</h3>
</div>

    

    <!-- Contenido -->
    <div class="mb-5">
        <h4 class="fw-bold text-warning mb-3">
            <i class="bi bi-question-circle-fill me-2"></i>¿Qué hace la Dirección de Inclusión Productiva?
        </h4>
        <p>
            La Dirección de Inclusión Productiva diseña e implementa programas que buscan la inclusión social de la población vulnerable, desplazada y/o en extrema pobreza mediante el desarrollo de su potencial productivo.
        </p>
        <p>
            Para ello se apoya en cuatro estrategias:
        </p>

        <div class="row g-3">
            @php
                $estrategias = ['Emprendimiento', 'Intervenciones rurales integrales', 'Seguridad alimentaria', 'Empleabilidad'];
            @endphp

            @foreach ($estrategias as $item)
                <div class="col-md-6">
                    <div class="p-3 bg-white border-start border-4 border-warning rounded shadow-sm">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <strong>{{ $item }}</strong>
                    </div>
                </div>
            @endforeach
        </div>

        <p class="mt-4">
            Estas estrategias buscan fortalecer el desarrollo de capacidades humanas, sociales y productivas de los participantes, generando impactos sostenibles.
        </p>
    </div>

    <!-- Funciones -->
    <div class="mb-5">
        <h4 class="fw-bold text-warning mb-3">
            <i class="bi bi-gear-fill me-2"></i>Funciones de la Dirección
        </h4>
        <ol class="list-group list-group-numbered shadow-sm">
            <li class="list-group-item">
                Diseñar, formular y adoptar planes, programas y proyectos de inclusión productiva y seguridad alimentaria.
            </li>
            <li class="list-group-item">
                Ejecutar y articular políticas, planes y programas orientados a reducir la vulnerabilidad.
            </li>
            <li class="list-group-item">
                Identificar e implementar rutas para la inclusión productiva junto a la Subdirección de Pobreza.
            </li>
            <li class="list-group-item">
                Fomentar la participación de actores públicos y privados en la cofinanciación de los procesos.
            </li>
            <li class="list-group-item">
                Establecer y aplicar criterios para la vinculación de beneficiarios.
            </li>
            <li class="list-group-item">
                Mejorar continuamente el Sistema Integrado de Gestión de la dependencia.
            </li>
        </ol>
    </div>
  <style>
.btn-orange {
    background-color: #fd7e14 !important;
    color: white !important;
    border: none;
}

.btn-orange:hover {
    background-color: #e66a00 !important;
    color: white !important;
}
</style>

   <!-- Botón para regresar -->
<div class="text-center mt-4">
    <a href="{{ route('projects.rentajoven') }}" class="btn btn-warning btn-lg rounded-pill shadow">
        <i class="bi bi-arrow-left-circle me-2"></i> Volver a Renta Joven
    </a>
</div>
<div class="text-center mt-3">
    <a href="{{ route('projects.idex') }}" class="btn btn-orange btn-lg rounded-pill shadow text-white">
        <i class="bi bi-clock-history me-2"></i> Ir al Cronograma de Pagos
    </a>
</div>
 <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4 mt-4">
           <a href="{{route('projects.colombiamayor')}}"
  
   class="btn btn-vino btn-lg rounded-pill shadow px-4 py-2">
    <i class="bi bi-globe2 me-2"></i>Volver a Colombia Mayor
</a>
</div>
</div>

<style>
    .btn-vino {
    background-color: #8B0000; /* Rojo oscuro tipo vino */
    color: #fff;
    border: none;
}

.btn-vino:hover {
    background-color: #a30000;
    color: #fff;
}
</style>
@endsection
