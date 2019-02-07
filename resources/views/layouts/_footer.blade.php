<!-- Footer
================================================== -->

<footer class="section-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-5">
        <div class="media">
          <div class="media-left">
          	<img src="{{ URL::asset('images/icon-logo.png') }}" style="width:43px">
          </div>
          <small class="media-body media-bottom">
            &copy; IMAA 2019 - Tous droits réservés - <a class="nav-item {{ active_check('mentions-legales') }}" href="{{ url('mentions-legales') }}" >Mentions légales</a><br>
           44880 Sautron
            </small>
        </div> 
      </div>
      <div class="col-md-12 col-lg-7">
        <ul class="nav nav-inline">
          <li class="nav-item {{ active_check('home') }}"><a class="nav-link" href="{{ url('/accueil') }}">Accueil</a></li>
          <li class="nav-item {{ active_check('activites') }}"><a class="nav-link" href="{{ url('activites') }}">Activités</a></li>
          <li class="nav-item {{ active_check('equipe') }}"><a class="nav-link" href="{{ url('equipe') }}">L'équipe</a></li>
          <li class="nav-item {{ active_check('actualites') }}"><a class="nav-link" href="{{ url('actualites') }}" >Actualités</a></li>
          <li class="nav-item {{ active_check('contact') }}"><a class="nav-link" href="{{ url('contact') }}" >Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>