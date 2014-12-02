@extends('layouts.editar')

@section('painel-titulo')
	Editar Cliente
@stop

@section('editar')
	{{ Form::model($client, ['route' => ['clients.update',$client->id], 'method' => 'put']) }}
	<div>
		{{ Form::label('nome', 'Nome', ['class'=>'form-etiqueta']) }}
		{{ Form::text('name',$client->name , ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('surname', 'Sobrenome', ['class'=>'form-etiqueta']) }}
		{{ Form::text('surname',$client->surname , ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('cidade', 'Cidade', ['class'=>'form-etiqueta']) }}
		{{ Form::text('city',$client->city, ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('email', 'E-mail', ['class'=>'form-etiqueta']) }}
		{{ Form::email('email',$client->email , ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
	<br>
		{{ Form::submit('Editar', ['class'=>'botao botao-informacao'] ) }}
	</div>
	{{ Form::close() }}
@stop