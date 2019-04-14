<div class="sidebar ">
	<ul>
		<li class="{{ active_check('home') }}"><a href="{{ route('accueil') }}">Accueil</a></li>
		<li class="{{ active_check('activites') }}"><a href="{{ route('activites') }}">Activités</a></li>
		<li class="{{ active_check('equipe') }}">
			<a href="{{ route('equipe') }}">L'Équipe</a>
			<ul>
				<li class="{{ active_check('equipe/presentation') }}"><a href="{{ route('equipe.presentation') }}">Présentation</a></li>
				<li class="{{ active_check('equipe/savoir-faire') }}"><a href="{{ route('equipe.savoir-faire') }}">Savoir faire</a></li>
				<li class="{{ active_check('equipe/ce-qui-nous-differencie') }}"><a href="{{ route('equipe.ce-qui-nous-differencie') }}">Ce qui nous différencie</a></li>
			</ul>
		</li>
		<li class="{{ active_check('actualites') }}"><a href="{{ route('actualites') }}">Actualités</a></li>
		<li class="{{ active_check('contact') }}"><a href="{{ route('contact') }}">Contact</a></li>
	</ul>
</div>