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
		<div class="container-header" style="background-image: url({{ URL::asset('images/bg-contact.jpg') }});">
			<div class="info-center">
				<h1 class="animated fadeInDown">Contactez-nous</h1>
			</div>
		</div>
		@include('layouts._social')
	</header>

	<section class="section-text">
      <div class="container animated fadeIn delay-1s">
        <div class="row p-y-3">
          <div class="col-md-3">
          <div class="sidebar">
		      	<ul>
		      		<li><a href="#">44880 Sautron </a></li>
		      		<li><a href="mailto:contact@imaa.eu">contact@imaa.eu</a></li>
		      	</ul>
	        </div>
          </div>
          <div class="col-md-9">
           <div class="article">
            <p>Merci pour votre message. Nous reviendrons vers vous dans les meilleurs délais.</p>
          </div>
        </div>
      </div>
    </section>
@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop