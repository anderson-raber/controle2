@extends('layouts.listar')

@section('painel-titulo')
	Listagem de Clientes
@stop

@section('cabecalho')
<tr>
	<th>id</th>
	<th>nome</th>
	<th>sobrenome</th>
	<th>cidade</th>
	<th>email</th>
	<th>criado</th>
	<th>alterado em</th>
	<th>deletar</th>
	<hr>
</tr>
@stop

@section('corpo')


@foreach ($clients as $client)
<tr>

	<td>{{$client->id}}</td>
	<td><a href="/clients/{{$client->id}}">{{$client->name}}</a></td>
	<td>{{$client->surname}}</td>
	<td>{{$client->city}}</td>
	<td>{{$client->email}}</td>
	<td>{{$client->created_at}}</td>
	<td>{{$client->updated_at}}</td>
	<td><a href="/clients/{{ $client->id }}/edit">Editar</a></td>

	<td>{{Form::open(['route' => ['clients.destroy',$client->id], 'method'=>'delete'])}}
		{{Form::submit('Deletar',['class'=>'botao botao-erro'])}}
		{{Form::close()}}
	</td>
</tr>
@endforeach
@stop

