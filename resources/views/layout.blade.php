<!DOCTYPE html>
<html lang="en">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<!-- Bootstrap JS (asegúrate de que esté incluido) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<!-- Carga forzada del CSS -->
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}?v={{ time() }}">

<!-- Si tienes JS -->
<script src="{{ asset('js/funciones.js') }}?v={{ time() }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>



<head>
@stack('styles')

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Prosperidad Social - Chinú</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
   
    <link rel="icon" href="{{ asset('icono.png') }}" type="image/x-icon">  
       
     <link rel="stylesheet" href="{{ asset('css/Rciudadana.css') }}">
     <link rel="stylesheet" href="{{ asset('css/Cmayor.css') }}"> 
     <link rel="stylesheet" href="{{ asset('css/Rjoven.css') }}"> 

</head>


<body>
<div id="app" class="d-flex flex-column  h-screen justify-content-between bg">
  
<header>
  @include('partials.nav')
  @include('partials.session-status')

  </header>

<main class="py-3">
   @yield('content') 
   
   </main>
   <div class="w-100" style="height: 5px; background: linear-gradient(to right, yellow 33.3%, blue 33.3%, blue 66.6%, red 66.6%);"></div>
   <footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <!-- Sección de contacto -->
            <div class="col-md-4">
                <h5>Contacto</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-envelope"></i> Email: Prosperidadsocialchinu2025@gmail.com</li>
                    <li><i class="bi bi-telephone"></i> Teléfono: +57 300 123 4567</li>
                    <li><i class="bi bi-geo-alt"></i> Dirección: Calle 16, Chinú, Córdoba, Colombia</li>
                </ul>
            </div>
            <!-- Sección de información -->
            <div class="col-md-4">
                <h5>Información</h5>
                <ul class="list-unstyled">
                    <li><a href="https://www.chinu-cordoba.gov.co/Paginas/Inicio.aspx" class="text-white text-decoration-none">Alcaldia de Chinú</a></li>
                    <li><a href="" class="text-white text-decoration-none">Términos y Condiciones</a></li>
                    <li><a href="" class="text-white text-decoration-none">Política de Privacidad</a></li>
                </ul>
            </div>
            <!-- Sección de redes sociales -->
            <div class="col-md-4">
    <h5>Síguenos</h5>
    <div class="d-flex flex-column">
        <a href="https://www.facebook.com/profile.php?id=61561879125922" class="text-white mb-2">
            <i class="bi bi-facebook"></i> Facebook
        </a>
        <a href="https://www.instagram.com/rentaciudadana_chinu" class="text-white mb-2" target="_blank">
            <i class="bi bi-instagram"></i> Instagram
        </a>
        <a href="https://wa.me/573001234567" class="text-white">
            <i class="bi bi-whatsapp"></i> WhatsApp
        </a>
    </div>
    
     </div>

        
    
</footer>
<div class="w-100" style="height: 5px; background: linear-gradient(to right, #008000 33.3%, #FFFFFF 33.3%, #FFFFFF 66.6%, #FF8C00 66.6%);"></div>
<!-- Línea de respuesta con los colores de la bandera -->

   <footer class="bg-white text-center text-black-50 py-3 shadow ">
   {{config('app.name') }} Copyright © {{date('Y')}}
   </footer>
   
   </div>
   
</body>
</html>