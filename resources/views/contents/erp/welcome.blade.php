 <!-- On définit la vue principale -->
@extends('layouts.erp.master_home')
@section('description')
    <!-- Meta description de la page -->
    <title>Espace IMAA</title>
    <meta name="description" content="">
@stop

@section('content')
	<div class="app home">
		<div class="logoNav">
			<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 918 532" style="enable-background:new 0 0 918 532;" xml:space="preserve" width="920px" height="532px">
				<style type="text/css">
					.st0{opacity:0.2;fill:none;stroke:#000000;stroke-width:2;stroke-miterlimit:10;}
					.st1{fill:#DDDDDB;}
					.st2{font-family:'Open Sans';}
					.st3{font-size:36px;}
					.st4{font-family:'Open Sans';font-weight: 300;}
					.st5{font-size:24px;}
					.st6{fill:#26C6DA;}
					.st7{fill:#37525B;}
				</style>
				<polygon class="st0" points="242,22.9 242,294.6 598.4,424.3 598.4,152.6 "/>
				<a href="{{ route('dashboard') }}">
					<g>
						<g>
							<text transform="matrix(1 0 0 1 24.4986 136.8281)"><tspan x="0" y="0" class="st1 st2 st3">Dashboard</tspan><tspan x="68" y="28.8" class="st1 st4 st5">Vos projets</tspan></text>
						</g>
						<polygon class="st6" points="456.4,8 456.4,135.6 288.9,196.6 288.9,68.9 	"/>
					</g>
				</a>
				<a href="#" class="" id="open-pdf" target="">
					<g>
						<g>
							<text transform="matrix(1 0 0 1 8.9596 296.8281)"><tspan x="0" y="0" class="st1 st2 st3">Boîte à plan</tspan><tspan x="80" y="28.8" class="st1 st4 st5">Nouveauté</tspan></text>
						</g>
						<polygon class="st6" points="456.4,169.6 456.4,297.2 288.9,358.2 288.9,230.5 	"/>
					</g>
				</a>
				<a href="{{ route('site.edit-user') }}">
					<g>
						<polygon class="st7" points="485.6,169.6 485.6,297.2 653,358.2 653,230.5 	"/>
						<g>
							<text transform="matrix(1 0 0 1 682.4323 294.8281)"><tspan x="0" y="0" class="st1 st2 st3">Mon compte</tspan><tspan x="0" y="28.8" class="st1 st4 st5">Vos coordonnées</tspan></text>
						</g>
					</g>
				</a>
				<a href="{{ route('logout')}}">
					<g>
						<polygon class="st7" points="485.6,330.5 485.6,458.1 653,519 653,391.4 	"/>
						<g>
							<text transform="matrix(1 0 0 1 682.4323 454.8281)"><tspan x="0" y="0" class="st1 st2 st3">Déconnexion</tspan><tspan x="0" y="28.8" class="st1 st4 st5">A bientôt</tspan></text>
						</g>
					</g>
				</a>
			</svg>
			<ul>
				<li><a href="{{ route('dashboard') }}">Dashboard</a></li>
				<li class=""><a href="#" class="" id="open-pdf-2" target="">Boîte à plan</a></li>
				<li><a href="{{ route('site.edit-user') }}">Mon compte</a></li>
				<li><a href="{{ route('logout') }}">Déconnexion</a></li>
			</ul>
		</div>
	</div>	 
	<div class="erp">
		<div>
			<div class="overlay overlay-pdf" id="overlay-pdf">
				<iframe src="https://app.coment.in/?a=login" width="100%" height="100%"></iframe>
				<a href="#" class="close-pdf" id="close-pdf"><i class="fa fa-times" aria-hidden="true"></i></a>
			</div>
			<div class="overlay overlay-pdf-2" id="overlay-pdf-2">
				<iframe src="https://app.coment.in/?a=login" width="100%" height="100%"></iframe>
				<a href="#" class="close-pdf" id="close-pdf-2"><i class="fa fa-times" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
	<script>
		$('#open-pdf').click(function() {
			$('#overlay-pdf').addClass('active');
		});
		$('#close-pdf').click(function() {
			$('#overlay-pdf').removeClass('active');
		});
		$('#overlay-pdf').click(function() {
			$('#overlay-pdf').removeClass('active');
		});
		$('#open-pdf-2').click(function() {
			$('#overlay-pdf-2').addClass('active');
		});
		$('#close-pdf-2').click(function() {
			$('#overlay-pdf-2').removeClass('active');
		});
		$('#overlay-pdf-2').click(function() {
			$('#overlay-pdf-2').removeClass('active');
		});
</script>
@stop

<!-- Facultatif, si l'on a des fichiers js spécifiques à la page -->
@section('scripts')


@stop