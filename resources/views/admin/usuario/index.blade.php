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
			{!! link_to_action('UsersController@trashed', $title = 'Eliminados', $parameters = [], $attributes = []); !!}
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
				{!! link_to_route('users.edit',$title="Editar",$parameters= $user->id, $attributes=['class'=>'btn btn-primary']
				) !!}
				{!! Form::open(['route'=>['users.destroy',$user->id],'method'=>'DELETE']) !!}
		
		{!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
	{!! Form::close() !!}
			</td>
		</tbody>
		@endforeach
	</table>
	{!! $users-> render()!!}
@stop