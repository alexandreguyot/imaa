 <!-- On définit la vue principale -->
@extends('layouts.erp.master_admin')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop

@section('content')
	<div class="app admin animated fadeInUp ">
		<div class="head">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<h3>Liste des clients</h3>
					</div>
					<div class="col-md-6 col-xs-12">
						<button type="button" class="btn btn-primary pull-right">Créer un compte client</button>
					</div>
				</div>
			</div>
		</div>
		<div class="list">
			<div class="container">
				<table class="table">
					<thead class="">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nom</th>
							<th scope="col">Prénom</th>
							<th scope="col">Société</th>
							<th scope="col">Projet(s)</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>COEURDEROY</td>
							<td>Guillaume</td>
							<td>IMAA</td>
							<td>Lorem Ipsum</td>
							<td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button><button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button></td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>SOURISSEAU</td>
							<td>Guillaume</td>
							<td>Biosense</td>
							<td>Lorem Ipsum</td>
							<td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button><button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button></td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>CAMARA</td>
							<td>Maxime</td>
							<td>IMAA</td>
							<td>Lorem Ipsum</td>
							<td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button><button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop