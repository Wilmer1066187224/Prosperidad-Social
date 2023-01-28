@extends('layout')

@section('title','Editar proyecto')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">


@include('partials.session-status')
@include('partials.valitation-erros')
        
<form class="bg-white py-3  px-4 shadow rounded"
 method="POST"
action="{{route('projects.update',$project)}}"
enctype="multipart/form-data"
>

   @method('PATCH')
   
   <h1 class="display-4 mb-4">Editar proyecto</h1>
 
   
@include ('projects.form',['btnText'=>'Actualizar'])

</form>
</div>
</div>
</div>

   
@endsection