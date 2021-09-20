<!-- resources/views/proyectos/index.blade.php -->
@extends('templates.app')
@section('content')
	<h2>CRUD</h2>

	@if ( !$proyectos->count() )
		No Tienes Proyectos
	@else
		<div class="row">
			<div class="col-md-12">
				@include('proyectos.fragment.info')
				<table class="table">
					<tr>
						<th>Nombre</th>
						<th>Raza</th>
						<th>Última actualización</th>
						<th colspan="2">Opciones</th>
					</tr>

					@foreach( $proyectos as $proyecto )

						<tr>
							<td><a href="{{ route('proyectos.show', $proyecto->id) }}"> {{ $proyecto->nombre }}</a></td>
							<td>{{ $proyecto->raza }}</td>
							<td>{{ $proyecto->updated_at }}</td>
							<td>
								{{ link_to_route('proyectos.edit', 'Editar', [$proyecto->id], ['class' => 'btn btn-info']) }}
							</td>
							<td>
								<form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-danger">Borrar</button>
								</form>
							<!--{!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}-->
							</td>
						</tr>

					@endforeach

				</table>
			</div>
		</div>
	@endif
	<p>{!! link_to_route('proyectos.create', 'Crear Proyecto', [], ['class' => 'btn btn-primary']) !!}</p>
@endsection