@extends('layout')

@section('title','crear proyecto')
@section('content')

    <h1>crear proyecto</h1>
    @include('partials.session-status')
    @include('partials.valitation-erros')

    <form method="POST" action="{{route('projects.store')}}">
   
    
    @include ('projects.form')
    <button>Guardar</button>
    </form>
    
@endsection