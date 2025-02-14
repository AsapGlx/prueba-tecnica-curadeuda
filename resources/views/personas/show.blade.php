@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Persona</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                {{ $persona->primer_nombre }}
                {{ $persona->segundo_nombre ? $persona->segundo_nombre : '' }}
                {{ $persona->apellido }}
            </h5>
            <p class="card-text"><strong>Email:</strong> {{ $persona->email }}</p>
            <p class="card-text"><strong>Teléfono:</strong> {{ $persona->telefono }}</p>
            <p class="card-text"><strong>Fecha de Nacimiento:</strong> {{ $persona->fecha_nacimiento }}</p>
            <p class="card-text"><strong>Género:</strong> {{ $persona->genero }}</p>
            <p class="card-text"><strong>Dirección:</strong> {{ $persona->direccion }}</p>
            <p class="card-text"><strong>Ciudad:</strong> {{ $persona->ciudad }}</p>
            <p class="card-text"><strong>Estado:</strong> {{ $persona->estado }}</p>
            <p class="card-text"><strong>País:</strong> {{ $persona->pais }}</p>
        </div>
    </div>
    <a href="{{ route('personas.index') }}" class="btn btn-secondary mt-3">Volver al listado</a>
</div>
@endsection
