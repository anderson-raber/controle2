@extends('layouts.listar')

@section('painel-titulo')
	Listagem de Produtos
@stop

@section('cabecalho')
			<th>id</th>
			<th>nome</th>
			<th>descrição</th>
			<th>Valor</th>
			<th>criado</th>
			<th>alterado em</th>
			<th>deletar</th>
			<hr>
		</tr>
@stop
@section('corpo')

	@foreach ($products as $product)
		<tr>

			<td>{{$product->id}}</td>
			<td><a href="/products/{{$product->id}}">{{$product->name}}</a></td>
			<td>{{$product->description}}</td>
			<td>{{$product->value}}</td>
			<td>{{$product->created_at}}</td>
			<td>{{$product->updated_at}}</td>
			<td><a href="/products/{{ $product->id }}/edit">Editar</a></td>

			<td>{{Form::open(['route' => ['products.destroy',$product->id], 'method'=>'delete'])}}
					{{Form::submit('Deletar', ['class'=>'botao botao-erro'])}}
				{{Form::close()}}
			</td>
		</tr>
		@endforeach
@stop