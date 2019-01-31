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
				<h1 class="animated fadeInDown">Nos domaines</h1>
				<p class="animated fadeInUp"><small>Intervention dans le cadre de marchés publics et privés</small></p>
				<ul class="breadcrumb">
					<li><a href="{{ url('/') }}">Accueil</a></li>
					<li><a href="{{ url('activites') }}">Activités</a></li>
					<li>Nos domaines</li>
				</ul>
			</div>
		</div>
	</header>
	<section class="section-text">
      <div class="container animated fadeIn delay-1s">
        <div class="row p-y-3">
          <div class="col-lg-3">
		      @include('layouts._sidebar_activity')
          </div>
          <div class="col-md-12	col-lg-9">
          	<div class="article">
	          	<div class="card_block">
          			<h3>Projets de logements</h3>
					<ul>
						<li>Accession</li>
						<li>Social</li>
						<li>Réhabilitation</li>
						<li>Résidences de tourisme / hotellerie / seniors / étudiantes</li>
					</ul>
	          	</div>		
	            <p>
	        		<img src="{{ URL::asset('images/banners/gen.jpg') }}" class="banner">
	            </p>
	          	<div class="card_block">
          		  	<h3>Projets d’ouvrages fonctionnels</h3>
          		    <ul>
          				<li>Bureaux tertiaires</li>
          				<li>Laboratoires</li>
          				<li>Bâtiments d’enseignement</li>
          				<li>Parkings</li>
          				<li>Bâtiments culturels</li>
          				<li>Bâtiments industriels</li>
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