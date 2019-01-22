<!-- On définit la vue principale -->
@extends('layouts.master')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop
 
@section('content')

	
	<!-- Hero Section
	================================================== --> 
	<header>
		<div class="container-header" style="background-image: url({{ URL::asset('images/bg-contact.jpg') }});">
			<div class="info-center">
				<h1>accueil</h1>
			</div>
		</div>
	</header>


	<section class="section-signup">
	  <div class="container">
	    <h3 class="text-xs-center m-b-3">Connectez-vous à l'espace IMAA</h3>
	    <form>
	      <div class="row">
	        <div class="col-md-6 col-xl-4">
	          <div class="form-group has-icon-left form-control-email">
	            <label class="sr-only" for="inputEmail">Adresse e-mail</label>
	            <input type="email" class="form-control form-control-lg" id="inputEmail" placeholder="Adresse e-mail" autocomplete="off">
	          </div>
	        </div>
	        <div class="col-md-6 col-xl-4">
	          <div class="form-group has-icon-left form-control-password">
	            <label class="sr-only" for="inputPassword">Mot de passe</label>
	            <input type="password" class="form-control form-control-lg" id="inputPassword" placeholder="Mot de passe" autocomplete="off">
	          </div>
	        </div>
	        <div class="col-md-6 col-xl-3">
	          <div class="form-group">
	            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
	          </div>
	        </div>
	      </div>
	    </form>
	  </div>
	</section>
@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop