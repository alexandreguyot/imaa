<div class="sidebar ">
	<ul>
		<li class="{{ active_check('home') }}"><a href="{{ url('/') }}">Accueil</a></li>
		<li class="{{ active_check('activites') }}">
			<a href="{{ url('activites') }}">Activités</a>
			<ul>
				<li class="{{ active_check('activites/nos-domaines') }}"><a href="{{ url('activites/nos-domaines') }}">Nos domaines</a></li>
				<li class="{{ active_check('activites/nos-missions') }}"><a href="{{ url('activites/nos-missions') }}">Nos missions</a></li>
				<li class="{{ active_check('activites/secteur-geographique') }}"><a href="{{ url('activites/secteur-geographique') }}">Secteur géographique</a></li>
			</ul>
		</li>
		<li class="{{ active_check('equipe') }}"><a href="{{ url('equipe') }}">L'équipe</a></li>
		<li class="{{ active_check('actualites') }}"><a href="{{ url('actualites') }}">Actualités</a></li>
		<li class="{{ active_check('contact') }}"><a href="{{ url('contact') }}">Contact</a></li>
	</ul>
</div>