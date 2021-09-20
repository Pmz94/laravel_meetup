@extends('templates.app')
@section('content')
	<div>
		<h2>
			Nuevo Proyecto
			<a href="{{ route('proyectos.index') }}" class="btn btn-default pull-right">Lista</a>
		</h2>
		@include('proyectos.fragment.error')
		{!! Form::open(['route' => 'proyectos.store']) !!}
		@include('proyectos.fragment.form')
		{!! Form::close() !!}
	</div>
@endsection