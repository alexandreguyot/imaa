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
						<h3>Liste des projets</h3>
					</div>
					<div class="col-md-6 col-xs-12">
						<button type="button" class="btn btn-primary pull-right">Créer un projet</button>
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
							<th scope="col">Nom du projet</th>
							<th scope="col">Ville</th>
							<th scope="col">Année(s)</th>
							<th scope="col">Client(s)</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Domaine des pins</td>
							<td>Noirmoutiers</td>
							<td>2016/2017</td>
							<td>Lorem Ipsum</td>
							<td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button><button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button></td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Î-LINK</td>
							<td>Nantes</td>
							<td>2016/2019</td>
							<td>Lorem Ipsum</td>
							<td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button><button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button></td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Résidence sociale les Fonderies</td>
							<td>Nantes</td>
							<td>2015/2017</td>
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