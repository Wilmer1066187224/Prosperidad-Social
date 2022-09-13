@extends('layout')

@section('title','contact')
@section('content')
<div class="container">
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
   

 
 <form  class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('messages.store')}}">
 @csrf

 <h1 class="display-6">Contacto</h1>
 
 
 <div class="form group">
 <label for="name">Nombre</label>
 <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
  name="name" placeholder="Nombre..." value="">
 
                 @error('name')
                 <span class="invalid-feedback" role="alert">
                 <strong>
                 {{$message}}
                 </strong>
                 </span>
                 @enderror
 
 </div>
 
 <div class="form group">
 <label for="name">Correo electronico</label>
 <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" 
 type="email" name="email" placeholder="Email..."value="">
                 @error('email')
                 <span class="invalid-feedback" role="alert">
                 <strong>
                 {{$message}}
                 </strong>
                 </span>
                 @enderror   
 </div>
 
 
 
 <div class="form group">
 <label for="name">Asunto</label>
 <input class="form-control bg-light shadow-sm @error('Subject') is-invalid @else border-0 @enderror"
  name="Subject" placeholder="Asunto..." value="">
                 @error('Subject')
                 <span class="invalid-feedback" role="alert">
                 <strong>
                 {{$message}}
                 </strong>
                 </span>
                 @enderror
 </div>
 
 
 
 <div class="form group">
 <label for="name">Contenido</label>
 <textarea class="form-control bg-light shadow-sm @error('Subject') is-invalid @else border-0 @enderror"
  name="contact" placeholder="Mensaje..."   id="" cols="30" rows="10"></textarea>
                 @error('contact ')
                 <span class="invalid-feedback" role="alert">
                 <strong>
                 {{$message}}
                 </strong>
                 </span>
                 @enderror
 </div>   
 <button class="btn btn-primary  btn-lg btn-block">Enviar</button>
 </form>
</div>
</div>


</div>
@endsection