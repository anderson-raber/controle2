@extends('layouts.editar')

@section('painel-titulo')
	Editar Cliente
@stop

@section('editar')
{{ Form::model($user, ['route' => ['users.update',$user->id], 'method' => 'put']) }}
	<div>
		{{ Form::label('nome', 'Nome', ['class'=>'form-etiqueta']) }}
		{{ Form::text('nome',$user->name , ['class'=>'form-caixa-texto']) }}
		{{ $errors->first('nome') }}

	</div>
	<div>
		{{ Form::label('sobrenome', 'sobrenome', ['class'=>'form-etiqueta']) }}
		{{ Form::text('sobrenome',$user->surname , ['class'=>'form-caixa-texto']) }}
		{{ $errors->first('sobrenome') }}
	</div>
	<div>
		{{ Form::label('dob', 'data de nascimento', ['class'=>'form-etiqueta']) }}
		{{ Form::input('date','dob', ['class'=>'form-caixa-texto']) }}
		{{ $errors->first('dob') }}
	</div>
	<div>
		{{ Form::label('email', 'email', ['class'=>'form-etiqueta']) }}
		{{ Form::text('email',$user->email , ['class'=>'form-caixa-texto']) }}
		{{ $errors->first('email') }}
	</div>
	<div><br>
		{{ Form::submit('editar', ['class'=>'botao botao-informacao'] ) }}
	</div>
	{{ Form::close() }}
@stop