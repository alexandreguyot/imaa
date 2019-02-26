 <!-- On définit la vue principale -->
@extends('layouts.erp.master')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop

@section('content')
	<div class="app animated fadeInUp ">
		<div class="projects">
			<div class="projectList">
				<ul>
					<li class="active">
						<a href="#">
							Domaine des Pins
							<span>Noirmoutier - 2016/2017</span>
						</a>
					</li>
					<li>
						<a href="#">
							Î-Link
							<span>Nantes - 2016/2019</span>
						</a>
					</li>
					<li>
						<a href="#">
							Résidence Sociale / LES FONDERIES
							<span>Nantes - 2015/2017</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="mounth">
				<ul>
					<li class="active"><a href="#">Février <i class="fas fa-angle-right"></i></a></li>
					<li><a href="#">Janvier<i class="fas fa-angle-right"></i></a></li>
					<li><a href="#">Décembre<i class="fas fa-angle-right"></i></a></li>
				</ul>
			</div>
			<div class="dashboard">
				<div class="banner">
					<img src="{{ URL::asset('images/erp/projets/demo.jpg') }}">
				</div>
				<div class="download">
					<div class="pdf">
						<a href="#">Consulter le dashboard</a>
					</div>
					<div class="pdf">
						<a href="#">Connexion au Timelapse</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop