<div class="sidebar ">
	<ul>
		<li class="{{ active_check('home') }}"><a href="{{ route('accueil') }}">Accueil</a></li>
		<li class="{{ active_check('activites') }}">
			<a href="{{ route('activites') }}">Activités</a>
			<ul>
				<li class="{{ active_check('activites/nos-domaines') }}"><a href="{{ route('activites.nos-domaines') }}">Nos domaines</a></li>
				<li class="{{ active_check('activites/nos-missions') }}"><a href="{{ route('activites.nos-missions') }}">Nos missions</a></li>
				<li class="{{ active_check('activites/secteur-geographique') }}"><a href="{{ route('activites.secteur-geographique') }}">Secteur géographique</a></li>
			</ul>
		</li>
		<li class="{{ active_check('equipe') }}"><a href="{{ route('equipe') }}">L'équipe</a></li>
		<li class="{{ active_check('actualites') }}"><a href="{{ route('actualites') }}">Actualités</a></li>
		<li class="{{ active_check('contact') }}"><a href="{{ route('contact') }}">Contact</a></li>
	</ul>
</div>