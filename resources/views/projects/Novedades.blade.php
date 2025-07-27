@extends('layout')

@section('title', 'Novedades Renta Joven')

@section('content')
<div class="container py-5">
    <!-- Encabezado impactante -->
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold text-warning">
            <i class="fas fa-bullhorn me-2 text-warning"></i> Novedades de Renta Joven
        </h1>
        <p class="lead text-muted">Mantente informado con las últimas actualizaciones del programa Renta Joven.</p>
    </div>

    <!-- Sección de novedades en cards -->
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h5 class="card-title text-dark">
                        <i class="fas fa-calendar-alt me-2 text-warning"></i> Calendario de pagos 2025
                    </h5>
                    <p class="card-text">Consulta las fechas actualizadas de los ciclos de pago para los beneficiarios del programa.</p>
                    <span class="badge bg-warning text-dark"><i class="fas fa-check-circle me-1 text-dark"></i> Actualizado</span>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <a href="{{route('projects.idex')}}" class="btn btn-outline-warning btn-sm text-dark">
                        <i class="fas fa-arrow-right me-1 text-warning"></i> Ver detalles
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h5 class="card-title text-dark">
                        <i class="fas fa-map-marker-alt me-2 text-warning"></i> Portal beneficiarios Renta Joven
                    </h5>
                    <p class="card-text">Consulta aquí tú portal de Renta Joven.</p>
                    <span class="badge bg-warning text-dark"><i class="fas fa-star me-1 text-dark"></i> Nuevo</span>
                </div>
                <div class="card-footer bg-transparent border-0">
                   <a href="https://jovenes.prosperidadsocial.gov.co/RentaJoven/" 
   class="btn btn-outline-warning btn-sm text-dark d-inline-flex align-items-center gap-1"
   target="_blank" 
   rel="noopener noreferrer">
   Consultar
   <i class="fas fa-external-link-alt"></i>
