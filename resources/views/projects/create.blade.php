@extends('layout')

@section('title','crear proyecto')
@section('content')


<div class="container">
    
  
    <div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
    @include('partials.session-status')
    @include('partials.valitation-erros')

            <form class="bg-white py-3  px-4 shadow rounded"
            method="POST" 

            enctype="multipart/form-data"

            action="{{route('projects.store')}}">

            
            <h1 class="display-6 mb-5">Nuevo proyecto</h1>
   
    
            @include ('projects.form',['btnText'=>'Guardar'])
   
       </form>
    </div>
    </div>

    </div>
@endsection