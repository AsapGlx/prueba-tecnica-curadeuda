@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h1>Bienvenido a la Gestión de Personas</h1>
    <p class="lead">
        Esta aplicación es una prueba técnica desarrollada en Laravel para gestionar registros de personas.
        Incluye un sistema CRUD para crear, leer, actualizar y eliminar registros, así como autenticación 
        personalizada mediante nombre de usuario y contraseña.
    </p>
    {{-- 
        Botón de Login:
        Este botón redirige al usuario a la página de inicio de sesión.
        Utiliza la ruta definida para el login (generalmente 'login') y se le aplican clases de Bootstrap 
        para estilizarlo. Si el usuario aún no tiene sesión iniciada, al hacer clic en este botón se le 
        redirigirá al formulario de login.--}}
    
    <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a> 
</div>
@endsection