</a>

                </div>
            </div>
        </div>
    </div>

    <!-- Acordeón para detalles adicionales -->
    <div class="accordion my-5" id="accordionNovedades">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                    <i class="fas fa-user-graduate me-2 text-warning"></i> ¿Quiénes pueden acceder al programa?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionNovedades">
                <div class="accordion-body">
                    Jóvenes en condición de pobreza extrema, inscritos en el Sisbén y que estén cursando estudios técnicos, tecnológicos o universitarios.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                    <i class="fas fa-clipboard-check me-2 text-warning"></i> ¿Qué requisitos son necesarios?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionNovedades">
                <div class="accordion-body">
                    Documento de identidad, estar registrado en el Sisbén IV, y estar matriculado en una institución educativa acreditada.
                </div>
            </div>
        </div>
    </div>
    <div class="accordion my-5" id="accordionConvenios">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingConvenios">
            <button class="accordion-button justify-content-center fw-bold text-warning fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseConvenios">
            <i class="fas fa-university me-2 text-warning fs-3"></i> Convenios 2025
             </button>

        </h2>
        <div id="collapseConvenios" class="accordion-collapse collapse show" data-bs-parent="#accordionConvenios">
            <div class="accordion-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered align-middle">
                        <thead class="table-warning text-dark">
                            <tr>
                                <th>Consecutivo</th>
                                <th>Institución de Educación Superior</th>
                                <th>Dirección Regional</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>1</td><td>Universidad de Antioquia</td><td>Antioquia</td></tr>
                            <tr><td>2</td><td>Institución Universitaria Colegio Mayor de Antioquia</td><td>Antioquia</td></tr>
                            <tr><td>3</td><td>Institución Universitaria Pascual Bravo</td><td>Antioquia</td></tr>
                            <tr><td>4</td><td>Institución Universitaria de Envigado</td><td>Antioquia</td></tr>
                            <tr><td>5</td><td>Tecnológico de Artes Débora Arango</td><td>Antioquia</td></tr>
                            <tr><td>6</td><td>Instituto Tecnológico Metropolitano</td><td>Antioquia</td></tr>
                            <tr><td>7</td><td>Politécnico Colombiano Jaime Isaza Cadavid</td><td>Antioquia</td></tr>
                            <tr><td>8</td><td>Institución Universitaria Tecnológico de Antioquia</td><td>Antioquia</td></tr>
                            <tr><td>9</td><td>Institución Universitaria Digital</td><td>Antioquia</td></tr>
                            <tr><td>10</td><td>Universidad del Atlántico</td><td>Atlántico</td></tr>
                            <tr><td>11</td><td>Institución Universitaria de Barranquilla</td><td>Atlántico</td></tr>
                            <tr><td>12</td><td>Universidad Distrital Francisco José de Caldas</td><td>Bogotá</td></tr>
                            <tr><td>13</td><td>Universidad Pedagógica Nacional</td><td>Bogotá</td></tr>
                            <tr><td>14</td><td>Colegio Mayor de Cundinamarca</td><td>Bogotá</td></tr>
                            <tr><td>15</td><td>Escuela Tecnológica Instituto Técnico Central</td><td>Bogotá</td></tr>
                            <tr><td>16</td><td>Universidad Militar Nueva Granada</td><td>Bogotá</td></tr>
                            <tr><td>17</td><td>Universidad de Cartagena</td><td>Bolívar</td></tr>
                            <tr><td>18</td><td>Institución Universitaria Mayor de Cartagena</td><td>Bolívar</td></tr>
                            <tr><td>19</td><td>Institución Universitaria Bellas Artes y Ciencias de Bolívar</td><td>Bolívar</td></tr>
                            <tr><td>20</td><td>Universidad Pedagógica y Tecnológica de Colombia</td><td>Boyacá</td></tr>
                            <tr><td>21</td><td>Universidad de Caldas</td><td>Caldas</td></tr>
                            <tr><td>22</td><td>Colegio Integrado Nacional Oriente De Caldas</td><td>Caldas</td></tr>
                            <tr><td>23</td><td>Universidad de la Amazonía</td><td>Caquetá</td></tr>
                            <tr><td>24</td><td>Universidad del Cauca</td><td>Cauca</td></tr>
                            <tr><td>25</td><td>Institución Universitaria Colegio Mayor del Cauca</td><td>Cauca</td></tr>
                            <tr><td>26</td><td>Universidad Autónoma Indígena Intercultural UAIIN-CRIC</td><td>Cauca</td></tr>
                            <tr><td>27</td><td>Universidad Popular del Cesar</td><td>Cesar</td></tr>
                            <tr><td>28</td><td>Universidad Tecnológica del Chocó</td><td>Chocó</td></tr>
                            <tr><td>29</td><td>Universidad de Córdoba</td><td>Córdoba</td></tr>
                            <tr><td>30</td><td>Universidad de Cundinamarca</td><td>Cundinamarca</td></tr>
                            <tr><td>31</td><td>Universidad Surcolombiana</td><td>Huila</td></tr>
                            <tr><td>32</td><td>Universidad de La Guajira</td><td>La Guajira</td></tr>
                            <tr><td>33</td><td>Instituto Nacional De Formación Técnica Profesional San Juan del Cesar</td><td>La Guajira</td></tr>
                            <tr><td>34</td><td>Universidad del Magdalena</td><td>Magdalena</td></tr>
                            <tr><td>35</td><td>Instituto Nacional de Formación Técnica Profesional Humberto Velásquez García - Ciénaga</td><td>Magdalena</td></tr>
                            <tr><td>36</td><td>Instituto Universitario de la Paz</td><td>Magdalena Medio</td></tr>
                            <tr><td>37</td><td>Universidad de Los Llanos</td><td>Meta</td></tr>
                            <tr><td>38</td><td>Escuela Superior de Administración Pública</td><td>Nacional</td></tr>
                            <tr><td>39</td><td>Universidad Nacional Abierta y a Distancia - UNAD</td><td>Nacional</td></tr>
                            <tr><td>40</td><td>Universidad de Nariño</td><td>Nariño</td></tr>
                            <tr><td>41</td><td>Universidad Francisco de Paula Santander</td><td>Norte de Santander</td></tr>
                            <tr><td>42</td><td>Universidad Francisco de Paula Santander-Seccional Ocaña</td><td>Norte de Santander</td></tr>
                            <tr><td>43</td><td>Universidad de Pamplona</td><td>Norte de Santander</td></tr>
                            <tr><td>44</td><td>Instituto Superior de Educación Rural</td><td>Norte de Santander</td></tr>
                            <tr><td>45</td><td>Instituto Tecnológico del Putumayo</td><td>Putumayo</td></tr>
                            <tr><td>46</td><td>Universidad del Quindío</td><td>Quindío</td></tr>
                            <tr><td>47</td><td>Universidad Tecnológica de Pereira</td><td>Risaralda</td></tr>
                            <tr><td>48</td><td>Instituto Nacional De Formación Técnica Profesional San Andrés Isla</td><td>San Andrés</td></tr>
                            <tr><td>49</td><td>Universidad Industrial de Santander</td><td>Santander</td></tr>
                            <tr><td>50</td><td>Unidades Tecnológicas de Santander</td><td>Santander</td></tr>
                            <tr><td>51</td><td>Universidad de Sucre</td><td>Sucre</td></tr>
                            <tr><td>52</td><td>Universidad del Tolima</td><td>Tolima</td></tr>
                            <tr><td>53</td><td>Instituto Tolimense de Formación Técnica Profesional</td><td>Tolima</td></tr>
                            <tr><td>54</td><td>Conservatorio del Tolima</td><td>Tolima</td></tr>
                            <tr><td>55</td><td>Universidad del Pacífico</td><td>Valle del Cauca</td></tr>
                            <tr><td>56</td><td>Institución Universitaria Antonio José Camacho</td><td>Valle del Cauca</td></tr>
                            <tr><td>57</td><td>Instituto Técnico Nacional de Comercio Simón Rodríguez</td><td>Valle del Cauca</td></tr>
                            <tr><td>58</td><td>Instituto de Educación Técnica Profesional de Roldanillo - INTEP</td><td>Valle del Cauca</td></tr>
                            <tr><td>59</td><td>Instituto Técnico Agrícola ITA</td><td>Valle del Cauca</td></tr>
                            <tr><td>60</td><td>Instituto Departamental de Bellas Artes</td><td>Valle del Cauca</td></tr>
                            <tr><td>61</td><td>Unidad Central del Valle del Cauca</td><td>Valle del Cauca</td></tr>
                            <tr><td>62</td><td>Policía Nacional</td><td>Nacional</td></tr>
                            <tr><td>63</td><td>Armada de Colombia</td><td>Nacional</td></tr>
                            <tr><td>64</td><td>Fuerza Aérea</td><td>Nacional</td></tr>
                            <tr><td>65</td><td>Ejercito Nacional</td><td>Nacional</td></tr>
                            <tr><td>66</td><td>Fuerza Aérea</td><td>Nacional</td></tr>
                            <tr><td>67</td><td>Universidad Nacional de Colombia - Sede Amazonía</td><td>Amazonas</td></tr>
                            <tr><td>67</td><td>Universidad Nacional de Colombia Sede Medellín</td><td>Antioquia</td></tr>
                            <tr><td>67</td><td>Universidad Nacional de Colombia - Sede Orinoquía</td><td>Arauca</td></tr>
                            <tr><td>67</td><td>Universidad Nacional de Colombia - Sede Bogotá</td><td>Bogotá</td></tr>
                            <tr><td>67</td><td>Universidad Nacional de Colombia - Sede Manizales</td><td>Caldas</td></tr>
                            <tr><td>67</td><td>Universidad Nacional de Colombia - Sede La Paz</td><td>Cesar</td></tr>
                            <tr><td>67</td><td>Universidad Nacional de Colombia Sede Tumaco</td><td>Nariño</td></tr>
                            <tr><td>67</td><td>Universidad Nacional de Colombia - Sede Caribe</td><td>San Andrés</td></tr>
                            <tr><td>67</td><td>Universidad Nacional de Colombia - Sede Palmira</td><td>Valle del Cauca</td></tr>
                            <tr><td>68</td><td>Servicio Nacional de Aprendizaje - SENA</td><td>Nacional</td></tr>



                            <!-- Continúa con los demás registros hasta 68 -->
                            <!-- Puedes dividir la tabla en varios acordeones si prefieres por departamento -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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


</div>


@endsection
