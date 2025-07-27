@extends('layout')

@section('title', 'Devolución del IVA')

@section('content')
<div class="container my-5">
    <!-- Título -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-uppercase" style="color: #FFC107;">Programa Devolución del IVA</h2>
        <p class="text-muted">Compensación del IVA para hogares en situación de pobreza extrema y moderada</p>
    </div>

    <!-- Carrusel -->
    <div id="devolucionCarousel" class="carousel slide mb-5 shadow rounded overflow-hidden" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#devolucionCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Imagen 1"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/ImagenC5.png') }}" class="d-block w-100" alt="Imagen Devolución del IVA" style="height: 480px; object-fit: cover;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#devolucionCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#devolucionCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!-- Acordeones -->
    <div class="accordion" id="accordionDevolucion">
        <!-- ¿Qué es la Devolución del IVA? -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading1">
                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    ¿Qué es la Devolución del IVA?
                </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionDevolucion">
                <div class="accordion-body text-secondary">
                    La <strong>Compensación del IVA</strong>, también conocida como Devolución del IVA, es un programa de <em>Transferencias Monetarias No Condicionadas (TMNC)</em>, orientado a reducir el efecto del impuesto al valor agregado (IVA) sobre los hogares más vulnerables del país.
                </div>
            </div>
        </div>

        <!-- Objetivos del programa -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading2">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    Objetivos del programa
                </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionDevolucion">
                <div class="accordion-body text-secondary">
                    <ul>
                        <li>Mitigar el impacto del IVA en los gastos de consumo de la población pobre y en pobreza extrema.</li>
                        <li>Fomentar mayor equidad en la estructura del impuesto sobre las ventas.</li>
                        <li>Distribuir recursos monetarios para disminuir las brechas sociales y económicas.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ¿Quiénes pueden acceder? -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading3">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    ¿Quiénes pueden acceder?
                </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionDevolucion">
                <div class="accordion-body text-secondary">
                    Según la Resolución 0552 de 2024, son beneficiarios:
                    <ul>
                        <li>Hogares en pobreza extrema clasificados en el Sisbén IV: grupos A01 a A05 y hogares indígenas.</li>
                        <li>Hogares en pobreza moderada: grupos B01 a B04.</li>
                    </ul>
                    <p class="text-muted"><strong>Nota:</strong> No se realizan inscripciones. El programa tiene un tope de hasta <strong>2 millones de hogares</strong>.</p>
                </div>
            </div>
        </div>

        <!-- Monto de la compensación -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading4">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    Monto de la compensación
                </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionDevolucion">
                <div class="accordion-body text-secondary">
                    El valor entregado se calcula con base en la <strong>Unidad de Valor Tributario (UVT)</strong> definida anualmente, y es uniforme para todos los hogares beneficiarios.
                </div>
            </div>
        </div>

        <!-- ¿Qué son las novedades? -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading5">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    ¿Qué son las novedades?
                </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionDevolucion">
                <div class="accordion-body text-secondary">
                    Se refiere a las actualizaciones que puede requerir un hogar (cambio de datos, ajustes familiares, etc.). Estas novedades deben solicitarse ante Prosperidad Social, y su aplicación dependerá del cronograma establecido por la entidad.
                </div>
            </div>
        </div>
    </div>
      <!-- Texto explicativo -->
    <div class="text-center mt-5">
        <p class="fs-5">
            Accede directamente a las consultas oficiales sobre los programas sociales 
            <strong>Colombia Mayor</strong>, <strong>Renta Joven</strong> y <strong>Cronogramas</strong> de pago.
        </p>

        <!-- Botones principales -->
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4 mt-4">
           <a href="https://consultagiros.bancoagrario.gov.co/ConsultaPagos/Consulta.aspx"
   target="_blank"
   class="btn btn-vino btn-lg rounded-pill shadow px-4 py-2">
    <i class="bi bi-globe2 me-2"></i> Consulta Colombia Mayor
</a>

            <!-- Botón Cronograma -->
            <a href="{{ route('projects.idex') }}"
               class="btn btn-orange btn-lg rounded-pill shadow px-4 py-2">
                <i class="bi bi-clock-history me-2"></i> Ir al Cronograma de Pagos
            </a>

            <!-- Botón Renta Joven -->
            <a href="{{ route('projects.rentajoven') }}"
               class="btn btn-warning btn-lg rounded-pill shadow px-4 py-2">
                <i class="bi bi-person-fill-check me-2"></i> Renta Joven
            </a>
        </div>
    </div>
</div>
<style>
   .btn-orange {
    background-color: #fd7e14; /* Color naranja Bootstrap */
    color: #fff;
    border: none;
}

.btn-orange:hover {
    background-color: #e66a00;
    color: #fff;
}
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
</div>
@endsection
