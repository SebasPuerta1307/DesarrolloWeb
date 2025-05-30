@extends('layouts.app')

@section('content')
<h1>Estudiantes</h1>
<a href="{{ route('estudiantes.create') }}">Nuevo Estudiante</a>
<ul>
    @foreach ($estudiantes as $estudiante)
        <li>
            {{ $estudiante->nombre }} - {{ $estudiante->correo }} - {{ $estudiante->programa->nombre ?? 'Sin programa' }}
            <a href="{{ route('estudiantes.edit', $estudiante) }}">Editar</a>
            <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
