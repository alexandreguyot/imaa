 <!-- On définit la vue principale -->
@extends('layouts.erp.master_customer')
@section('description')
    <!-- Meta description de la page -->
    <title>IMAA - Ingénierie Management d'Affaires Associés - Accueil</title>
    <meta name="description" content="">
@stop

@section('content')

	<div class="app animated fadeInUp ">
		<div class="projects">
			<div class="projectList animated fadeIn delay-02s">
				<ul>
					@foreach ($projects as $project)
						<li>
							<a href="{{ route('dashboard', $project->id)}}">
								{{ $project->name }}
								<span>{{ $project->city }} - {{ Carbon\Carbon::parse($project->start)->format('Y')}}/{{ Carbon\Carbon::parse($project->end)->format('Y')}}</span>
							</a>
						</li>
					@endforeach
				</ul>
			</div>
			<div class="mounth animated fadeIn delay-06s">
				<ul class="tabs">
					@if (!$projectDashboard->dashboards->isEmpty())
						@foreach ($projectDashboard->dashboards as $dashboard)
							<li class="tab-link" data-tab="tab-{{ $dashboard->id }}"><a href="#">{{ $dashboard->month }} {{ $dashboard->year }}<i class="fas fa-angle-right"></i></a></li>
						@endforeach
					@endif
				</ul>
			</div>
			<div class="tabs-container animated fadeIn delay-04s">
				@if (!$projectDashboard->dashboards->isEmpty())
					@foreach ($projectDashboard->dashboards as $dashboard)
						<div id="tab-{{ $dashboard->id }}" class="tab-content current">
							<div class="dashboard">
								<div class="banner">
									<div id="carouselExampleIndicators-1" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators">
											<li data-target="#carouselExampleIndicators-1" data-slide-to="0" class="active"></li>
											<li data-target="#carouselExampleIndicators-1" data-slide-to="1"></li>
											<li data-target="#carouselExampleIndicators-1" data-slide-to="2"></li>
										</ol>
										<div class="carousel-inner">
											@foreach($dashboard->photos as $photo)
												<div class="carousel-item active">
													<img src="{{ URL::asset(str_replace(';', '', Storage::url("projects/{$photo}"))) }}">
												</div>
											@endforeach
										</div>
										<a class="carousel-control-prev" href="#carouselExampleIndicators-1" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carouselExampleIndicators-1" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
								<div class="download">
									<div class="pdf">
										<a href="#" class="open-pdf" data-id="{{ $dashboard->id }}">
											<div>
												<span>Consulter le dashboard (pdf)</span>
											</div>
											<div>
												<i class="fas fa-file-pdf"></i>
											</div>
										</a>
									</div>
									<div class="pdf">
										<a href="#" class="open-timelapse">
											<div>
												<span>Connexion au Timelapse</span>
											</div>
											<div>
												<i class="fas fa-images"></i>
											</div>
										</a>
									</div>
								</div>
								<div class="comment">
									<div class="content">
										<h1>Commentaire de IMAA</h1>
										<p>
											{{ $dashboard->comment }}	
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="overlay overlay-pdf">
							<object data="{{ URL::asset('images/erp/projets/test.pdf') }}" type="application/pdf" width="100%" height="100%">
							  lie alternatif : <a href="{{ URL::asset('images/erp/projets/test.pdf') }}">dashboard.pdf</a>
							</object>
							<a href="#" class="close-pdf"><i class="fa fa-times" aria-hidden="true"></i></a>
						</div>
						<div class="overlay overlay-timelapse">
							<div class="external">
								<ul>
									<li>Identifiant : demo@demo.fr</li>
									<li>Mot de passe : demo</li>
								</ul>
								<iframe src="https://www.imaa.eu/accueil"></iframe>
							</div>
							<a href="#" class="close-timelapse"><i class="fa fa-times" aria-hidden="true"></i></a>
						</div>
					@endforeach
				@endif
			</div>	
		</div>
	</div>
@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')

@stop