<div class="col-md-6">
	<div class="form-group">
			{!!Form::label('Nombre:')!!}
			{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre'])!!}
</div>
<div class="form-group">
			{!!Form::label('Correo:')!!}
			{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el correo'])!!}
</div>
<div class="form-group">
			{!!Form::label('Pasword: ')!!}
			{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese contraseña'])!!}
</div>
@if(Auth::user()->rol == 'admin')
<div class="form-group">
	{!! Form::label('Permisos: ') !!}
	{!!  Form::select('rol', array('admin' => 'Admin', 'editor' => 'Editor'),null,['class'=>'form-control']);!!}

</div>
@endif

</div>



