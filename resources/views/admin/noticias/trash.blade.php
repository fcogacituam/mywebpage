@extends('layouts.admin')


@section('content')
<div class="panel panel-info">
  <div class="panel-heading"><i class="fa fa-info-circle" aria-hidden="true"></i> Información</div>
  <div class="panel-body">Por el momento no es posible restaurar las noticias en papelera. Próximamente se habilitará esa opción. Si necesitas recuperar una Noticia que fue borrada accidentalmente, contáctate con Francisco Gacitúa al correo fcogacituam@gmail.com, Gracias por su comprensión.</div>
</div>
	<h1><i class="fa fa-trash" aria-hidden="true"></i> Papelera</h1>
	<table class="table">
		<thead>
			<th>Título</th>
			<th>Categoría</th>
			<th>Autor</th>
			<th>Fecha creación</th>
			<th>Contenido</th>
			<th>Administración</th>
		</thead>
		@foreach($noticias as $noticia)
		<tbody>
			<td>{{ $noticia->titulo }}</td>
			<td>{{ DB::table('categorias')->where('id', $noticia->categoria_id)->value('name') }}</td>
			<td>{{ $noticia->autor }}</td>
			<td>{{ $noticia->created_at }}</td>
			<td>{{ $noticia->contenido }}</td>
			<td>
				
			</td>
		</tbody>
		@endforeach
	</table>
	{!! $noticias-> render()!!}
@stop