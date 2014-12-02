@extends('layouts.listar')

@section('painel-titulo')
	Listagem de Clientes
@stop

@section('cabecalho')
		<tr>
			<th>id</th>
			<th>nome</th>
			<th>cidade</th>
			<th>criado</th>
			<th>alterado em</th>
			<th>deletar</th>
			<hr>
		</tr>
	@stop

@section('corpo')

	@foreach ($suppliers as $supplier)
		<tr>

			<td>{{$supplier->id}}</td>
			<td><a href="/suppliers/{{$supplier->id}}">{{$supplier->name}}</a></td>
			<td>{{$supplier->city}}</td>
			<td>{{$supplier->created_at}}</td>
			<td>{{$supplier->updated_at}}</td>
			<td><a href="/suppliers/{{ $supplier->id }}/edit">Editar</a></td>

			<td>{{Form::open(['route' => ['suppliers.destroy',$supplier->id], 'method'=>'delete'])}}
					{{Form::submit('Deletar',['class'=>'botao botao-erro'])}}
				{{Form::close()}}
			</td>
		</tr>
		@endforeach
@stop