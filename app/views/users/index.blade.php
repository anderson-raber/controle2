@extends('layouts.listar')

@section('painel-titulo')
	Listagem de Clientes
@stop

@section('cabecalho')
		<tr>
			<th>id</th>
			<th>nome</th>
			<th>sobrenome</th>
			<th>data de nascimento</th>
			<th>e-mail</th>
			<th>criado</th>
			<th>alterado em</th>
			<th>deletar</th>
			<hr>
		</tr>
	@stop

@section('corpo')

	@foreach ($users as $user)
		<tr>

			<td>{{$user->id}}</td>
			<td><a href="/users/{{$user->id}}">{{$user->nome}}</a></td>
			<td>{{$user->sobrenome}}</td>
			<td>{{$user->dob}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->created_at}}</td>
			<td>{{$user->updated_at}}</td>
			<td><a href="/users/{{ $user->id }}/edit">Editar</a></td>

			<td>{{Form::open(['route' => ['users.destroy',$user->id], 'method'=>'delete'])}}
					{{Form::submit('Deletar',['class'=>'botao botao-erro'])}}
				{{Form::close()}}
			</td>
		</tr>
		@endforeach
@stop