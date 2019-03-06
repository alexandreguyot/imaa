 <!-- On définit la vue principale -->
@extends('layouts.erp.master_admin')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop

@section('content')
	<div class="app admin animated fadeInUp ">
		<form action="{{ route('erp.post.store-user') }}">
			@csrf
			<div class="head">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<h3>Création d'un compte utilisateur</h3>
						</div>
						<div class="col-md-6 col-xs-12">
							<button type="submit" class="btn btn-primary pull-right">Sauvegarder</button>
							<button type="button" class="btn btn-primary pull-right" onclick="goBack()">Quitter sans sauvegarder</button>
						</div>
					</div>
				</div>
			</div>
			<div class="form">
				<div class="container">
					<div class="form-row">
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputSurname">Nom *</label>
							<input type="text" name="lastname" class="form-control" id="inputSurname" placeholder="" required>
						</div>
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputName">Prénom *</label>
							<input type="text" name="firstname" class="form-control" id="inputName" placeholder="" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputEmail">Email *</label>
							<input type="email" name="email" class="form-control" id="inputEmail" placeholder="" required>
						</div>
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputPassword">Mot de passe *</label>
							<input type="password" name="password" class="form-control" id="inputPassword" placeholder="" required>
						</div>
					</div>
					<div class="form-row">
							<div class="form-group col-md-6 col-xs-12">
								<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Type de compte *</label>
									<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
										<option value="Administrateur">Administrateur</option>
										<option value="Utilisateur">Utilisateur</option>
									</select>
							</div>
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputTel">Téléphone</label>
							<input type="text" name="telephone" class="form-control" id="inputTel" placeholder="" required>
						</div>
					</div>
				</div>
			</div>
			<div class="form dark">
				<div class="container">
					<div class="form-row">
						<div class="form-group col-md-12">
							<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Clients *</label>
							  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" required>
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