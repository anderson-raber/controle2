@extends('layouts.listar')
@section('painel-titulo')
	Detalhes do Cliente
@stop

@section('cabecalho')

			<tr>
				<th>#</th>
				<th>nome</th>
				<th>sobrenome</th>
				<th>cidade</th>
				<th>email</th>
			</tr>
@stop

@section('corpo')
			<tr>
				<td>{{ $client->id }}</td>
				<td>{{ $client->name }}</td>
				<td>{{ $client->surname }}</td>
				<td>{{ $client->city }}</td>
				<td>{{ $client->email }}</td>
			</tr>
@stop