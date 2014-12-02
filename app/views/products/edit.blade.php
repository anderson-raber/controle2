@extends('layouts.editar')

@section('painel-titulo')
	Editar Produto
@stop

@section('editar')
	{{ Form::model($product, ['route' => ['products.update',$product->id], 'method' => 'put']) }}
	<div>
		{{ Form::label('nome', 'Nome', ['class'=>'form-etiqueta']) }}
		{{ Form::text('name',$product->name , ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('description', 'descrição', ['class'=>'form-etiqueta']) }}
		{{ Form::text('description',$product->description , ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('value', 'Valor', ['class'=>'form-etiqueta']) }}
		{{ Form::text('value',$product->value , ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
	<br>
		{{ Form::submit('Editar', ['class'=>'botao botao-informacao'] ) }}
	</div>
	{{ Form::close() }}
@stop