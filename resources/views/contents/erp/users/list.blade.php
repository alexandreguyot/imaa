 <!-- On définit la vue principale -->
@extends('layouts.erp.master_admin')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@endsection

@section('content')
	<div class="app admin animated fadeIn ">
		<div class="head">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<h3>Liste des utilisateurs</h3>
					</div>
					<div class="col-md-6 col-xs-12 btnHead">
						<a type="" href="{{ route('erp.get.create-user') }}" class="btn btn-primary pull-right">Créer un compte utilisateur</a>
					</div>
				</div>
			</div>
		</div>
		<div class="list">
			<div class="container">
				<table class="table table_projects">
					<thead class="">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Statut</th>
							<th scope="col">Nom</th>
							<th scope="col">Prénom</th>
							<th scope="col">Projets</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
							<tr>
								<td scope="row">{{ $user->id }}</td>
								<td>{{ $user->role }}</td>
								<td>{{ $user->lastname }}</td>
								<td>{{ $user->firstname }}</td>
								@if($user->projects())
									<td>{{ $user->renderProject() }}</td>
								@else

								@endif
								<td>
									<a class="btn btn-secondary" href="{{ route('erp.get.edit-user', $user->id)}}">
										<i class="far fa-edit"></i>
									</a>
									<form action="{{ route('erp.delete.delete-user', $user->id)}}" method="POST">
										@csrf
										@method('DELETE')
										<button type="submit" onclick="return confirm('Etes vous sur de vouloir supprimer cette utilisateur ?')" class="btn btn-danger">
												<i class="fas fa-trash-alt"></i>
										</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@endsection