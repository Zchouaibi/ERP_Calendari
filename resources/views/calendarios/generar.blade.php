@extends('layouts.app')

@section('content')
    <h1>Generar Calendario</h1>

    <form action="{{ route('calendario.store') }}" method="post">
        @csrf

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" required>

        <label for="evento">Evento:</label>
        <input type="text" name="evento" id="evento" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" rows="3" required></textarea>

        <button type="submit">Generar Calendario</button>
    </form>
@endsection
