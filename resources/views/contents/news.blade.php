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
				<h1 class="animated fadeInDown">Actualites</h1>
        <p class="animated fadeInUp"><a href="https://fr.linkedin.com/in/guillaume-coeurderoy-158aa3a2" target="_Blank"><small>Retrouvez IMAA sur linkedin</small></a></p>
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
		      		<li><a href="#">01/02/2019</a></li>
		      	</ul>
	        </div>
          </div>
          <div class="col-md-9">
           <div class="article">
            <p>
        		<img src="{{ URL::asset('images/banners/newspaper.jpg') }}" class="banner"> 
            </p>
           	<h3>01/02/2019</h3>
           	<p>Lancement du site internet www.imaa.eu. A travers les rubriques du site, découvrez nos services et notre savoir faire.</p>
            <p>Pour plus d'informations, contactez-nous via notre <a href="{{ url('contact') }}">page contact</a></p>
           </div>
          </div>
        </div>
      </div>
    </section>
@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop