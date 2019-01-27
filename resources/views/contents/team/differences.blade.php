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
				<h1 class="animated fadeInDown">Ce qui nous différencie</h1>
				<p class="animated fadeInUp"><small>Un management collaboratif et de proximité</small></p>
				<ul class="breadcrumb">
					<li><a href="{{ url('home') }}">Accueil</a></li>
					<li><a href="{{ url('equipe') }}">L'équipe</a></li>
					<li>Ce qui nous différencie</li>
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
	          		<h3>Savoir faire</h3>
	          		<ul>
	          			<li>Savoir-faire de l'entreprise générale</li>
	          			<li>Connaissance des limites de prestations entre lots</li>
	          			<li>Pistes de variantes et d’optimisations</li>
	          			<li>Réseaux d’entreprises</li>
	          		</ul>
	          	</div>
          	    <p>
          			<img src="{{ URL::asset('images/banners/savoirfaire.jpg') }}" class="banner">
          	    </p>
	          	<div class="card_block">
		          	<h3>Délais</h3>
		          	<ul>
		          		<li>Planning décisionnel</li>
		          		<li>Planning TCE détaillé</li>
		          		<li>Lean construction (LPS/5S)</li>
		          		<li>Point d'arret sur les jalons</li>
		          		<li>Pointage hebdomadaire des effectifs</li>
		          	</ul>
	          	</div>
          	    <p>
          			<img src="{{ URL::asset('images/banners/delais.jpg') }}" class="banner">
          	    </p>
	          	<div class="card_block">
		          	<h3>Qualité</h3>
		          	<ul>
		          		<li>Synthèse technique</li>
		          		<li>Suivi des autocontrôles des  entreprises</li>
		          		<li>Réception des supports</li>
		          	</ul>
	          	</div>
          	    <p>
          			<img src="{{ URL::asset('images/banners/qualite.jpg') }}" class="banner">
          	    </p>
	          	<div class="card_block">
		          	<h3>Outils numériques</h3>
		          	<ul>
		          		<li>Site internet avec espace client partagé</li>
		          		<li>Reporting mensuel des indicateurs client</li>
		          		<li>Time laps</li>
		          		<li>Boite à plans</li>
		          	</ul>
	          	</div>
          	    <p>
          			<img src="{{ URL::asset('images/banners/outils.jpg') }}" class="banner">
          	    </p>
          	</div>
          </div>
        </div>
      </div>
    </section>

@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop