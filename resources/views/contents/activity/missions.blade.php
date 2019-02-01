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
				<h1 class="animated fadeInDown">Nos missions</h1>
				<ul class="breadcrumb">
					<li><a href="{{ url('/') }}">Accueil</a></li>
					<li><a href="{{ url('activites') }}">Activités</a></li>
					<li>Nos missions</li>
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
          <div class="col-md-12 col-lg-9">
          	<div class="article">
            <div class="card_block">
      			 <h3>Missions d’accompagnement de conception</h3>
             <ul>
              <li>ESQ<br/>Esquisse</li>
              <li>APS<br/>Avant Projet Sommaire</li>
              <li>APD<br/>Avant Projet Définitif</li>
              <li>PRO/DCE<br/>Projet et Dossier de Consultation des Entreprises</li>
             </ul>   
            </div>
            <div class="card_block">
             <h3>Missions de Maitrise d'Oeuvre Exécution</h3>
             <ul>
              <li>ACT<br/>Assistance au Maitre d'Ouvrage pour la passation des Contrats de Travaux</li>
              <li>VISA<br/>Visas des études d'exécution</li>
              <li>DET<br/>Direction de l'Exécution des contrats de Travaux</li>
              <li>AOR<br/>Assistance lors des Opérations de Réception</li>
             </ul>   
            </div> 
            <div class="card_block">
              <h3>Missions Ordonnancement Pilotage Coordination</h3>
            </div>
      			<div class="card_block">
      			 <h3>Assistance à la Maîtrise d’Ouvrage</h3>
          	</div>
          </div>
        </div>
      </div>
    </section>

@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop