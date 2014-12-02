@extends('layouts.criar')
@section('panel-titulo')
Cadastrar-se
@stop
<nav>
                <ul class="menu">
                    @if(Auth::check())



                    @endif

                </ul>
            </nav>
@section('criar')
	{{ Form::open(['route'=>'clients.store', 'method' => 'post']) }}
	<div>
		{{ Form::label('nome', 'Nome', ['class'=>'form-etiqueta']) }}
		{{ Form::text('name', '', ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('surname', 'Sobrenome', ['class'=>'form-etiqueta']) }}
		{{ Form::text('surname', '', ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('cidade', 'Cidade', ['class'=>'form-etiqueta']) }}
		{{ Form::text('cidade', '', ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
		{{ Form::label('email', 'E-mail', ['class'=>'form-etiqueta']) }}
		{{ Form::text('email', '', ['class'=>'form-caixa-texto']) }}
	</div>
	<div>
	<br>
		{{ Form::submit('Cadastrar', ['class'=>'botao botao-sucesso']) }}
	</div>
	{{ Form::close() }}
	@stop
