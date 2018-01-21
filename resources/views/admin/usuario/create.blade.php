@extends('layouts.admin')

@section('title')
	<h1>Agregar nuevo usuario</h1>
@stop


@section('alert')
	@include('alerts.request')
@stop

@section('content')
	
		

	{!! Form::open(['route'=>'users.store','method'=>'POST']) !!}
		@include('admin.usuario.forms.usr')
		{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
	{!! Form::close() !!}
@stop