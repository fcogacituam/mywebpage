<div class="form-group">
			{!!Form::label('Titulo:')!!}
			{!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Ingresa el título de la noticia'])!!}
</div>
<div class="form-group">
			{!!Form::label('Categoría:')!!}
			{!!Form::select('categoria_id',$cat,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
			{!! Form::label('image','Cambiar Imagen: ') !!}
			{!! Form::file('path',['class'=>'form-control']) !!}
</div>
<div class="form-group">
			{!!Form::label('Contenido: ')!!}
			{!!Form::textarea('contenido',null,['class'=>'form-control','placeholder'=>'Escriba el contenido de la noticia','id'=>'editable'])!!}
</div>
<div class="form-group">
			{!!Form::label('Resumen: ')!!}
			{!!Form::textarea('resumen',null,['class'=>'form-control','placeholder'=>'Escriba una resumen para la noticia','size'=>'50x5'])!!}
</div>


