@extends('layouts.base')
@section('painel')
	<div class="painel sucesso">

	<div class="painel-cab">
		@yield('painel-titulo', 'Editar')
	</div>

	<div class="painel-corpo">
		@section('editar')

		@show

	</div>
	<div class="painel-rodape">
				</div>

</div>
@stop

<!--<form action="" class="form">
							<label for="" name="name" class="form-etiqueta">Nome</label>
							<input type="text" name="name" class="form-caixa-texto">
							<label for="" name="job" class="form-etiqueta">Função</label>
							<input type="text" name="job" class="form-caixa-texto">
							<br>
							<button class="botao botao-informacao">Editar</button>
						</form>-->