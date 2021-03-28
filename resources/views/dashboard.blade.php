@extends('layouts.main')

@section('title, Dashboard')

@section('content')

<div class="container">
		<header>
			<nav>
				<div class="nav-container">
						<img id="logo" src="img/logo.png" alt="Desafio Laravel - Oficina">
					</a>
					<i class="fas fa-bars btn-menumobile"></i>
					<ul>@guest
						<li><a href="/login">Login</a></li>
						<li><a href="/register">Cadastrar</a></li>
						<li><a href="/contact">Contato</a></li>
						@endguest
						@auth
						<li><a href="/cars">Cadastrar Veículo</a></li>
						<li><a href="/maintenances">Agendar Manutenção</a></li>
						<li><a href="/contact">Contato</a></li>
						<li>
							<form action="/logout" method="POST">
							@csrf
							<a href="/logout" onclick="event.preventDefault();
							this.closest('form').submit();">
							Sair</a>
						</li>
						@endauth
						
					</ul>
				</div>
            </nav>
			<div id="main-banner">
				<div id="search-form">
					<h1>Desafio Laravel - Projeto Prático - Oficina</h1>
					<p>A maneira mais fácil de fazer manutenção do seu veículo.</p>		
				</div>
			</div>
		</header>


@endsection