@extends('layouts.app')

@section('content')
   
    <h1>Lista de Cursos</h1>

    <ul>
        @foreach($cursos as $curso)
            <li>{{ $curso->nombre }}</li>
        @endforeach
    </ul>

    <h2>Crear Nuevo Curso</h2>

    <form action="{{ route('cursos.store') }}" method="post">
        @csrf

        <label for="nombre">Nombre del Curso:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" rows="3" required></textarea>

        <button type="submit">Crear Curso</button>
    </form>
@endsection
