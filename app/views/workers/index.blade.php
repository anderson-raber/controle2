@extends('layouts.listar')

@section('painel-titulo')
	Listagem de Clientes
@stop

@section('cabecalho')
		<tr>
			<th>id</th>
			<th>nome</th>
			<th>Cargo</th>
			<th>criado</th>
			<th>alterado em</th>
			<th>deletar</th>
			<hr>
		</tr>
	@stop

@section('corpo')

	@foreach ($workers as $worker)
		<tr>

			<td>{{$worker->id}}</td>
			<td><a href="/workers/{{$worker->id}}">{{$worker->name}}</a></td>
			<td>{{$worker->job}}</td>
			<td>{{$worker->created_at}}</td>
			<td>{{$worker->updated_at}}</td>
			<td><a href="/workers/{{ $worker->id }}/edit">Editar</a></td>

			<td>{{Form::open(['route' => ['workers.destroy',$worker->id], 'method'=>'delete'])}}
					{{Form::submit('Deletar',['class'=>'botao botao-erro'])}}
				{{Form::close()}}
			</td>
		</tr>
		@endforeach
@stop>