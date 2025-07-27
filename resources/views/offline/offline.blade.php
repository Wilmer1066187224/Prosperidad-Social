@extends('layout')

@section('title', 'Fuera de línea')

@section('content')
<div class="container my-5 text-center">
    <h1 class="display-4 text-danger">🚫 Servicio no disponible</h1>
    <p class="lead">El sistema de contacto está fuera de línea temporalmente.</p>
    <p>Estamos trabajando para restablecer el servicio lo más pronto posible. Por favor, inténtalo más tarde.</p>
    
    <a href="{{ route('contact') }}" class="btn btn-outline-primary mt-4">
        ⬅️ Volver al formulario de contacto
    </a>
</div>
@endsection
