 <!-- On définit la vue principale -->
@extends('layouts.erp.master_admin')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop

@section('content')
	<div class="app admin animated fadeInUp ">
		<form>
			<div class="head">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<h3>Modification d'un compte utilisateur</h3>
						</div>
						<div class="col-md-6 col-xs-12">
							<button type="button" class="btn btn-primary pull-right">Sauvegarder</button>
							<button type="button" class="btn btn-primary pull-right">Quitter sans sauvegarder</button>
						</div>
					</div>
				</div>
			</div>
			<div class="form">
				<div class="container">
					<div class="form-row">
						<div class="form-group col-md-12 col-xs-12">
							<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Type de compte *</label>
							  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
							    <option>...</option>
							    <option value="1" selected>Administrateur</option>
							    <option value="2">Utilisateur</option>
							  </select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputSurname">Nom *</label>
							<input type="text" class="form-control" id="inputSurname" value="Sourisseau">
						</div>
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputName">Prénom *</label>
							<input type="text" class="form-control" id="inputName" value="Guillaume">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputEmail4">Email *</label>
							<input type="email" class="form-control" id="inputEmail4" value="sourisseauguillaume@gmail.com">
						</div>
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputPassword4">Mot de passe *</label>
							<input type="password" class="form-control" id="inputPassword4" value="qs54d1qs65d1">
						</div>
					</div>
				</div>
			</div>
			<div class="form dark">
				<div class="container">
					<div class="form-row">
						<div class="form-group col-md-12">
							<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Clients *</label>
							  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
							    <option selected>...</option>
							    <option value="1">Société 1</option>
							    <option value="2">Société 2</option>
							  </select>
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