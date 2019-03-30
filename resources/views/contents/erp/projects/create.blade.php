 <!-- On définit la vue principale -->
@extends('layouts.erp.master_admin')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop

@section('content')
	<div class="app admin animated fadeIn ">
		<form action="{{ route('erp.post.store-project') }}" method="POST">
			@csrf
			<div class="head">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<h3>Création d'un projet</h3>
						</div>
						<div class="col-md-6 col-xs-12">
							<button type="submit" class="btn btn-primary pull-right">Sauvegarder</button>
							<button type="button" onclick="goBack()" class="btn btn-primary pull-right">Quitter sans sauvegarder</button>
						</div>
					</div>
				</div>
			</div>
			<div class="form">
				<div class="container">
					<div class="form-row">
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputOperation">Nom de l'opération *</label>
							<input type="text" name="name" class="form-control" id="inputOperation" value="">
						</div>
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputCity">Ville *</label>
							<input type="text" name="city" class="form-control" id="inputCity" value="">
						</div>
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputStart">Date début *</label>
							<input type="date" name="start" class="form-control" id="inputStart" value="">
						</div>
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputEnd">Date fin *</label>
							<input type="date" name="end" class="form-control" id="inputEnd" value="">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-4 col-xs-12">
							<label for="inputUrl">URL du timelapse</label>
							<input type="text" name="url" class="form-control" id="inputUrl" value="">
						</div>
						<div class="form-group col-md-4 col-xs-12">
							<label for="inputIdentifiant">Identifiant</label>
							<input type="text" name="identifiant" class="form-control" id="inputIdentifiant" value="">
						</div>
						<div class="form-group col-md-4 col-xs-12">
							<label for="inputPassword">Password</label>
							<input type="text" name="password" class="form-control" id="inputPassword" value="">
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop