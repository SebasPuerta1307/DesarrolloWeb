@extends('layouts.app')

@section('content')
<h1>Evaluadores</h1>
<a href="{{ route('evaluadores.create') }}">Nuevo Evaluador</a>
<ul>
    @foreach ($evaluadores as $evaluador)
        <li>
            {{ $evaluador->nombre }} - {{ $evaluador->correo }}
            <a href="{{ route('evaluadores.edit', $evaluador) }}">Editar</a>
            <form action="{{ route('evaluadores.destroy', $evaluador) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
