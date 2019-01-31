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
				<h1 class="animated fadeInDown">Secteur géograghique</h1>
				<p class="animated fadeInUp"><small>Bretagne / Pays de la Loire / Aquitaine / Paris</small></p>
				<ul class="breadcrumb">
					<li><a href="{{ url('/') }}">Accueil</a></li>
					<li><a href="{{ url('activites') }}">Activités</a></li>
					<li>Secteur géograghique</li>
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
	          	<iframe src="https://www.google.com/maps/d/embed?mid=1vHSZ0PjeJ04csAQ4XcUXhEWdkE6OSACI" width="100%" height="500"></iframe>
          	</div>
          </div>
        </div> 
      </div>
    </section>

@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop