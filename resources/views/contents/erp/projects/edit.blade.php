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
							<button type="button" class="btn btn-primary pull-right">Quitter sans sauvegarder</button>
						</div>
					</div>
				</div>
			</div>
			<div class="form">
				<div class="container">
					<div class="form-row">
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputOperation">Nom de l'opération *</label>
							<input type="text" class="form-control" id="inputOperation" value="Domaine des pins">
						</div>
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputCity">Ville *</label>
							<input type="text" class="form-control" id="inputCity" value="Nantes">
						</div>
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputStart">Date début *</label>
							<input type="date" class="form-control" id="inputStart" value="2018-12-01">
						</div>
						<div class="form-group col-md-3 col-xs-12">
							<label for="inputEnd">Date fin *</label>
							<input type="date" class="form-control" id="inputEnd" value="2020-05-31">
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
								<li class="tab-link" data-tab="tab-2"><a href="#">Février <i class="fas fa-file-alt"></i></a></li>
								<li class="tab-link" data-tab="tab-3"><a href="#">Janvier<i class="fas fa-file-alt"></i></a></li>
								<li class="tab-link" data-tab="tab-4"><a href="#">Décembre<i class="fas fa-file-alt"></i></a></li>
							</ul>
						</div>
						<div class="col-md-9">
							<div class="tabs-container animated fadeIn delay-04s">
								<div id="tab-1" class="tab-content current">
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
								<div id="tab-2" class="tab-content">
									<div class="dashboard">
										<div class="col-md-12">
											<div class="subtitle col-md-12">
												<h4>Historique du mois de <strong>Février</strong></h4>
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
											    <textarea class="form-control" id="commentaryMounth" rows="5">Donec bibendum nisl vitae lacinia viverra. Suspendisse ut odio tellus. Etiam nec tempus enim. Vestibulum pellentesque, odio a pellentesque sagittis, nunc nisi congue quam, eget tempus dui dui non lectus.</textarea>
											</div>
										</div>
									</div>
								</div>	
								<div id="tab-3" class="tab-content">
									<div class="dashboard">
										<div class="col-md-12">
											<div class="subtitle col-md-12">
												<h4>Historique du mois de <strong>Janvier</strong></h4>
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
											    <textarea class="form-control" id="commentaryMounth" rows="5">Suspendisse a finibus metus. Proin dignissim consequat iaculis. Aliquam et euismod magna, in faucibus tortor. </textarea>
											</div>
										</div>
									</div>
								</div>	
								<div id="tab-4" class="tab-content">
									<div class="dashboard">
										<div class="col-md-12">
											<div class="subtitle col-md-12">
												<h4>Historique du mois de <strong>Décembre</strong></h4>
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
											    <textarea class="form-control" id="commentaryMounth" rows="5">Suspendisse a finibus metus. Proin dignissim consequat iaculis. Aliquam et euismod magna, in faucibus tortor. </textarea>
											</div>
										</div>
									</div>
								</div>	
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