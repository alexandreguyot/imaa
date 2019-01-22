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
	<header>
		<div class="container-header" style="background-image: url({{ URL::asset('images/bg-contact.jpg') }});">
			<div class="info-center">
				<h1>l'équipe</h1>
				<ul>
					<li><a href="{{ url('equipe/presentation') }}">Présentation</a></li>
					<li><a href="{{ url('equipe/savoir-faire') }}">Savoir faire</a></li>
					<li><a href="{{ url('equipe/ce-qui-nous-differencie') }}">Ce qui nous differencie</a></li>
				</ul>
			</div>
		</div>
	</header>

@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop