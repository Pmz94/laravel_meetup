@extends('templates.app')
@section('content')
    <div>
        <h2>
            {{ $proyecto->nombre }}
            <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-primary pull-right">Editar</a>
        </h2>
        <p>
            {{ $proyecto->raza }}
        </p>
        <p>
            <a href="{{ route('proyectos.index') }}" class="btn btn-default pull-right">Volver</a>
        </p>
    </div>
@endsection