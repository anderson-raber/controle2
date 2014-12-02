@extends('layouts.editar')

@section('painel-titulo')
	Editar Cliente
@stop

@section('editar')
	{{ Form::model($supplier, ['route' => ['suppliers.update',$supplier->id], 'method' => 'put']) }}
	<div>
		{{ Form::label('nome', 'Nome', ['class'=>'form-etiqueta']) }}
		{{ Form::text('name',$supplier->name , ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('city', 'Cidade', ['class'=>'form-etiqueta']) }}
		{{ Form::text('city',$supplier->city , ['class'=>'form-caixa-texto']) }}
	</div>
	<div><br>
		{{ Form::submit('Editar', ['class'=>'botao botao-informacao'] ) }}
	</div>
	{{ Form::close() }}
@stop