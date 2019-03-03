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
							<th scope="col">Société</th>
							<th scope="col">Email</th>
							<th scope="col"></th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>IMAA</td>
							<td>contact@imaa.eu</td>
							<td>+33 (0)0 41 40 39 38</td>
							<td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button><button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button></td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>IMAA</td>
							<td>contact@imaa.eu</td>
							<td>+33 (0)0 41 40 39 38</td>
							<td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button><button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button></td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>IMAA</td>
							<td>contact@imaa.eu</td>
							<td>+33 (0)0 41 40 39 38</td>
							<td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button><button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button></td>
						</tr>
						<tr>
							<th scope="row">4</th>
							<td>IMAA</td>
							<td>contact@imaa.eu</td>
							<td>+33 (0)0 41 40 39 38</td>
							<td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button><button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button></td>
						</tr>
						<tr>
							<th scope="row">5</th>
							<td>IMAA</td>
							<td>contact@imaa.eu</td>
							<td>+33 (0)0 41 40 39 38</td>
							<td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button><button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button></td>
						</tr>
						<tr>
							<th scope="row">6</th>
							<td>IMAA</td>
							<td>contact@imaa.eu</td>
							<td>+33 (0)0 41 40 39 38</td>
							<td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button><button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button></td>
						</tr>
						<tr>
							<th scope="row">7</th>
							<td>IMAA</td>
							<td>contact@imaa.eu</td>
							<td>+33 (0)0 41 40 39 38</td>
							<td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button><button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button></td>
						</tr>
						<tr>
							<th scope="row">8</th>
							<td>IMAA</td>
							<td>contact@imaa.eu</td>
							<td>+33 (0)0 41 40 39 38</td>
							<td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button><button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button></td>
						</tr>
						<tr>
							<th scope="row">9</th>
							<td>IMAA</td>
							<td>contact@imaa.eu</td>
							<td>+33 (0)0 41 40 39 38</td>
							<td><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button><button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button></td>
						</tr>
					</tbody>
				</table>
				<nav aria-label="...">
				  <ul class="pagination pagination-lg">
				    <li class="page-item disabled">
				      <a class="page-link" href="#" tabindex="-1">1</a>
				    </li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				  </ul>
				</nav>
			</div>
		</div>
	</div>
@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop