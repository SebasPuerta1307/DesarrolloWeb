@extends('layouts.app')

@section('content')
    <h1>Docentes</h1>
    <a href="{{ route('docentes.create') }}">Nuevo Docente</a>
    <ul>
        @foreach ($docentes as $docente)
            <li>
                {{ $docente->nombre }} ({{ $docente->correo }})
                <a href="{{ route('docentes.edit', $docente) }}">Editar</a>
                <form action="{{ route('docentes.destroy', $docente) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
