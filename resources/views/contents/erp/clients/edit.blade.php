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
							<h3>Modification d'un client</h3>
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
						<div class="form-group col-md-12">
							<label for="inputCompany">Société *</label>
							<input type="text" class="form-control" id="inputCompany" value="IMAA">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputEmail">E-mail</label>
							<input type="text" class="form-control" id="inputEmail" value="contact@imaa.eu">
						</div>
						<div class="form-group col-md-6 col-xs-12">
							<label for="inputPhone">Téléphone</label>
							<input type="text" class="form-control" id="inputPhone" value="+33 (0)2 41 40 39 38">
						</div>
					</div>
				</div>
			</div>
			<div class="form dark">
				<div class="container">
					<div class="form-row">
						<div class="form-group col-md-12">
							<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Projets *</label>
							  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
							    <option selected>...</option>
							    <option value="1">Projet 1</option>
							    <option value="2">Projet 2</option>
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