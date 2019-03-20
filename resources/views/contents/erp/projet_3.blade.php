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
					<li>
						<a href="projet-1">
							Domaine des Pins
							<span>Noirmoutier - 2016/2017</span>
						</a>
					</li>
					<li>
						<a href="projet-2">
							Î-Link
							<span>Nantes - 2016/2019</span>
						</a>
					</li>
					<li class="active">
						<a href="projet-3">
							Résidence Sociale / LES FONDERIES
							<span>Nantes - 2015/2017</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="mounth animated fadeIn delay-06s">
				<ul class="tabs">
					<li class="tab-link current" data-tab="tab-1"><a href="#">Mars <i class="fas fa-angle-right"></i></a></li>
					<li class="tab-link" data-tab="tab-2"><a href="#">Février <i class="fas fa-angle-right"></i></a></li>
				</ul>
			</div>
			<div class="tabs-container animated fadeIn delay-04s">
				<div id="tab-1" class="tab-content current">
					<div class="dashboard">
						<div class="banner">
							<div id="carouselExampleIndicators-1" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators-1" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators-1" data-slide-to="1"></li>
									<li data-target="#carouselExampleIndicators-1" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="{{ URL::asset('images/erp/projets/demo.jpg') }}">
									</div>
									<div class="carousel-item">
										<img src="{{ URL::asset('images/erp/projets/demo_2.jpg') }}">
									</div>
									<div class="carousel-item">
										<img src="{{ URL::asset('images/erp/projets/demo_3.jpg') }}">
									</div>
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
								<a href="#">
									<div>
										<span>Télécharger le dashboard</span>
										<span>Date : 21/02/2019</span>
									</div>
									<div>
										<i class="fas fa-file-pdf"></i>
									</div>
								</a>
							</div>
							<div class="pdf">
								<a href="#">
									<div>
										<span>Connexion au Timelapse</span>
										<span>Mise à jour : 14/02/2019</span>
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
									Praesent pellentesque turpis quis purus fringilla congue. Sed luctus blandit mi, at elementum justo fringilla at. Vivamus vitae odio mollis, dignissim neque consequat, aliquet nibh. Aenean vel massa augue. Nam accumsan, risus ut dapibus vehicula, elit justo lacinia felis, ut euismod orci magna sed quam. 
								</p>
								<p>
									<strong>Suspendisse a finibus metus. Proin dignissim consequat iaculis. Aliquam et euismod magna, in faucibus tortor.</strong>
								</p>
							</div>
						</div>
					</div>
				</div>	
				<div id="tab-2" class="tab-content">
					<div class="dashboard">
						<div class="banner">
							<div id="carouselExampleIndicators-2" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators-2" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators-2" data-slide-to="1"></li>
									<li data-target="#carouselExampleIndicators-2" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="{{ URL::asset('images/erp/projets/demo.jpg') }}">
									</div>
									<div class="carousel-item">
										<img src="{{ URL::asset('images/erp/projets/demo_2.jpg') }}">
									</div>
									<div class="carousel-item">
										<img src="{{ URL::asset('images/erp/projets/demo_3.jpg') }}">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleIndicators-2" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators-2" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div class="download">
							<div class="pdf">
								<a href="#">
									<div>
										<span>Télécharger le dashboard</span>
										<span>Date : 15/01/2019</span>
									</div>
									<div>
										<i class="fas fa-file-pdf"></i>
									</div>
								</a>
							</div>
							<div class="pdf">
								<a href="#">
									<div>
										<span>Connexion au Timelapse</span>
										<span>Mise à jour : 11/01/2019</span>
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
									<strong>Donec bibendum nisl vitae lacinia viverra. Suspendisse ut odio tellus. Etiam nec tempus enim. Vestibulum pellentesque, odio a pellentesque sagittis, nunc nisi congue quam, eget tempus dui dui non lectus. </strong>
								</p>
								<p>
									Aenean ut viverra eros. Duis tellus velit, bibendum a neque eu, mattis porttitor nunc. Etiam eu est sed nisi tristique porttitor. Nullam sed augue blandit sapien dapibus maximus. Praesent pretium vestibulum imperdiet. Maecenas euismod eget nisl eu dictum. Maecenas tempus luctus sem, ac tempor sapien viverra ac. Mauris mollis ex rhoncus turpis feugiat, sit amet ornare lacus fermentum. Integer eget est ultricies, finibus lacus in, eleifend erat.
								</p>
							</div>
						</div>
					</div>
				</div>	
				<div id="tab-3" class="tab-content">
					<div class="dashboard">
						<div class="banner">
							<div id="carouselExampleIndicators-3" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators-3" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators-3" data-slide-to="1"></li>
									<li data-target="#carouselExampleIndicators-3" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="{{ URL::asset('images/erp/projets/demo.jpg') }}">
									</div>
									<div class="carousel-item">
										<img src="{{ URL::asset('images/erp/projets/demo_2.jpg') }}">
									</div>
									<div class="carousel-item">
										<img src="{{ URL::asset('images/erp/projets/demo_3.jpg') }}">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleIndicators-3" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators-3" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div class="download">
							<div class="pdf">
								<a href="#">
									<div>
										<span>Télécharger le dashboard</span>
										<span>Date : 02/12/2018</span>
									</div>
									<div>
										<i class="fas fa-file-pdf"></i>
									</div>
								</a>
							</div>
							<div class="pdf">
								<a href="#">
									<div>
										<span>Connexion au Timelapse</span>
										<span>Mise à jour : 28/12/2018</span>
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
									Eelit justo lacinia felis, ut euismod orci magna sed quam. 
								</p>
								<p>
									<strong>Suspendisse a finibus metus. Proin dignissim consequat iaculis. Aliquam et euismod magna, in faucibus tortor.</strong>
								</p>
							</div>
						</div>
					</div>
				</div>	
			</div>	
		</div>
	</div>
@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')
@stop