@extends('layouts.listar')
@section('painel-titulo')
	Detalhes do Cliente
@stop

@section('cabecalho')
			<tr>
				<th>#</th>
				<th>nome</th>
				<th>sobrenome</th>
				<th>data de nascimento</th>
				<th>e-mail</th>

			</tr>
		@stop

@section('corpo')
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->nome }}</td>
				<td>{{ $user->sobrenome }}</td>
				<td>{{ $user->dob }}</td>
				<td>{{ $user->email }}</td>
			</tr>
@stop