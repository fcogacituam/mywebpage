@extends('layouts.admin')

@section('title')
<h1>Noticias</h1>
@stop


@section('alert')
	@include('alerts.success')
@stop


@section('content')
	<a href="{!! URL::to('/admin/noticias/trash') !!}"><i class="fa fa-trash" aria-hidden="true"></i> Ver noticias en papelera</a>
	<table class="table">
		<thead>
			<th>Imágen</th>
			<th>Título</th>
			<th>Categoría</th>
			<th>Autor</th>
			<th>Fecha creación</th>
			<th>Contenido</th>
			<th>Administración</th>
		</thead>
		
		@foreach($news as $new)

		<tbody>
			<td>
				<img src="../noticias/{{$new->path}}" alt="" style="height:70px;width:80px;">
			</td>
			<td>{!! link_to_route('admin.noticias.edit',$title=$new->titulo,$parameters= $new->id, $attributes=['class'=>'']) !!}</td>
			<td>{{ DB::table('categorias')->where('id', $new->categoria_id)->value('name') }}</td>
			<td>{{ $new->autor }}</td>
			<td>{{ $new->created_at }}</td>
			<td>{{ $new->resumen }}</td>
			<td class="admin-noticia">
				{!! link_to_route('admin.noticias.edit',$title="Editar",$parameters= $new->id, $attributes=['class'=>'btn btn-primary']) !!}
				{!! Form::open(['route'=>['admin.noticias.destroy',$new->id],'method'=>'DELETE']) !!}
		
		{!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
	{!! Form::close() !!}
			</td>
		</tbody>
		@endforeach
	</table>
	{!! $news-> render()!!}
@stop