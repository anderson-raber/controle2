@extends('layouts.editar')

@section('painel-titulo')
	Editar Cliente
@stop

@section('editar')
	{{ Form::model($worker, ['route' => ['workers.update',$worker->id], 'method' => 'put']) }}
	<div>
		{{ Form::label('nome', 'Nome', ['class'=>'form-etiqueta']) }}
		{{ Form::text('name',$worker->name , ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('job', 'Job', ['class'=>'form-etiqueta']) }}
		{{ Form::text('job',$worker->job , ['class'=>'form-caixa-texto']) }}
	</div>
	<div><br>
		{{ Form::submit('Editar', ['class'=>'botao botao-informacao'] ) }}
	</div>
	{{ Form::close() }}
@stop