@extends('layouts.criar')
@section('panel-titulo')
Cadastro de Clientes
@stop

@section('criar')
	{{ Form::open(['route'=>'workers.store', 'method' => 'post']) }}
	<div>
		{{ Form::label('nome', 'Nome', ['class'=>'form-etiqueta']) }}
		{{ Form::text('name', '', ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('job', 'Job', ['class'=>'form-etiqueta']) }}
		{{ Form::text('job', '', ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('password', 'password', ['class'=>'form-etiqueta']) }}
		{{ Form::password('password', '', ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
	<br>
		{{ Form::submit('cadastrar', ['class'=>'botao botao-sucesso']) }}
	</div>

	{{ Form::close() }}
@stop