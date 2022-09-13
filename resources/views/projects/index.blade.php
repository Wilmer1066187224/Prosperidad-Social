@extends('layout')

@section('title','portafolio')
@section('content')
<div class="container">

<div class="d-flex justify-content-between align-items-center mb-3">
<h1 class="display-6 mb-0">Portafolio</h1>

                     @auth
                     <a class="btn btn-primary" href="{{route('projects.create')}}">Crear Proyecto</a>
                     @endauth 
                     </div>
              <p class="load text-secondary">Proyecto realizados Lorem ipsum,
               dolor sit amet consectetur adipisicing elit. </p>
           
@include('partials.session-status')


    <ul class="list-group">

                    @forelse ($projects as $project)
                    <li class="list-group-item border-0 mb-3 shadow-sm" >
                     <a class="text-secondary d-flex justify-content-between align-items-center"
                      href="{{route('projects.show',$project)}}">
                            <span class=" font-weight-bold">
                            {{$project-> title}}
                            </span>
                            <span class="text-black-50">
                            {{$project-> created_at->format('d/m/y')}} </a></li>
                            </span>

                   @empty
                   <li class="list-group-item border-0 mb-3 shadow-sm">
                     No hay proyectos para mostrar</li>
                   @endforelse
 
            {{$projects->links()}}
    </ul>  
    
    </div>
@endsection