<div class="col-md-6">
	<div class="form-group">
		{{Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre'])}}
	</div>
</div>

<div class="col-md-6">
	<div class="form-group">
		{{Form::text('compania',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de dónde trabaja'])}}
	</div>
</div>


<div class="col-md-6">
	<div class="form-group">
		{{Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese su email'])}}
	</div>
</div>


<div class="col-md-6">
	<div class="form-group">
		{{Form::text('phone',null,['class'=>'form-control','placeholder'=>'Ingrese su teléfono'])}}
	</div>
</div>

<div class="col-md-12">
	<div class="form-group">
		{{ Form::textarea('mensaje',null,['class'=>'form-control','placeholder'=>'Escriba lo que desee','size'=>'50x5']) }}
	</div>
</div>

<div class="col-md-12">
	@include('alerts.success')
</div>
<div class="col-md-12">
	@include('alerts.request')
</div>
<div class="col-md-12">
	@include('alerts.errors')
</div>
	
	
	


