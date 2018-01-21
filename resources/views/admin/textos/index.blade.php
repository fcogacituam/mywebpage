@extends('layouts.admin')

@section('title')
<h1><i class="fa fa-font" aria-hidden="true"></i> Modificar Textos de Página</h1>
@stop


@section('alert')
	@include('alerts.success')
@stop


@section('content')
<div class="panel panel-info">
  <div class="panel-heading"><i class="fa fa-info-circle" aria-hidden="true"></i> Información</div>
  <div class="panel-body">Para destacar una palabra en negrita debes encerrarla con la etiqueta <strong>strong</strong> Ej: <code>&lt;strong&gt;</code> Texto <code>&lt;/strong&gt;</code></div>
</div>
	<h1>Estoy en los textos</h1>
	@foreach($textos as $texto)
		{!! Form::model($texto, [
		    'method' => 'PUT',
		    'route' => ['admin.textos.update', $texto->id]
		]) !!}
			<div class="col-md-6 form-group">
				{{ Form::label($texto->nombre) }}
				{{ Form::textarea('descripcion',null,['class'=>'form-control','size'=>'50x4']) }}
				{!! Form::submit('Modificar',['class'=>'btn btn-primary']) !!}
			</div>
			
		{{ Form::close() }}
	@endforeach

	{!! $textos-> render()!!}
@stop