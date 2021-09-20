<div class="form-group">
	{!! Form::label('nombre', 'Nombre del Proyecto') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('raza', 'Raza') !!}
	{!! Form::text('raza', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group pull-right">
	{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
	<a href="{{ route('proyectos.index') }}" class="btn btn-danger">Cancelar</a>
</div>