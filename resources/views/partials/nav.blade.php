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
            
            <li class="nav-item" >  
            <a class="nav-link  {{setActive  ('about')}}"  href="{{route('about')}}">About</a></li>
            
            <li class="nav-item" >
             <a class="nav-link  {{setActive  ('projects.*')}}" href="{{route('projects.idex')}}">Projects</a></li>


            <li class="nav-item"> 
            <a class="nav-link  {{setActive  ('contact')}}" href="{{route('contact')}}">Contact</a></li>
            @guest
            <li class="nav-item">
               <a class="nav-link   {{setActive  ('login')}}" href="{{route('login') }}">Login</a></li>
               
                  @else 

                  <li><a href="#"onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Cerrar session</a>
                  </li>

            @endguest
             

            
        </ul>
</div>
        </div>
        </div>
</nav>
              
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
  </form>               