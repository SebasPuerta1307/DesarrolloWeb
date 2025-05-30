@extends('layouts.app')

@section('content')
    <h1>Editar Docente</h1>
    <form method="POST" action="{{ route('docentes.update', $docente) }}">
        @csrf @method('PUT')
        <input name="nombre" value="{{ $docente->nombre }}" required>
        <input name="correo" type="email" value="{{ $docente->correo }}" required>
        <button type="submit">Actualizar</button>
    </form>
@endsection
