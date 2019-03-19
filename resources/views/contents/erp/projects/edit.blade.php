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
							<h3>Modification d'un projet</h3>
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
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputOperation">Nom de l'opération *</label>
							<input type="text" name="name" class="form-control" id="inputOperation" value="{{ $project->name }}">
						</div>
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputCity">Ville *</label>
							<input type="text" name="city" class="form-control" id="inputCity" value="{{ $project->city }}">
						</div>
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputStart">Date début *</label>
							<input type="date" name="start" class="form-control" id="inputStart" value="{{ $project->start }}">
						</div>
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputEnd">Date fin *</label>
							<input type="date" name="end" class="form-control" id="inputEnd" value="{{ $project->end }}">
						</div>
					</div>
				</div>
			</div>
			<div class="form dark tabs-form">
				<div class="container">
					<div class="form-row">
						<div class="col-md-3">
							<ul class="tabs">
								<li class="tab-link current" data-tab="tab-1"><a href="#">Nouveau <i class="fas fa-plus"></i></a></li>
								@foreach ($dashboards as $dashboard)
									<li class="tab-link" data-tab="tab-{{ $dashboard->id }}"><a href="#">{{ $dashboard->month }} <i class="fas fa-file-alt"></i></a></li>
								@endforeach
							</ul>
						</div>
						<div class="col-md-9">
							<div class="tabs-container animated fadeIn delay-04s">
								<div id="tab-0" class="tab-content current">
									<div class="dashboard">
										<div class="col-md-12">
											<div class="subtitle col-md-12">
												<h4>Création d'un nouveau Dashboard</h4>
											</div>
											<div class="form-group col-md-12">
												<label for="inlineFormInputGroup">Dashboard du mois</label>
												<div class="input-group mb-12">
													<div class="input-group-prepend">
														<div class="input-group-text">Choisir un fichier</div>
													</div>
													<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Fichier .PDF">
												</div>
											</div>
											<div class="form-group col-md-12">
												<label for="inputEnd">Photo(s) du mois *</label>
												<div class="input-group mb-12">
													<div class="input-group-prepend">
														<div class="input-group-text">Choisir un fichier</div>
													</div>
													<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Fichier .JPG / .PNG">
												</div>
											</div>
											<div class="form-group col-md-12">
												<label for="commentaryMounth">Commentaire du mois</label>
											    <textarea class="form-control" id="commentaryMounth" rows="5">Praesent pellentesque turpis quis purus fringilla congue. Sed luctus blandit mi, at elementum justo fringilla at. Vivamus vitae odio mollis, dignissim neque consequat, aliquet nibh. Aenean vel massa augue. Nam accumsan, risus ut dapibus vehicula, elit justo lacinia felis, ut euismod orci magna sed quam.</textarea>
											</div>
										</div>
									</div>
								</div>
								@foreach ($dashboards as $dashboard)	
									<div id="tab-{{ $dashboard->id }}" class="tab-content">
										<div class="dashboard">
											<div class="col-md-12">
												<div class="subtitle col-md-12">
													<h4>Historique du mois de <strong>{{ $dashboard->month }}</strong></h4>
												</div>
												<div class="form-group col-md-12">
													<label for="publish">Publier</label>
													<input type="checkbox" class="form-control" id="publish" name="publish_{{ $dashboard->id }}" value="{{ $dashboard->publish }}">
												</div>
												<div class="form-group col-md-12">
													<label for="inlineFormInputGroup">Dashboard du mois</label>
													<div class="input-group mb-12">
														<div class="input-group-prepend">
															<div class="input-group-text">Choisir un fichier</div>
														</div>
														<input type="file" name="dashboard_{{ $dashboard->id }}" class="form-control" id="inlineFormInputGroup" placeholder="Fichier .PDF">
													</div>
												</div>
												<div class="form-group col-md-12">
													<label for="inputEnd">Photo(s) du mois *</label>
													<div class="input-group mb-12">
														<div class="input-group-prepend">
															<div class="input-group-text">Choisir un fichier</div>
														</div>
														<input type="file" name="photos_{{ $dashboard->id }}" class="form-control" id="inlineFormInputGroup" placeholder="Fichier .JPG / .PNG">
													</div>
												</div>
												<div class="form-group col-md-12">
													<label for="commentaryMounth">Commentaire du mois</label>
													<textarea class="form-control" id="commentaryMounth" name="comment_{{ $dashboard->id }}" rows="5">{{ $dashboard->comment }}</textarea>
												</div>
											</div>
										</div>
									</div>	
								@endforeach
							</div>
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