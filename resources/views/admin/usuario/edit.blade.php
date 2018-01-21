@extends('layouts.admin')

@section('title')
	<h1>Editar información de {{ $user->name }}</h1>
@stop

@section('alert')
	@include('alerts.request')
@stop

@section('content')
	{!! Form::model($user,['route'=>['users.update',$user->id],'method'=>'PUT','files'=>true]) !!}
		@include('admin.usuario.forms.edit')
		{!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
		
	{!! Form::close() !!}

	{!! Form::open(['route'=>['users.destroy',$user->id],'method'=>'DELETE']) !!}
		
		{!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
	{!! Form::close() !!}
@stop