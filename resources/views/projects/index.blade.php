@extends('layout')

@section('title','portafolio')
@section('content')
<div class="container">



<div class="d-flex justify-content-between align-items-center mb-3">

  @isset($category)
  <div>
<h1 class="display-6 mb-0">{{$category->name}}</h1>

<a href="{{route('projects.idex')}}">Regresar al portafolio</a>
</div>
 @else
<h1 class="display-6 mb-0">Cronogramas De Pagos</h1>
@endisset
                     @can('create',$newProject)
                     <a class="btn btn-primary" href="{{route('projects.create')}}">Crear Proyecto</a>
                     @endcan

                     
                     </div>
              <p class="load text-secondary">Mantenerte al día de pagos y todo tipo de eventos es la mejor manera de transformar la calidad de  vida para todos los habitantes! </p>
           
@include('partials.session-status')


    <div class="d-flex flex-wrap  justify-content-between aling-items-start">

                    @forelse ($projects as $project)

                    <div  class="card border-0 shadow-sm mt-4 mx-auto" style="width: 18rem">
                    
                                      
                                  @if($project->image)
                                     <img class="card-img-top" style="height:150px; object-fit:cover"
                                      src="{{asset('storage/'.$project->image)}}" 
                                     alt="{{$project->title}}">
                                  @endif


                            <div class="card-body">
                              <h5 class="card-title">
                            <a href="{{route('projects.show',$project)}}">
                              {{$project->title}}</a>
                              </h5>
                            
                            <h6 class="card-subtitle">{{$project-> created_at->format('d/m/y')}}</h6>
                            <p class="card-text">{{$project-> description}}</p>





                            <div class="d-flex  justify-content-between aling-items-start">
                                        <a href="{{route('projects.show',$project)}}"
                                        class="btn btn-primary btn-sm">Ver mas...</a>
                                        
                            <!-- @if($project->category_id)   

                              <a href= "{{route('categories.show',$project->category)}}"
                                 class="badge bg-secondary">{{$project->category->name}}</a>

                             @endif -->
                                       
                        </div>
                      </div> 
                    </div> 
                   @empty

                   <div class="card">
                   <div class="card-body">
                   
                     No hay proyectos para mostrar

                     </div>
                     </div>
                   @endforelse
                   </div>

                   <div class="mt-4">   
       {{$projects->links()}}
            
           
       
      </div>
      @can('view-deleted-projects')
        
  <h4><i class="fas fa-trash-alt me-2 text-danger"></i> Papelera</h4>
      <ul class="list-group">
        @foreach ($deletedProjects as $deletedProject )
          <li>{{$deletedProject->title}}

            @can('restore', $deletedProject)
            <form method="POST" action="{{route('projects.restore',$deletedProject)}}" class="d-inline">
              @csrf @method('PATCH')
            <button class="btn btn-sm btn-info"><i class="fas fa-undo-alt me-1"></i>Restaurar</button>           
          </form>
            @endcan

            @can('forceDelete', $deletedProject)
            <form method="POST" 
              onsubmit="return confirm('Esta acción no se puede deshacer,estás seguro de eliminar el proyecto?')"
              action="{{route('projects.forceDelete',$deletedProject)}}"class="d-inline">
              @csrf @method('DELETE')
            <button class="btn btn-sm btn-danger"><i class="fas fa-trash me-1"></i> Eliminar</button>
            </form>
            @endcan
            
          </li>
        @endforeach


      </ul>
      @endcan
    </div>
@endsection