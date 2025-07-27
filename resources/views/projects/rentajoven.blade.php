@extends('layout')

@section('title', 'Renta Joven')

@section('content')


<div class="container my-5">
    <div class="fondo-impactante">
        <h3 class="fw-bold text-uppercase">RENTA JOVEN</h3>
    </div>

    <!-- Carrusel sin sombra -->
    <div class="mb-5">
        <div id="rentaCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#rentaCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#rentaCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#rentaCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner rounded-3">
                <div class="carousel-item active">
                    <img src="{{asset('img/boton_rentajoven2.jpg')}}" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/boton_rentajoven.png')}}" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/Rentaslider.jpg')}}" class="d-block w-100" alt="Imagen 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#rentaCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#rentaCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
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
            <a href="{{route('projects.Novedades')}}" class="btn btn-lg btn-impactante w-100">
                <i class="fas fa-bullhorn me-2"></i> Novedades
            </a>
        </div>
        <div class="col-12 col-md-4">
            <a href="{{route('projects.Inclusion')}}" class="btn btn-lg btn-impactante w-100">
                <i class="fas fa-hand-holding-heart me-2"></i> Inclusión Social
            </a>
        </div>
    </div>
</div>


    <!-- Preguntas frecuentes -->
    <div class="my-5">
        <h4 class="mb-3">Preguntas frecuentes</h4>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        ¿Qué es Renta Joven?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Renta Joven es un programa social que surge con el ánimo de contribuir a la inclusión social y económica de las juventudes y promover la consolidación de trayectorias de vida desde la dignidad y la garantía de derechos.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Quién puede aplicar?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Para ser participante del programa Renta Joven deberás cumplir con los siguientes requisitos al momento de la inscripción:
                        <ul>
                            <li>Tener entre 14 y 28 años.</li>
                            <li>Ser bachiller de educación media (11°).</li>
                            <li>Estar incluido en una base de focalización oficial:</li>
                            <ul>
                                <li>Sisbén vigente en situación de pobreza extrema, pobreza o vulnerabilidad.</li>
                                <li>Listados censales de población indígena del Ministerio del Interior.</li>
                                <li>Listados del ICBF de jóvenes con medidas de restablecimiento de derechos.</li>
                            </ul>
                            <li>Estar matriculado en formación complementaria o educación superior (técnico, tecnólogo o universitario).</li>
                            <li>No tener título profesional universitario ni posgrado.</li>
                            <li>No estar inscrito en Jóvenes en Paz o programa equivalente.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Duración del acompañamiento y fases -->
        <div class="my-4">
            <div class="text-muted fs-4 mb-4">¿Cuál es la duración del acompañamiento?</div>

            <h4 class="mb-3">
                <span class="text-dark fw-bold">Renta Joven</span>
                <span class="text-muted">acompaña a los jóvenes en dos FASES:</span>
            </h4>

            <p>
                <a class="btn btn-warning fw-bold" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">FASE 1</a>
                <button class="btn btn-warning fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">FASE 2</button>
                <button class="btn btn-warning fw-bold" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Ver Ambas</button>
            </p>

            <div class="row">
                <div class="col-md-6">
                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="card card-body bg-light border border-warning rounded-4 p-3">
                            <strong>Contenido 1:</strong> La vinculación al programa en su primera fase está determinada por el tiempo de duración del nivel de formación por el cual recibió la inscripción.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                        <div class="card card-body bg-light border border-warning rounded-4 p-3">
                            <strong>Contenido 2:</strong> La segunda fase del acompañamiento inicia cuando el participante se gradúe, y tendrá hasta un (1) año para unirse a estrategias de Empleabilidad, Emprendimiento y Educación posgradual disponibles.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
