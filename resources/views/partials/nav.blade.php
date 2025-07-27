<nav class="navbar navbar-light navbar-expand-md bg-white shadow-sm">
  <div class="container">
<a class="navbar-brand" href="{{route('homee')}}">
  {{config('app.name')}} 
  
 

  </a> 
  <button class="navbar-toggler" type="button" 
  data-bs-toggle="collapse" 
  data-bs-target="#navbarSupportedContent"
  aria-controls="navbarSupportedContent"
  aria-expanded="false" 
  aria-label="{{ __('Toggle navigation') }}">
  <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar navbar-collapse" id="navbarSupportedContent">

        <ul class="nav nav-pills">

        <li class="nav-item"> 
        <a  class= "nav-link {{setActive  ('homee')}}" href="{{route('homee')}}">Home</a></li> 
        
          <!--     <li class="nav-item" >  
            <a class="nav-link  {{setActive  ('about')}}"  href="{{route('about')}}">Acerca de</a></li> -->

            
            <li class="nav-item">
               <a class="nav-link {{ setActive('projects.idex') }}" href="{{ route('projects.idex') }}">Eventos</a>
            </li>

                       <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle {{ setActive(['projects.rentajoven', 'projects.colombiamayor', 'projects.renta']) }}" 
                                href="#" 
                                id="rentaDropdown" 
                                role="button" 
                                data-bs-toggle="dropdown" 
                                aria-expanded="false">
                                  Programas
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="rentaDropdown">
                                <li>
                                  <a class="dropdown-item {{ setActive('projects.rentajoven') }}" href="{{ route('projects.rentajoven') }}">
                                    Renta Joven
                                  </a>
                                </li>
                                <li>
                                  <a class="dropdown-item {{ setActive('projects.colombiamayor') }}" href="{{ route('projects.colombiamayor') }}">
                                    Colombia Mayor
                                  </a>
                                </li>
                                <li>
                                  <a class="dropdown-item {{ setActive('projects.renta') }}" href="{{ route('projects.renta') }}">
                                    Renta Ciudadana
                                  </a>
                                </li>

                                 <li>
                                  <a class="dropdown-item {{ setActive('projects.devolucioniva') }}" href="{{ route('projects.devolucioniva') }}">
                                    Devolución del IVA
                                  </a>
                                </li>
                                
                              </ul>
                            </li>



            <li class="nav-item"> 
            <a class="nav-link  {{setActive  ('contact')}}" href="{{route('contact')}}">Contactanos</a></li>

            @guest
            <li class="nav-item">
               <a class="nav-link   {{setActive  ('login')}}" href="{{route('login') }}">Acceso</a></li>
               
                  @else 

                  <ul class="nav nav-pills ms-auto"> <!-- ms-auto para alinear el botón a la derecha -->
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
          </li>
        </ul>

            @endguest
             

            
        </ul>
</div>
        </div>
        </div>
</nav>
              
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
  </form>               