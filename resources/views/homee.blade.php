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
<div class="d-flex flex-wrap justify-content-center mt-4" style="gap: 10px;">
    <button type="button" class="btn btn-lg" style="flex: 1 1 20%; max-width: 200px; height: 200px; 
    background: rgba(119, 115, 115, 0.5); color: white; font-weight: bold; border-radius: 30px; border:
     2px solid black; font-size: 1.2rem; transition: transform 0.2s;"
      data-bs-toggle="modal" data-bs-target="#infoModal" onmouseover="this.style.transform='scale(1.1)';"
       onmouseout="this.style.transform='scale(1)';">
       Renta Ciudadana
    </button>
    <button type="button" class="btn btn-lg" style="flex: 1 1 20%; max-width: 200px; height: 200px; 
    background: rgba(119, 117, 115, 0.5); color: white; font-weight: bold; border-radius: 30px; border: 
    2px solid black; font-size: 1.2rem; transition: transform 0.2s;" data-bs-toggle="modal"  data-bs-target="#rentaJovenModal"
     onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';">
        Renta Joven
    </button>
    <button type="button" class="btn btn-lg" style="flex: 1 1 20%; max-width: 200px; height: 200px; background: rgba(119, 115, 115, 0.5); color: white; font-weight: bold; border-radius: 30px; border: 2px solid black; font-size: 1.2rem; transition: transform 0.2s;" data-bs-toggle="modal" data-bs-target="#devolucionIvaModal" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';">
        Devolucion de Iva
    </button>
    <button type="button" class="btn btn-lg" style="flex: 1 1 20%; max-width: 200px; height: 200px; background: rgba(118, 119, 115, 0.5); color: white; font-weight: bold; border-radius: 30px; border: 2px solid black; font-size: 1.2rem; transition: transform 0.2s;"  data-bs-toggle="modal" data-bs-target="#colombiaMayorModal" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';">
     Colombia Mayor
    </button>
</div>



<!-- Modal -->
<!-- <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infoModalLabel">Renta Ciudadana</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Es el programa central del Sistema de Transferencias con el que el Gobierno del Cambio le apuesta, a partir de 2024, a garantizar la movilidad social de los hogares en pobreza extrema.</p>
                <h6>¿A quiénes está dirigido el programa Renta Ciudadana?</h6>
                <ul>
                    <li><strong>Valoración de cuidado:</strong> Hogares del Grupo A del SISBEN IV con niños menores de 6 años y personas con discapacidad.</li>
                    <li><strong>Colombia sin Hambre:</strong> Hogares del Grupo A del SISBEN IV con niños y adolescentes menores de 18 años.</li>
                    <li><strong>Fortalecimiento de capacidades:</strong> Transferencias a hogares en pobreza moderada que cumplan logros.</li>
                    <li><strong>Atención de Emergencias:</strong> Asistencia financiera a hogares afectados por crisis.</li>
                </ul>
                <h6>¿Cuánto van a recibir los hogares?</h6>
                <ul>
                    <li>Valoración del Cuidado: $500 mil cada 45 días.</li>
                    <li>Colombia Sin Hambre: Hasta $500 mil por hogar.</li>
                    <li>Fortalecimiento de capacidades: Bono anual de $500 mil a $1 millón.</li>
                    <li>Atención de Emergencias: Según evaluación del Gobierno.</li>
                </ul>
                <h6>¿Qué va a pasar con Familias en Acción?</h6>
                <p>El programa evolucionará y los hogares podrán ingresar a las nuevas líneas de intervención según sus características.</p>
                <h6>¿Las comunidades indígenas participarán?</h6>
                <p>Los hogares indígenas serán vinculados a Renta Ciudadana según sus necesidades y edades de sus niños.</p>
            </div>
        </div>
    </div>
