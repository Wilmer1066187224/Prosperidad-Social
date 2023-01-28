
@csrf 


                   @if($project->image)
                      <img class="card-img-top mb-2 " 
                      style="height:250px; object-fit:cover"
                       src="{{asset('storage/'.$project->image)}}" 
                       alt="{{$project->title}}">
                      @endif



<div class="custom-file mb-2">
  <input  name="image" type="file" class="custom-file-input" id="customFile">
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>



<div class="container">
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
   

<div class="form group">
<label for="title"> Titulo del proyecto</label>  
<input class="form-control border-0 bg-light shadow-sm"
 type="text" name="title" 
 value="{{old('title',$project->title)}}">
 </div>




 <div class="form group">
<label for="url" > Url del proyecto</label>
<input class="form-control border-0 bg-light shadow-sm"
 type="text" name="url"  value="{{old('url',$project->url)}}" >
 </div>

 <div class="form group">
 <label for="description" >Descripcion del proyeto</label>
<textarea class="form-control border-0 bg-light shadow-sm" 
type="text" name="description" > {{old('description',$project->description)}} </textarea>

<button>{{$btnText}}</button>

<a  class="btn btn-link btn-block" href="{{route('projects.idex')}}">Cancelar</a>
    

