@extends('layouts.base')
@section('submenu')

@stop
@section('painel')
	<div class="painel sucesso">

	<div class="painel-cab">
		@yield('painel-titulo', 'Cadastrar')
	</div>

	<div class="painel-corpo">
		@section('criar')

		@show

	</div>
	<div class="painel-rodape">
				</div>

</div>
@stop

