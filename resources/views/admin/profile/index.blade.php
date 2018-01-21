@extends('layouts.admin')

@section('title')
	<h1>Editar información de Perfil</h1>
@stop

@section('alert')
	@include('alerts.request')
@stop

@section('content')
	{!! Form::model(Auth::user(),['route'=>['admin.usuario.update',Auth::user()->id],'method'=>'PUT','files'=>true]) !!}
		@include('admin.usuario.forms.edit')
		{!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
		
	{!! Form::close() !!}

@stop