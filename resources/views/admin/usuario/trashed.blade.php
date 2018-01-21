@extends('layouts.admin')


@section('title')
<h1>Usuarios creados</h1>
@stop


@section('alert')
	@include('alerts.success')
@stop



@section('content')
	<ul>
		<li>
			{!! link_to_action('UsersController@index', $title = 'Usuarios', $parameters = [], $attributes = []); !!}
		</li>
	</ul>
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Rol</th>
			<th>Administración</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->rol }}</td>
			<td>
				
				{!! link_to_action('UsersController@restore', $title = 'Restaurar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']); !!}		
		
		
	{!! Form::close() !!}
			</td>
		</tbody>
		@endforeach
	</table>
	{!! $users-> render()!!}
@stop