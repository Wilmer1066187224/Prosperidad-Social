@extends('layout')

@section('title','Editar proyecto')
@section('content')

<h1>Editar proyecto</h1>
@include('partials.session-status')
@include('partials.valitation-erros')
        
<form method="POST" action="{{route('projects.update',$project)}}">
   @method('PATCH')
   
@include ('projects.form')

<button>Actualizar</button>
</form>
   
@endsection