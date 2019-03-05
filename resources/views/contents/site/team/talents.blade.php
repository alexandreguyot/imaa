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
		<header class="header-small">
		<div class="container-header">
			<div class="info-center">
				<h1 class="animated fadeInDown">Savoir faire</h1>
				<p class="animated fadeInUp"><small>Rester avant tout à votre écoute et prendre en compte les enjeux spécifiques de votre projet</small></p>
				<ul class="breadcrumb">
					<li><a href="{{ route('/accueil') }}">Accueil</a></li>
					<li><a href="{{ route('equipe') }}">L'équipe</a></li>
					<li>Savoir faire</li>
				</ul>
			</div>
		</div>
	</header>
	<section class="section-text">
      <div class="container animated fadeIn delay-1s">
        <div class="row p-y-3">
          <div class="col-lg-3">
		      @include('layouts._sidebar_team')
          </div>
          <div class="col-md-12	col-lg-9">
          	<div class="article">
	          	<div class="card_block">
	          		<ul>
	          			<li>Communiquer</li>
	          			<li>Représenter et défendre vos intérêts</li>
	          			<li>Assurer la mise en oeuvre technique des normes et règlements</li>
	          			<li>Optimiser techniquement et financièrement une opération</li>
	          			<li>Organiser et manager la réalisation de vos projets</li>
	          		</ul>
	          	</div>
	            <p>
	        		<img src="{{ URL::asset('images/banners/knowhow.jpg') }}" class="banner">
	            </p>
	          	<div class="card_block">
	          		<ul>
	          			<li>Suivre l’exécution de vos projets (Production / Qualité Environnement / Sécurité)</li>
	          			<li>Assurer le suivi économique de vos affaires</li>
	          			<li>Gérer l’aspect juridique et contractuel de l’opération</li>
	          			<li>Déployer une démarche Lean construction (LPS/5S…)</li>
	          			<li>Manager les Hommes</li>
	          		</ul>
	          	</div>
          	</div>
          </div>
        </div>
      </div>
    </section>

@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop