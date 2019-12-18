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
					@if ($projects)
						@foreach ($projects as $project)
							<li @if($project->id === $projectDashboard->id) class="active" @endif>
								<a href="{{ route('dashboard', $project->id)}}">
									{{ $project->name }}
									<span>{{ $project->city }} - {{ Carbon\Carbon::parse($project->start)->format('Y')}}/{{ Carbon\Carbon::parse($project->end)->format('Y')}}</span>
								</a>
							</li>
						@endforeach
					@endif
				</ul>
			</div>
			<div class="mounth animated fadeIn delay-06s">
				<ul class="tabs">
					@if (!$projectDashboard->dashboards->isEmpty())
						@foreach ($projectDashboard->dashboards->reverse() as $dashboard)
							@if($dashboard->publish)
								<li class="tab-link" data-tab="tab-{{ $dashboard->id }}"><a href="#">{{ $dashboard->month }} {{ $dashboard->year }}<i class="fas fa-angle-right"></i></a></li>
							@endif
						@endforeach
					@endif
				</ul>
			</div>
			<div class="tabs-container animated fadeIn delay-04s">
				@if (!$projectDashboard->dashboards->isEmpty())
					@foreach ($projectDashboard->dashboards->reverse() as $k => $dashboard)
						@if($dashboard->publish)
							<div id="tab-{{ $dashboard->id }}" class="tab-content">
								<div class="dashboard">
									<div class="banner">
										<div id="dashboard-picture-{{ $k }}" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators">
												@if($dashboard->photos)
													@foreach(explode(';', $dashboard->photos[0]) as $key => $photo)
														@if($photo)
															<li data-target="#dashboard-picture-{{ $k }}" data-slide-to="{{ $key }}" @if ($loop->first) class="active" @endif></li>
														@endif
													@endforeach
												@endif
											</ol>
											<div class="carousel-inner">
												@if($dashboard->photos[0])
													@foreach(explode(';', $dashboard->photos[0]) as $photo)
														@if($photo)
															<div class="carousel-item @if ($loop->first) active @endif" >
																<img src="{{ url("storage/".str_replace(';','',$photo)) }}">
															</div>
														@endif
													@endforeach
												@else
													<div class="carousel-item active">
														<img src="{{ URL::asset('images/erp/projets/demo.jpg') }}">
													</div>
													<div class="carousel-item ">
														<img src="{{ URL::asset('images/erp/projets/demo_2.jpg') }}">
													</div>
													<div class="carousel-item ">
														<img src="{{ URL::asset('images/erp/projets/demo_3.jpg') }}">
													</div>
												@endif
											</div>
											@if($dashboard->photos && count(explode(';', $dashboard->photos[0])) > 1)
												<a class="carousel-control-prev" href="#dashboard-picture-{{ $k }}" role="button" data-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="sr-only">Précédent</span>
												</a>
												<a class="carousel-control-next" href="#dashboard-picture-{{ $k }}" role="button" data-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="sr-only">Suivant</span>
												</a>
											@endif
										</div>
									</div>
									<div class="download">
										@if ($dashboard->id)
											<div class="pdf">
												<div class="">
													<a href="#" class="open-pdf" id="open-pdf-{{ $dashboard->id }}" >
														<div>
															<span>Consulter le dashboard (pdf)</span>
														</div>
														<div>
															<i class="fas fa-file-pdf"></i>
														</div>
													</a> 
													<a href="{{ url("storage/".$dashboard->dashboard) }}" download>
														<div>
															<i class="fas fa-file-download"></i>
														</div>
													</a>
												</div>
											</div>
										@endif
										@if ($projectDashboard->url)
											<div class="timelapse">
												<a href="#" class="open-timelapse" id="open-timelapse-{{ $dashboard->id }}" >
													<div>
														<span>Connexion au Timelapse</span>
													</div>
													<div>
														<i class="fas fa-images"></i>
													</div>
												</a>
											</div>
										@endif
									</div>
									<div class="comment">
										<div class="content" style="white-space: pre-line;">
											<h1>Commentaire de IMAA</h1>
												{!! $dashboard->comment !!}
										</div>
									</div>
								</div>
							</div>
							<div class="overlay overlay-pdf" id="overlay-pdf-{{ $dashboard->id }}">
								<object data="{{ url("storage/".$dashboard->dashboard) }}#view=FitH" type="application/pdf" width="100%" height="100%">
								lie alternatif : <a href="{{ url("storage/".$dashboard->dashboard) }}">dashboard.pdf</a>
								</object>
								<a href="#" class="close-pdf" id="close-pdf-{{ $dashboard->id }}"><i class="fa fa-times" aria-hidden="true"></i></a>
							</div>
							@if ($projectDashboard->url)
								<div class="overlay overlay-timelapse" id="overlay-timelapse-{{ $dashboard->id }}">
									<div class="external">
										<!-- <ul>
											<li>Site : {{ $projectDashboard->url }}</li>
											<li>Identifiant : {{ $projectDashboard->identifiant }}</li>
											<li>Mot de passe : {{ $projectDashboard->password }}</li>
											<li><a href="#" class="close-pdf" id="close-pdf-{{ $dashboard->id }}"><i class="fa fa-times" aria-hidden="true"></i></a></li>
										</ul> -->
										<iframe src="{{ $projectDashboard->url }}"></iframe>
									</div>
									<a href="#" class="close-timelapse" id="close-timelapse-{{ $dashboard->id }}" ><i class="fa fa-times" aria-hidden="true"></i></a>
								</div>
							@endif
							<script>
									$('#open-pdf-' + {{ $dashboard->id }} ).click(function() {
										$('#overlay-pdf-' + {{ $dashboard->id }}).addClass('active');
									});
									$('#close-pdf-' + {{ $dashboard->id }}).click(function() {
										$('#overlay-pdf-' + {{ $dashboard->id }}).removeClass('active');
									});
									$('#overlay-pdf-' + {{ $dashboard->id }}).click(function() {
										$('#overlay-pdf-' + {{ $dashboard->id }}).removeClass('active');
									});
									@if ($projectDashboard->url)
										$('#open-timelapse-' + {{ $dashboard->id }}).click(function() {
											$('#overlay-timelapse-' + {{ $dashboard->id }}).addClass('active');
										});
										$('#close-timelapse-' + {{ $dashboard->id }}).click(function() {
											$('#overlay-timelapse-' + {{ $dashboard->id }}).removeClass('active');
										});
										$('#overlay-timelapse-' + {{ $dashboard->id }}).click(function() {
											$('#overlay-timelapse-' + {{ $dashboard->id }}).removeClass('active');
										});
									@endif
							</script>
						@endif
					@endforeach
				@endif
			</div>	
		</div>
	</div>
@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')


@stop