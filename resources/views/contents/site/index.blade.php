<!-- On définit la vue principale -->
@extends('layouts.master')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop

@section('content')
 
@include('layouts._header_home')

	
	<!-- Hero Section
	================================================== --> 
	<header class="">
		<div class="container-header animated fadeIn" style="background-image: url({{ URL::asset('images/bg-header.jpg') }});">
			<div class="home info-center animated fadeIn  delay-1s">
				<h1 class="animated fadeInUp delay-1s">Ingénierie Management d'Affaires Associés</h1>
        <p class="home anim-typewriter animated fadeInDown delay-7s">« Parce que nous souhaitons , tout simplement, vous accompagner autrement »</p>
				<p class="rwd animated fadeInDown delay-7s">« Parce que nous souhaitons , tout simplement, vous accompagner autrement »</p>
        <a class="animated fadeInDown delay-2s btn btn-primay" href="#edito" role="button">L'édito <i class="fas fa-angle-down"></i></a>
			</div>
		</div>
    @include('layouts._social_home')
	</header>

	
  <!-- Edito Section
  ================================================== --> 
    <section id="edito" class="section-edito">
      <div class="container">
        <div class="row ">
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <img src="{{ URL::asset('images/edito_1.png') }}">
                <h4 class="card-title">comprendre</h4>
                <p class="card-text">avec vous la genèse d'un projet, ses enjeux, le faire mûrir dans la simplicité et la transparence.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <img src="{{ URL::asset('images/edito_2.png') }}">
                <h4 class="card-title">oser</h4>
                <p class="card-text">créer avec audace et agilité en associant l'ingénierie et le management collaboratif.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card m-b-0">
              <div class="card-block">
                <img src="{{ URL::asset('images/edito_3.png') }}">
                <h4 class="card-title">partager</h4>
                <p class="card-text">avec l'ensemble des partenaires la passion qui nous anime tous les jours, celle de voir éclore vos projets qui laissent leur empreinte dans l’histoire de nos villes.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <section class="section-edito bg-darkblue">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <img src="{{ URL::asset('images/edito_4.png') }}">
                <h4 class="card-title">maîtriser</h4>
                <p class="card-text">avec la rigueur qui s’impose nos fondamentaux que sont la qualité des ouvrages livrés, le respect des enveloppes financières, le suivi des délais et l'intégration de la sécurité au sein de l'ordonnancement des tâches.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <img src="{{ URL::asset('images/edito_5.png') }}">
                <h4 class="card-title">performer</h4>
                <p class="card-text">avec les femmes et les hommes qui collaborent afin qu'émergent de notre diversité et de nos compétences des solutions optimisées. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card m-b-0">
              <div class="card-block">
                <img src="{{ URL::asset('images/edito_6.png') }}">
                <h4 class="card-title">innover</h4>
                <p class="card-text">dans la façon d'aborder et de réaliser les projets de demain afin que nous puissions tous profiter des outils technologiques à notre disposition. </p>
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