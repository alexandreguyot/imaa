 <!-- On définit la vue principale -->
@extends('layouts.erp.master_admin')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop

@section("content")
	<div class="app admin animated fadeInUp">
		<div class="head"> 
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<h3>Liste des projets</h3>
					</div>
					<div class="col-md-6 col-xs-12">
						<a type="" href="{{ route('erp.get.create-project') }}" class="btn btn-primary pull-right">Créer un projet</a>
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
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($projects as $project)
						<tr>
							<th scope="row">{{ $project->id }}</th>
							<td>{{ $project->name }}</td>
							<td>{{ $project->city }}</td>
							<td>{{ $project->start->format('m/Y') }} - {{ $project->end->format('m/Y') }}</td>
							<td>
								<a type="" href="{{ route('erp.get.edit-project', $project->id) }}" class="btn btn-primary pull-right"><i class="far fa-edit"></i></a>
								<a type="" href="{{ route('erp.delete.delete-project', $project->id) }}" class="btn btn-danger pull-right"><i class="far fa-trash-alt"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop