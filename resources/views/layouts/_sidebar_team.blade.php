<div class="sidebar ">
	<ul>
		<li class="{{ active_check('home') }}"><a href="{{ url('/accueil') }}">Accueil</a></li>
		<li class="{{ active_check('activites') }}"><a href="{{ url('activites') }}">Activités</a></li>
		<li class="{{ active_check('equipe') }}">
			<a href="{{ url('equipe') }}">L'équipe</a>
			<ul>
				<li class="{{ active_check('equipe/presentation') }}"><a href="{{ url('equipe/presentation') }}">Présentation</a></li>
				<li class="{{ active_check('equipe/savoir-faire') }}"><a href="{{ url('equipe/savoir-faire') }}">Savoir faire</a></li>
				<li class="{{ active_check('equipe/ce-qui-nous-differencie') }}"><a href="{{ url('equipe/ce-qui-nous-differencie') }}">Ce qui nous différencie</a></li>
			</ul>
		</li>
		<li class="{{ active_check('actualites') }}"><a href="{{ url('actualites') }}">Actualités</a></li>
		<li class="{{ active_check('contact') }}"><a href="{{ url('contact') }}">Contact</a></li>
	</ul>
</div>