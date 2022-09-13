<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">

     

        
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

   <footer class="bg-white text-center text-black-50 py-3 shadow ">
   {{config('app.name') }} Copyright © {{date('Y')}}
   </footer>
   
   </div>
</body>
</html>