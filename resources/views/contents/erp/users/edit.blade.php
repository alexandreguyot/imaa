 <!-- On définit la vue principale -->
@extends('layouts.erp.master_admin')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop

@section('content')
	<div class="app admin animated fadeInUp ">
		<form >
			<div class="head">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<h3>Modification d'un compte utilisateur</h3>
						</div>
						<div class="col-md-6 col-xs-12">
							<button type="button" class="btn btn-primary pull-right">Sauvegarder</button>
							<button type="button" onclick="goBack()" class="btn btn-primary pull-right">Quitter sans sauvegarder</button>
						</div>
					</div>
				</div>
			</div>
			<div class="form">
				<div class="container">
					<div class="form-row">
						<div class="form-group col-md-12 col-xs-12">
							<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Projets *</label>
							<select id="list_projects" name="list_projects[]" multiple="multiple" class="form-control" id="inlineFormCustomSelectPref" required>
								@foreach ($projects as $project)
									<option value="{{ $project->id }}" {{ $user->hasProject($project->id) ? 'selected' : ''}} >{{ $project->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="form">
				<div class="container">
					<div class="form-row">
						<div class="form-group col-md-6 col-xs-12">
							<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Type de compte *</label>
							  <select class="custom-select my-1 mr-sm-2" name="role" id="inlineFormCustomSelectPref">
							    <option value="Administrateur" {{ $user->isAdmin() ? 'selected' : '' }}>Administrateur</option>
							    <option value="Utilisateur" {{ $user->isAdmin() ? '' : 'selected' }}>Utilisateur</option>
							  </select>
						</div>
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputEntreprise">Entreprise</label>
							<input type="text" name="entreprise" value="{{ $user->entreprise }}" class="form-control" id="inputEntreprise" placeholder="" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputSurname">Nom *</label>
							<input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control" id="inputSurname">
						</div>
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputName">Prénom *</label>
							<input type="text" name="firstname" value="{{ $user->firstname }}" class="form-control" id="inputName">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputEmail4">Email *</label>
							<input type="email" name="email"  value="{{ $user->email }}" class="form-control" id="inputEmail4">
						</div>
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputPassword4">Mot de passe *</label>
							<input type="password" name="password"  value="{{ $user->password }}" class="form-control" id="inputPassword4">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-xs-12">
								<label for="inputTel">Téléphone</label>
								<input type="text" name="telephone"  value="{{ $user->telephone }}" class="form-control" id="inputTel" placeholder="" required>
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