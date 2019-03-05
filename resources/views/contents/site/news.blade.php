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
        <p class="animated fadeInUp"><a href="#"><small>Retrouvez IMAA sur linkedin</small></a></p>
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
		      		<li><a href="#">07/02/2019</a></li>
		      	</ul>
	        </div>
          </div>
          <div class="col-md-9">
           <div class="article">
            <p>
        		<img src="{{ URL::asset('images/banners/newspaper.jpg') }}" class="banner"> 
            </p>
           	<h3>07/02/2019</h3>
           	<p>Le lancement du site internet d'une entreprise est un moment important comportant sa part d'inconnu sur la façon dont il va être perçu mais surtout actant le démarrage d'une structure que nous souhaitons avant tout à votre écoute et novatrice dans la façon d'aborder la collaboration entre les différents acteurs de la construction. </p>
            <p>IMAA est le fruit d'une réflexion terrain sur ce qui fonctionne mais aussi sur ce qui ne fonctionne plus. Nous souhaitons la mettre en œuvre à vos côtés afin que votre satisfaction soit notre atout pour le futur. Les métiers de la construction évoluent, les acteurs ne sont plus les mêmes, leurs attentes s'aiguisent; nous en sommes tous témoins chaque jour. 
            <p>Il est donc important d'accompagner ces changements et de nous adapter en travaillant mieux mais surtout ensemble. Nous vous laissons appréhender ce qui nous anime au travers de notre EDITO, des différentes rubriques du site et vous laissons découvrir nos services et notre savoir-faire….. </p>
           </div>
          </div>
        </div>
      </div>
    </section>
@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop