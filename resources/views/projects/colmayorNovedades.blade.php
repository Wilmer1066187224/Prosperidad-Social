@extends('layout')

@section('title', 'Consulta de Novedades - Colombia Mayor')

@section('content')

<div class="container my-5">
    <!-- Fondo Impactante igual al de Renta Joven -->
    <div class="fondo-impactante text-center shadow mb-5" style="border-radius: 50px;">
        <h3 class="fw-bold text-uppercase text-white mb-0">CONSULTAS Y NOVEDADES</h3>
    </div>
</div>



    <!-- Texto explicativo -->
    <div class="text-center mt-5">
        <p class="fs-5">
            Accede directamente a las consultas oficiales sobre los programas sociales como 
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

@endsection
