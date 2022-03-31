@extends('layout')

@section('title','contact')
@section('content')


<h1>contact</h1>
 
<form method="POST" action="{{route('messages.store')}}">
@csrf
<input name="name" placeholder="Nombre..." value=""><br>
{{$errors->first('name')}}<br>
<input type="email" name="email" placeholder="Email..."value=""><br>
{{$errors->first('email')}}<br>
<input name="Subject" placeholder="Asunto..." value=""><br>
{{$errors->first('Subject')}}<br>
<textarea name="contact" placeholder="Mensaje..."   id="" cols="30" rows="10"></textarea><br>
{{$errors->first('contact')}}<br>
<button>Enviar</button>
</form>
@endsection