 <!-- On définit la vue principale -->
@extends('layouts.erp.master_admin')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop

@section('content')
	<div class="app admin animated fadeIn ">
		<form action="{{ route('erp.put.update-user', $user->id )}}" method="POST" enctype="multipart/form-data">
			<input name="_method" type="hidden" value="PUT">
			@csrf
			<div class="head">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<h3>Modification d'un compte utilisateur</h3>
						</div>
						<div class="col-md-6 col-xs-12 btnHead">
							<button type="submit" class="btn btn-primary pull-right">Sauvegarder</button>
							<button type="button" onclick="goBack()" class="btn btn-primary pull-right">Quitter sans sauvegarder</button>
						</div>
					</div>
				</div>
			</div>
			@if (Auth::user()->isAdmin())
				<div class="form">
					<div class="container">
						<div class="form-row">
							<div class="form-group col-md-12 col-xs-12">
								<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Liste des Projets</label>
								<select id="list_projects" name="list_projects[]" multiple="multiple" class="form-control" id="inlineFormCustomSelectPref">
									@foreach ($projects as $project)
										<option value="{{ $project->id }}" {{ in_array($project->id, $list_projects) ? 'selected' : ''}} >{{ $project->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
				</div>
			@endif
			<div class="form">
				<div class="container">
					<div class="form-row">
						@if (Auth::user()->isAdmin())
							<div class="form-group col-md-6 col-xs-12">
								<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Type de compte *</label>
								  <select class="custom-select my-1 mr-sm-2" name="role" id="inlineFormCustomSelectPref" required>
									<option value="Administrateur" {{ $user->isAdmin() ? 'selected' : '' }}>Administrateur</option>
									<option value="Utilisateur" {{ $user->isAdmin() ? '' : 'selected' }}>Utilisateur</option>
								  </select>
							</div>
						@endif
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputEntreprise">Entreprise</label>
							<input type="text" name="entreprise" value="{{ $user->entreprise }}" class="form-control" id="inputEntreprise" placeholder="">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputSurname">Nom *</label>
							<input type="text" name="lastname" value="{{ $user->lastname }}" class="form-control" id="inputSurname" required>
						</div>
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputName">Prénom *</label>
							<input type="text" name="firstname" value="{{ $user->firstname }}" class="form-control" id="inputName" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputEmail4">Email *</label>
							<input type="email" name="email"  value="{{ $user->email }}" class="form-control" id="inputEmail4" required>
						</div>
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputPassword4">Mot de passe *</label>
							<div class="input-group" id="show_hide_password">
								<input type="password" name="password" class="form-control" id="inputPassword4" placeholder="" required>
								<div class="input-group-addon">
							        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
							    </div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-xs-12">
								<label for="inputTel">Téléphone</label>
								<input type="text" name="telephone"  value="{{ $user->telephone }}" class="form-control" id="inputTel" placeholder="" required>
						</div>
						<div class="form-group col-md-6 col-xs-12">
							@if($user->logo)
								<div class="form-group col-md-4">
									<img src="{{ $user->logo ? url('storage/'.$user->logo) : URL::asset('images/user.png') }}" height="60" width="60" alt="Avatar" class="img-circle">
								</div>
								<div class="form-group col-md-8">
									<label for="inputLogo">Logo</label>
									<input type="file" name="logo" class="form-control" id="inputLogo" placeholder="">
								</div>
							@else
								<label for="inputLogo">Logo</label>
								<input type="file" name="logo" class="form-control" id="inputLogo" placeholder="">
							@endif
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