</div> -->
<!-- Modal Renta Joven -->
<!-- <div class="modal fade" id="rentaJovenModal" tabindex="-1" aria-labelledby="rentaJovenModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rentaJovenModalLabel">¿Qué es Renta Joven?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El programa Renta Joven es el resultado de la evolución de Jóvenes en Acción y beneficiará a jóvenes entre 14 y 28 años que se encuentran matriculados en instituciones de educación superior, el SENA y Escuelas Normales Superiores, y estará integrado al sistema de transferencias creado por el Plan Nacional de Desarrollo Colombia Potencia Mundial de la Vida.</p>
                <p><strong>¿Cuándo iniciará?</strong></p>
                <p>El programa Renta Joven comenzó a operar a partir del 1 de enero de 2024.</p>
                <p>Renta Joven se enfoca en brindar un apoyo de sostenimiento que facilite la permanencia en la educación superior, generando nuevas oportunidades de movilidad social para las juventudes y en especial atención a aquellas poblaciones que sean priorizadas en situación de pobreza y vulnerabilidad.</p>
                <p><strong>¿Cómo está compuesto Renta Joven?</strong></p>
                <ul>
                    <li><strong>Formación educativa:</strong> Se tienen dos tipos de transferencias monetarias; una por matrícula y otra por permanencia durante el programa de educación superior que se cursa.</li>
                    <li><strong>Impulso Voluntario:</strong> Estrategia de voluntariado social para integrar a los jóvenes en procesos de transformación social, política, ambiental y económica de sus territorios.</li>
                    <li><strong>Generación de oportunidades:</strong> Alianzas con entidades públicas y privadas para ofertas de empleo, emprendimiento y estudio.</li>
                </ul>
                <p><strong>¿Qué va a pasar con los Jóvenes en Acción?</strong></p>
                <p>A los participantes del programa Jóvenes en Acción que se encuentren en estado activo en su inscripción al 31 de diciembre de 2023 y que no cumplan con los criterios de focalización y vinculación a Renta Joven, se les garantizará su permanencia en el programa en el nivel formativo que registre al 31 de diciembre de 2023 y tendrán derecho a la transferencia de acuerdo con el cumplimiento de compromisos. (Art. 8 - Decreto 1960 de 2023)</p>
            </div>
        </div>
    </div>
</div> -->
<!-- Modal Devolución de IVA -->
<!-- <div class="modal fade" id="devolucionIvaModal" tabindex="-1" aria-labelledby="devolucionIvaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="devolucionIvaModalLabel">Lo que debe saber sobre la Devolución del IVA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>¿Quiénes pueden ser beneficiarios del programa?</strong></p>
                <p>Para la vigencia 2024 según la resolución 0552 del 2024, son beneficiarios los hogares que según la información en el Sisbén y/o Registro Social de Hogares...</p>
                <p><strong>¿Cuánto dinero reciben los beneficiarios del programa?</strong></p>
                <p>El monto de la compensación se actualiza cada año de conformidad a la Unidad de Valor Tributario – UVT definida anualmente mediante resolución expedida por la DIAN...</p>
                <p><strong>¿Qué son las novedades?</strong></p>
                <p>Las novedades son el proceso operativo en el cual Prosperidad Social modifica, actualiza o corrige en el Sistema de Información los datos de los hogares potenciales beneficiarios del programa...</p>
            </div>
        </div>
    </div>
</div> -->
<!-- Modal Colombia Mayor -->
<!-- <div class="modal fade" id="colombiaMayorModal" tabindex="-1" aria-labelledby="colombiaMayorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="colombiaMayorModalLabel">Programa Colombia Mayor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>¿En qué consiste el programa Colombia Mayor?</strong></p>
                <p>El Programa de Protección Social al Adulto Mayor – “Colombia Mayor” busca aumentar la protección a los adultos mayores por medio de la entrega de un subsidio económico...</p>
                <p><strong>¿Quiénes podrán inscribirse?</strong></p>
                <p>Para inscribirse el adulto debe cumplir con los siguientes requisitos: Ser colombiano, haber residido durante los últimos 10 años en el territorio nacional, tener mínimo tres años menos de la edad de pensión...</p>
                <p><strong>¿Cuál es el monto del subsidio del programa?</strong></p>
                <p>Cada beneficiario del programa recibe 80.000 pesos para menores de 80 años y 225.000 pesos para mayores de 80 años...</p>
                <a class="btn btn-lg  btn-block btn-outline-primary"
                   href="{{route('projects.colombiamayor')}}">Ver Mas</a> 
            </div>
        </div>
    </div>
</div> -->


@endsection