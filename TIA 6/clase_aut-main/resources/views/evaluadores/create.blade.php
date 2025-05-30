@extends('layouts.app')

@section('content')
<h1>Crear Evaluador</h1>
<form method="POST" action="{{ route('evaluadores.store') }}">
    @csrf
    <input name="nombre" placeholder="Nombre" required>
    <input name="correo" type="email" placeholder="Correo" required>
    <button type="submit">Guardar</button>
</form>
@endsection
