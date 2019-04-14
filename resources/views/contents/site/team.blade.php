<!-- On définit la vue principale -->
@extends('layouts.master')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop
@section('content')
@include('layouts._header')

	<!-- Hero Section
	================================================== --> 
	<header>
		<div class="container-header" style="background-image: url({{ URL::asset('images/bg-contact.jpg') }});">
			<div class="info-center">
				<h1 class="animated fadeInDown">L'Équipe</h1>
				<ul class="animated fadeInUp">
					<li><a href="{{ route('equipe.presentation') }}">Présentation</a></li>
					<li><a href="{{ route('equipe.savoir-faire') }}">Savoir faire</a></li>
					<li><a href="{{ route('equipe.ce-qui-nous-differencie') }}">Ce qui nous differencie</a></li>
				</ul>
			</div>
		</div>
		@include('layouts._social')
	</header>

@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop