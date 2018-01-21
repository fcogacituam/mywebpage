@extends('layouts.admin')

@section('title')
<h1>Categorías</h1>
@stop


@section('alert')
	@include('alerts.success')
@stop


@section('content')
<div class="col-md-4">
	<table class="table">
		<thead>
			<th>Categoría</th>
			<th>Descripción</th>
			<th>Administrar</th>
		</thead>
		
		@foreach($categorias as $cat)

		<tbody>
			
			<td>{{ $cat->name }}</td>
			<td>{{ $cat->descripcion }}</td>
			<td>
				{!! Form::open(['route'=>['admin.categorias.destroy',$cat->id],'method'=>'DELETE']) !!}
		
		{!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
	{!! Form::close() !!}

			</td>
	
		</tbody>
		@endforeach
	</table>
	{!! $categorias-> render()!!}
</div>

<div class="col-md-4">
	<h2>Crear nueva categoría</h2>
	{!!Form::open(['route'=>'admin.categorias.store','method'=>'POST']) !!}
	<div class="form-group">
		{!! Form::label('Nombre: ') !!}
		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Introduce el nombre de la categoría']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Descripción: ') !!}
		{!! Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Introduce una descripción']) !!}
	</div>
	{!! Form::submit('Crear',['class'=>'btn btn-primary']) !!}
	{!! Form::close() !!}

</div>


@stop