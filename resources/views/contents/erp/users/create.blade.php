 <!-- On définit la vue principale -->
@extends('layouts.erp.master_admin')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop

@section('content')
	<div class="app admin animated fadeIn ">
		<form action="{{ route('erp.post.store-user') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="head">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<h3>Création d'un compte utilisateur</h3>
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
						<div class="form-group col-md-12 col-xs-12">
							<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Ajouter un ou plusieurs projet(s)</label>
							  <select id="list_projects" name="list_projects[]" multiple="multiple" class="form-control" id="inlineFormCustomSelectPref">
								@foreach ($projects as $project)
									<option value="{{ $project->id }}">{{ $project->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="form ">
				<div class="container">
					<div class="form-row">
						<div class="form-group col-md-6 col-xs-12">
							<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Type de compte *</label>
								<select class="custom-select my-1 mr-sm-2" name="role" id="inlineFormCustomSelectPref" required>
									<option value="Administrateur">Administrateur</option>
									<option value="Utilisateur">Utilisateur</option>
								</select>
						</div>
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputEntreprise">Entreprise</label>
							<input type="text" name="entreprise" class="form-control" id="inputEntreprise" placeholder="">
							</div>
					</div>
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
							<div class="input-group" id="show_hide_password">
								<input type="password" name="password" class="form-control" id="inputPassword" placeholder="" required>
								<div class="input-group-addon">
							        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
							    </div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-xs-12">
								<label for="inputTel">Téléphone</label>
								<input type="text" name="telephone" class="form-control" id="inputTel" placeholder="" >
						</div>
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputLogo">Logo</label>
							<input type="file" name="logo" class="form-control" id="inputLogo" placeholder="">
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