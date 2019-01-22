<!-- On définit la vue principale -->
@extends('layouts.master')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop
 
@section('content')

	<!-- Hero Section
	================================================== --> 
	<header class="header-small">
		<div class="container-header">
			<div class="info-center">
				<h1>Présentation</h1>
				<ul class="breadcrumb">
					<li><a href="{{ url('home') }}">Accueil</a></li>
					<li><a href="{{ url('equipe') }}">L'équipe</a></li>
					<li>Présentation</li>
				</ul>
			</div>
		</div>
	</header>

@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop