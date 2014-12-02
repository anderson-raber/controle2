@extends('layouts.criar')
@section('panel-titulo')
Cadastro de Clientes
@stop

@section('criar')
	{{ Form::open(['route'=>'suppliers.store', 'method' => 'post']) }}
	<div>
		{{ Form::label('nome', 'Nome', ['class'=>'form-etiqueta']) }}
		{{ Form::text('name', '', ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('city', 'Cidade', ['class'=>'form-etiqueta']) }}
		{{ Form::text('city', '', ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
	<br>
		{{ Form::submit('cadastrar', ['class'=>'botao botao-sucesso']) }}
	</div>
	{{ Form::close() }}
@stop