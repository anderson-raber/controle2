@extends('layouts.listar')
@section('painel-titulo')
	Detalhes do Cliente
@stop

@section('cabecalho')
			<tr>
				<th>#</th>
				<th>nome</th>
				<th>Cargo</th>

			</tr>
		@stop

@section('corpo')
			<tr>
				<td>{{ $worker->id }}</td>
				<td>{{ $worker->name }}</td>
				<td>{{ $worker->job }}</td>
			</tr>
@stop