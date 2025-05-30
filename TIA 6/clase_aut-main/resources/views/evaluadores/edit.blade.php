@extends('layouts.app')

@section('content')
<h1>Editar Evaluador</h1>
<form method="POST" action="{{ route('evaluadores.update', $evaluador) }}">
    @csrf @method('PUT')
    <input name="nombre" value="{{ $evaluador->nombre }}" required>
    <input name="correo" type="email" value="{{ $evaluador->correo }}" required>
    <button type="submit">Actualizar</button>
</form>
@endsection
