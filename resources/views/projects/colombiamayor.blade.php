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
                <img src="{{ asset('img/ImagenC1.png') }}" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/ImagenC3.png') }}" class="d-block w-100" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/ImagenC4.png') }}" class="d-block w-100" alt="Imagen 3">
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
                <a href="{{ route('projects.colmayorNovedades') }}" class="btn btn-lg btn-impactante w-100">
                    <i class="fas fa-bullhorn me-2"></i> Novedades
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="{{route ('projects.Inclusion')}}" class="btn btn-lg btn-impactante w-100">
                    <i class="fas fa-hand-holding-heart me-2"></i> Inclusión Social
                </a>
            </div>
        </div>
    </div>

    <div class="accordion mt-5" id="accordionColombiaMayor">

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading1">
            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                ¿En qué consiste el programa Colombia Mayor?
            </button>
        </h2>
        <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionColombiaMayor">
            <div class="accordion-body text-start">
                El Programa de Protección Social al Adulto Mayor – “Colombia Mayor” busca aumentar la protección a los adultos mayores por medio de la entrega de un subsidio económico para aquellos que se encuentran desamparados, que no cuentan con una pensión, o viven en la extrema pobreza.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading2">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                ¿Quiénes podrán inscribirse?
            </button>
        </h2>
        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionColombiaMayor">
            <div class="accordion-body text-start">
                Para inscribirse el adulto debe cumplir con los siguientes requisitos:
                <ul>
                    <li>Ser colombiano.</li>
                    <li>Haber residido durante los últimos diez (10) años en el territorio nacional.</li>
                    <li>Tener mínimo tres años menos de la edad que se requiere para pensionarse por vejez (54 años para mujeres y 59 para hombres).</li>
                    <li>Carecer de rentas o ingresos suficientes para subsistir. De acuerdo con SISBÉN IV, se toman todos los niveles de los grupos A y B y C hasta el subgrupo C1.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading3">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                ¿Cuál es el monto del subsidio del programa?
            </button>
        </h2>
        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionColombiaMayor">
            <div class="accordion-body text-start">
                Cada beneficiario recibe $80.000 si es menor de 80 años y $225.000 si es mayor de 80 años. <br>
                En Bogotá, gracias a un convenio con la Alcaldía Mayor, los menores de 80 años reciben $130.000.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading4">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                ¿Cómo puedo inscribirme?
            </button>
        </h2>
        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionColombiaMayor">
            <div class="accordion-body text-start">
                El adulto mayor debe acercarse a la alcaldía de su municipio con su cédula de ciudadanía en físico. El trámite se realiza usualmente en la Oficina de Atención al Adulto Mayor o en Bogotá, en las Subdirecciones Locales de la Secretaría de Integración Social. <br><br>
                La persona encargada en la alcaldía verifica los requisitos y diligencia la inscripción en el Sistema de Información de Colombia Mayor. Luego se cruza la información con bases de datos externas y se aplica un proceso de priorización.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading5">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                ¿Cuáles son las modalidades de pago?
            </button>
        </h2>
        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionColombiaMayor">
            <div class="accordion-body text-start">
                Los subsidios se entregan mediante:
                <ul>
                    <li>Subsidio económico directo (dinero que se gira al beneficiario por medio del operador de pago).</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading6">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                ¿Cuál es la frecuencia de pago?
            </button>
        </h2>
        <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionColombiaMayor">
            <div class="accordion-body text-start">
                Mensual. El dinero está disponible durante 10 días hábiles del periodo de pago informado previamente.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading7">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7">
                ¿Cuándo se pierde el subsidio?
            </button>
        </h2>
        <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionColombiaMayor">
            <div class="accordion-body text-start">
                <ul>
                    <li>Muerte del beneficiario.</li>
                    <li>Falsedad en la información o intento de fraude.</li>
                    <li>Percibir pensión o renta mayor a la permitida.</li>
                    <li>Recibir otro subsidio que supere ½ SMMLV.</li>
                    <li>Mendicidad como actividad productiva.</li>
                    <li>Traslado a otro municipio.</li>
                    <li>No cobrar cuatro giros consecutivos (dos para pago bimestral).</li>
                    <li>Retiro voluntario.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading8">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8">
                ¿Un alcalde puede ingresar a todos los que se presenten?
            </button>
        </h2>
        <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionColombiaMayor">
            <div class="accordion-body text-start">
                No. Solo se puede inscribir a quienes cumplan requisitos y sean validados por el sistema. <br>
                Debido a cupos limitados, se aplica una metodología de priorización para seleccionar a los adultos mayores más vulnerables.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading9">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9">
                Criterios de priorización
            </button>
        </h2>
        <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionColombiaMayor">
            <div class="accordion-body text-start">
                <ul>
                    <li>Edad.</li>
                    <li>Puntaje del SISBÉN.</li>
                    <li>Discapacidad.</li>
                    <li>Personas a cargo.</li>
                    <li>Vivir solo y sin apoyo económico.</li>
                    <li>Haber perdido subsidio pensional por edad y no poder cotizar.</li>
                    <li>Pérdida de subsidio por traslado.</li>
                    <li>Fecha de solicitud.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading10">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10">
                ¿Dónde me informan si ya puedo recibir el subsidio?
            </button>
        </h2>
        <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionColombiaMayor">
            <div class="accordion-body text-start">
                La alcaldía del municipio informará cuando haya cupo. También puedes consultar en la Oficina del Adulto Mayor o por los canales de atención ciudadana de Prosperidad Social.
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading11">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11">
                ¿Dónde puedo cobrar el subsidio?
            </button>
        </h2>
        <div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#accordionColombiaMayor">
            <div class="accordion-body text-start">
                A través del operador de pago definido en cada municipio. Consulta el punto de pago con el encargado del programa en tu alcaldía.
            </div>
        </div>
    </div>

</div>


</div>
@endsection
