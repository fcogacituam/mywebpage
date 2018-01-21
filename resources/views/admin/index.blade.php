@extends('layouts.login')

@section('formulario')

	<div class="logo-login"><img src="img/logo.png" alt=""></div>
	<div class="container-login">
		
		{!! Form::open(['route'=>'login.store','method'=>'POST']) !!}
		<fieldset>
			<div class="form-group">
				{!! Form::label('correo','Correo: ') !!}
				{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('contrasena','Contraseña: ') !!}
				{!! Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña']) !!}
			</div>
			{!! Form::submit('Entrar',['class'=>'btn btn-primary btn-center']) !!}
			
		</fieldset>
			{!! Form::close() !!}
	</div>
	
@stop