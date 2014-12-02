@extends('layouts.base')
@section('painel')
	<div class="painel sucesso">

	<div class="painel-cab">
		@yield('painel-titulo', 'Cadastro')
	</div>

	<div class="painel-corpo">

		<table class="tabela ">
			<thead>
				@section('cabecalho')

				@show
			</thead>
			<tbody >
				@section('corpo')

				@show
			</tbody>
		</table>
	</div>
	<div class="painel-rodape">
				</div>

</div>
@stop