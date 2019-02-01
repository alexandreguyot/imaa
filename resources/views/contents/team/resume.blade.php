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
				<h1 class="animated fadeInDown">Présentation</h1>
				<ul class="breadcrumb">
					<li><a href="{{ url('/') }}">Accueil</a></li>
					<li><a href="{{ url('equipe') }}">L'équipe</a></li>
					<li>Présentation</li>
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
	      			<h3>Guillaume COEURDEROY</h3>
	      			<h4>Tél : 06 21 50 73 78 - <a href="mailto:contact@imaa.eu">contact@imaa.eu</a></h4>
					<ul>
						
						<li>2 ans dans un cabinet de maitrise d’oeuvre OPC en chargé d’opérations sur Paris</li>
						<li>6 ans au sein d’un major en entreprise générale sur Paris</li>
						<li>12 ans au sein d’un major en entreprise générale sur Nantes et Angers</li>
						<li>Dernier poste occupé : Directeur de travaux</li>
						<li>2019 : création de la société IMAA</li>
					</ul>
	          	</div>		
	            <p>
	        		<img src="{{ URL::asset('images/banners/team.jpg') }}" class="banner">
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