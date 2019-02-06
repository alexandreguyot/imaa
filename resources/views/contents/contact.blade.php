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
           <form class="" action="sendMail.php" id="form_contact" method="POST">
             <div class="row">
               <div class="col-md-6 col-xl-6">
                 <div class="form-group ">
                   <label class="sr-only" for="inputEmail">Nom</label>
                   <input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Nom *" autocomplete="off">
                 </div>
               </div>
               <div class="col-md-6 col-xl-6">
                 <div class="form-group ">
                   <label class="sr-only" for="inputEmail">Prénom</label>
                   <input type="text" name="surname" class="form-control form-control-lg" id="surname" placeholder="Prénom *" autocomplete="off">
                 </div>
               </div>
               <div class="col-md-6 col-xl-6">
                 <div class="form-group ">
                   <label class="sr-only" for="inputEmail">Adresse e-mail</label>
                   <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Adresse e-mail *" autocomplete="off">
                 </div>
               </div>
               <div class="col-md-6 col-xl-6">
                 <div class="form-group ">
                   <label class="sr-only" for="inputEmail">Téléphone</label>
                   <input type="text" name="telephone" class="form-control form-control-lg" id="telephone" placeholder="Téléphone" autocomplete="off">
                 </div>
               </div>
               <div class="col-md-6 col-xl-12">
                 <div class="form-group ">
                   <label class="sr-only" for="inputPassword">Message</label>
                   <textarea name="message" class="form-control form-control-lg" placeholder="Message"></textarea>
                 </div>
               </div>
               <div class="col-md-6 col-xl-3">
                 <div class="form-group">
                   <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
                 </div>
               </div>
             </div>
           </form>
          </div>
        </div>
      </div>
    </section>
@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop