@extends('layouts.admin')

@section('title')
	<h1>Nueva Noticia</h1>
@stop


@section('alert')
	@include('alerts.request')
@stop

@section('content')
	{!! Form::open(['route'=>'admin.noticias.store','method'=>'POST','files'=>true]) !!}
		@include('admin.noticias.forms.new')
		{!! Form::submit('Crear',['class'=>'btn btn-primary']) !!}

	{{ Form::close() }}
@stop