@extends('layouts.app')

@section('content')
<h1>Editar Estudiante</h1>
<form method="POST" action="{{ route('estudiantes.update', $estudiante) }}">
    @csrf @method('PUT')
    <input name="nombre" value="{{ $estudiante->nombre }}" required>
    <input name="correo" type="email" value="{{ $estudiante->correo }}" required>
    <select name="programa_id" required>
        @foreach ($programas as $programa)
            <option value="{{ $programa->id }}" {{ $programa->id == $estudiante->programa_id ? 'selected' : '' }}>
                {{ $programa->nombre }}
            </option>
        @endforeach
    </select>
    <button type="submit">Actualizar</button>
</form>
@endsection
