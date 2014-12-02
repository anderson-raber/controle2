@extends('layouts.listar')
@section('painel-titulo')
	Detalhes do Cliente
@stop

@section('cabecalho')
			<tr>
				<th>#</th>
				<th>nome</th>
				<th>Descrição</th>
				<th>Valor</th>

			</tr>

@stop

@section('corpo')
			<tr>
				<td>{{ $product->id }}</td>
				<td>{{ $product->name }}</td>
				<td>{{ $product->description }}</td>
				<td>{{ $product->value }}</td>
			</tr>
@stop