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
		      		<li><a href="#">News #01</a></li>
		      		<li><a href="#">News #02</a></li>
		      		<li><a href="#">News #03</a></li>
		      	</ul>
	        </div>
          </div>
          <div class="col-md-9">
           <div class="article">
            <p>
        		<img src="{{ URL::asset('images/banners/newspaper.jpg') }}" class="banner"> 
            </p>
           	<h3>News 01</h3>
           	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non arcu diam. Etiam pellentesque sem et urna commodo, varius tincidunt purus vulputate. Morbi ornare massa non nisi blandit pharetra. Donec id velit ultricies, euismod justo non, cursus purus. Ut sed odio ut justo auctor finibus sit amet non leo. Nam eget turpis quis augue vulputate aliquam non eget metus. Nunc vitae fermentum nisi, eget posuere est.</p>
           </div>
          </div>
        </div>
      </div>
    </section>
@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop