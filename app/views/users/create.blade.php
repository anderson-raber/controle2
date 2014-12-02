@extends('layouts.criar')
@section('panel-titulo')
Cadastro de Clientes
@stop

@section('criar')
	{{ Form::open(['route' => 'users.store', 'method' => 'post']) }}
	<div>
		{{ Form::label('nome', 'Nome', ['class'=>'form-etiqueta']) }}
		{{ Form::text('nome', '', ['class'=>'form-caixa-texto']) }}
		{{ $errors->first('nome') }}

	</div>
	<div>
		{{ Form::label('sobrenome', 'sobrenome', ['class'=>'form-etiqueta']) }}
		{{ Form::text('sobrenome', '', ['class'=>'form-caixa-texto']) }}
		{{ $errors->first('sobrenome') }}
	</div>
	<div>
		{{ Form::label('dob', 'data de nascimento', ['class'=>'form-etiqueta']) }}
		{{ Form::input('date','dob', ['class'=>'form-caixa-texto']) }}
		{{ $errors->first('dob') }}
	</div>
	<div>
		{{ Form::label('email', 'email', ['class'=>'form-etiqueta']) }}
		{{ Form::text('email', '', ['class'=>'form-caixa-texto']) }}
		{{ $errors->first('email') }}
	</div>
	<div>
		{{ Form::label('password', 'password', ['class'=>'form-etiqueta']) }}
		{{ Form::password('password', '', ['class'=>'form-caixa-texto']) }}
		{{ $errors->first('password') }}
	</div>
	<div>
	<br>
		{{ Form::submit('cadastrar', ['class'=>'botao botao-sucesso']) }}
	</div>
	{{ Form::close() }}
@stop