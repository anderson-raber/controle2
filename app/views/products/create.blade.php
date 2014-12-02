@extends('layouts.criar')
@section('panel-titulo')
Cadastro de Produtos
@stop

@section('criar')
	{{ Form::open(['route'=>'products.store', 'method' => 'post']) }}
	<div>
		{{ Form::label('nome', 'Nome', ['class'=>'form-etiqueta']) }}
		{{ Form::text('name', '', ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('description', 'descrição', ['class'=>'form-etiqueta']) }}
		{{ Form::text('description', '', ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('value', 'Valor', ['class'=>'form-etiqueta']) }}
		{{ Form::text('value', '', ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
	<br>
		{{ Form::submit('cadastrar', ['class'=>'botao botao-sucesso']) }}
	</div>
	{{ Form::close() }}
@stop