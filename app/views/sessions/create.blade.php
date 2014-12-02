@extends('layouts.criar')
@section('panel-titulo')
Login
@stop

@section('criar')
	{{ Form::open(['method' => 'post', 'route' => 'sessions.store']) }}
	<div>
		{{ Form::label('email', 'E-mail: ', ['class'=>'form-etiqueta']) }}
		{{ Form::email('email', '', ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('senha', 'senha: ', ['class'=>'form-etiqueta']) }}
		{{ Form::password('password', '', ['class'=>'form-caixa-texto']) }}
	</div>
	<div><br>
		{{ Form::submit('Logar', ['class'=>'botao botao-sucesso']) }}
	</div>
	{{ Form::close() }}
@stop