@extends('layouts.app')

@section('content')
    <h1>Crear Docente</h1>
    <form method="POST" action="{{ route('docentes.store') }}">
        @csrf
        <input name="nombre" placeholder="Nombre" required>
        <input name="correo" type="email" placeholder="Correo" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
