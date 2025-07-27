@extends('layout')

@section('title', 'Renta Ciudadana')

@section('content')
<div class="container my-5">
    <div class="fondo-impactante mb-4">
        <h3 class="fw-bold text-uppercase">RENTA CIUDADANA</h3>
    </div>

    <h4 class="text-center text-warning fw-bold mb-4">¿Qué es Renta Ciudadana?</h4>

    <div class="row align-items-center mb-5">
        <div class="col-md-7">
            <p class="text-justify">
                Renta Ciudadana es un programa que busca contribuir a la superación de la pobreza, fomentar la movilidad social y fortalecer la economía local, mediante la entrega de ayudas económicas, conocidas como Transferencias Monetarias Condicionadas y No Condicionadas. El programa comenzó en 2024 y se implementa de manera gradual y progresiva a través de diversas líneas de intervención. Actualmente, están en ejecución las líneas de intervención Valoración del Cuidado y Colombia sin Hambre.
            </p>
            <p class="text-justify">
                Además de las transferencias, el programa establece corresponsabilidades para promover el desarrollo de capacidades y la autogestión de los beneficiarios. También articula acciones en salud, educación, inclusión productiva, cuidado, medio ambiente y participación social.
            </p>
            <p class="fw-bold">¿A quién está dirigido?</p>
            <ul>
                <li>Personas con discapacidad.</li>
                <li>Niñas y niños en primera infancia.</li>
                <li>Niñas, niños y adolescentes.</li>
            </ul>
            <p>
                Además, el programa está orientado a apoyar a unidades de intervención indígenas, especialmente aquellas con personas con discapacidad que requieran cuidado y niñas y niños en primera infancia.
            </p>
        </div>

        <div class="col-md-5">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/43E9-W4CRbk" title="Renta Ciudadana" allowfullscreen></iframe>
            </div>
        </div>
    </div>
<!-- Botones principales centrados y alineados -->
<div class="container text-center mt-4">
    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4 flex-wrap">

      <!-- Botón Colombia Mayor - Consulta de Liquidación -->
<a href="https://consultagiros.bancoagrario.gov.co/ConsultaPagos/Consulta.aspx"
   target="_blank"
   class="btn btn-danger fw-bold text-white px-5 py-3 rounded-pill shadow-lg fs-5">
    <i class="bi bi-cash-coin me-2"></i> Consultar Liquidación si su hogar es beneficiario
</a>


        <!-- Botón Calculadora Renta Ciudadana -->
        <a href="https://calculadora.prosperidadsocial.gov.co/" 
           target="_blank"
           class="btn btn-warning fw-bold text-dark px-5 py-3 rounded-pill shadow-lg fs-5">
            📊 Calculadora Montos Renta Ciudadana
        </a>

        <!-- Botón Consulta Beneficiario Renta Ciudadana -->
        <a href="https://rentaciudadana.prosperidadsocial.gov.co/" 
           target="_blank"
           class="btn btn-warning fw-bold text-dark px-5 py-3 rounded-pill shadow-lg fs-5">
            ✅ Consulta si su hogar es beneficiario
        </a>

    </div>
</div>



</div>

@endsection
