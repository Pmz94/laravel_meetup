@extends('templates.app')
@section('content')
	<div>
		<h2>
			Editar Proyecto
			<a href="{{ route('proyectos.index') }}" class="btn btn-default pull-right">Lista</a>
		</h2>
		@include('proyectos.fragment.error')
		{!! Form::model($proyectos, ['route' => ['proyectos.update', $proyectos->id], 'method' => 'PUT']) !!}
		@include('proyectos.fragment.form')
		{!! Form::close() !!}
	</div>
@endsection