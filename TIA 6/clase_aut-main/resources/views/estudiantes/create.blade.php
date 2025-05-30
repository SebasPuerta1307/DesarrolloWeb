@extends('layouts.app')

@section('content')
<h1>Crear Estudiante</h1>
<form method="POST" action="{{ route('estudiantes.store') }}">
    @csrf
    <input name="nombre" placeholder="Nombre" required>
    <input name="correo" type="email" placeholder="Correo" required>
    <select name="programa_id" required>
        <option value="">Seleccione un programa</option>
        @foreach ($programas as $programa)
            <option value="{{ $programa->id }}">{{ $programa->nombre }}</option>
        @endforeach
    </select>
    <button type="submit">Guardar</button>
</form>
@endsection
