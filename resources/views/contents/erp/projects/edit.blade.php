 <!-- On définit la vue principale -->
@extends('layouts.erp.master_admin')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop

@section('content')
	<div class="app admin animated fadeIn ">
		<form action="{{ route('erp.put.update-project', $project->id ) }}" method="POST" enctype="multipart/form-data">
			<input name="_method" type="hidden" value="PUT">
			@csrf
			<div class="head">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<h3>Modification d'un projet</h3>
						</div>
						<div class="col-md-6 col-xs-12 btnHead">
							<button type="submit" class="btn btn-primary pull-right">Sauvegarder</button>
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
							<input type="date" name="start" class="form-control" id="inputStart" value="{{ $project->start }}" disabled>
						</div>
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputEnd">Date fin *</label>
							<input type="date" name="end" class="form-control" id="inputEnd" min="{{ $project->end }}" value="{{ $project->end }}">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputUrl">URL du timelapse</label>
							<input type="text" name="url" class="form-control" id="inputUrl" value="{{ $project->url }}">
						</div>
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputIdentifiant">Identifiant</label>
							<input type="text" name="identifiant" class="form-control" id="inputIdentifiant" value="{{ $project->identifiant }}">
						</div>
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputPassword">Mot de passe</label>
							<input type="text" name="password" class="form-control" id="inputPassword" value="{{ $project->password }}">
						</div>
						<div class="form-group col-md-3 col-xs-12">
								<label for="inputTermine">Cloturer</label>
								<input type="checkbox" name="finish" class="form-control input-checkbox" id="inputTermine" {{ $project->finish ? 'checked': '' }}>
							</div>
					</div>
				</div>
			</div>
			<div class="form dark tabs-form">
				<div class="container">
					<div class="form-row">
						<div class="col-md-3">
							<ul class="tabs">
								@foreach ($dashboards as $dashboard)
									<li class="tab-link" data-tab="tab-{{ $dashboard->id }}"><a href="#">{{ $dashboard->month }} {{ $dashboard->year }} <i class="fas fa-file-alt"></i></a></li>
								@endforeach
							</ul>
						</div>
						<div class="col-md-9">
							<div class="tabs-container animated fadeIn delay-04s">
								@foreach ($dashboards as $dashboard)
									<div id="tab-{{ $dashboard->id }}" class="tab-content">
										<input type="hidden" class="form-control" id="month" name="dashboard[{{$dashboard->id}}][month]" value="{{ $dashboard->month }}">
										<input type="hidden" class="form-control" id="year" name="dashboard[{{$dashboard->id}}][year]" value="{{ $dashboard->year }}">
										<div class="dashboard">
											<div class="col-md-12">
												<div class="subtitle col-md-12">
													<h4>Historique du mois de <strong>{{ $dashboard->month }} {{ $dashboard->year }}</strong></h4>
												</div>
												<div class="form-group col-md-12">
													<label for="publish">Publier</label>
													<input type="checkbox" class="form-control input-checkbox" id="publish" name="dashboard[{{$dashboard->id}}][publish]" {{ $dashboard->publish ? 'checked' : '' }}>
												</div>
												<div class="form-group col-md-12">
													<label for="inlineFormInputGroup">Dashboard du mois</label>
													<div class="input-group mb-12">
														<div class="input-group-prepend">
															<div class="input-group-text">Choisir un fichier</div>
														</div>
														<input type="file" name="dashboard[{{$dashboard->id}}][dashboard]" class="form-control" id="inlineFormInputGroup" accept="application/pdf">
													</div>
												</div>
												<div class="form-group col-md-12">
													<label for="inputEnd">Photo(s) du mois *</label>
													<div class="input-group mb-12">
														<div class="input-group-prepend">
															<div class="input-group-text">Choisir un fichier</div>
														</div>
														<input type="file" multiple="multiple" name="dashboard[{{$dashboard->id}}][photos][]" data-id="{{$dashboard->id}}" class="form-control" id="addPhotos_{{ $dashboard->id }}" 
														onchange="test(event)" accept="image/*">
													</div>
													<div id="preview_{{ $dashboard->id }}">
														
													</div>
												</div>
												<div class="form-group col-md-12">
													<label for="commentaryMounth">Commentaire du mois</label>
													<textarea class="form-control" id="commentaryMounth_{{$dashboard->id}}" name="dashboard[{{$dashboard->id}}][comment]" rows="15">{{ $dashboard->comment }}</textarea>
													<script>
														tinymce.init({
															selector:'#commentaryMounth_'+{{$dashboard->id}},
															menubar: false,
															toolbar: 'undo redo | formatselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
															toolbar_items_size: 'small',
														});
													</script>
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