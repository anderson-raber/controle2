<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ asset('css/framework.css') }}">
	<title>Document</title>
</head>
<body>

	<div class="container">
		<div class="col-12">
			 <nav>
                <ul class="menu">


                    @if(Auth::check())

                    <li class="menu-item menu-item-active">
                        <a href="/workers/create">Cadastro de Funcionarios</a>
                    </li>
                    <li class="menu-item">
                        <a href="/products/create">Cadastro de Produtos</a>
                    </li>
                    <li class="menu-item">
                        <a href="/suppliers/create">Cadastro de Fornecedores</a>
                    </li>
                    <li class="menu-item">
                        <a href="/logout">Sair</a>
                    </li>
                    @else
                        <li class="menu-item menu-item-active">
                        <a href="/clients/create">Cadastrar-se  </a>
                    </li>
                    <li class="menu-item ">
                        <a href="/sessions/create">Login</a>
                    </li>
                    @endif

                </ul>
            </nav>
			<div class="col-8">

                @section('submenu')

                @show
				@section('painel')

				@show


			</div>


		</div>
	</div>


</body>
</html>