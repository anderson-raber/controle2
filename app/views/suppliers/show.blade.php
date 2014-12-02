@extends('layouts.listar')
@section('painel-titulo')
	Detalhes do Cliente
@stop

@section('cabecalho')
			<tr>
				<th>#</th>
				<th>nome</th>
				<th>cidade</th>

			</tr>
		@stop

@section('corpo')
			<tr>
				<td>{{ $supplier->id }}</td>
				<td>{{ $supplier->name }}</td>
				<td>{{ $supplier->city }}</td>
			</tr>
@stop