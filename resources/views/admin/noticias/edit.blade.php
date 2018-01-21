@extends('layouts.admin')

@section('title')
	<h1>Editar información de {{ $new->titulo }}</h1>
@stop

@section('alert')
	@include('alerts.request')
@stop

@section('content')
	{!! Form::model($new,['route'=>['admin.noticias.update',$new->id],'method'=>'PUT','files'=>true]) !!}
		@include('admin.noticias.forms.new')
		{!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
		
	{!! Form::close() !!}

	{!! Form::open(['route'=>['admin.noticias.destroy',$new->id],'method'=>'DELETE']) !!}
		
		{!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
	{!! Form::close() !!}
@stop