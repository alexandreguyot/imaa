<!-- Footer
================================================== -->

<footer class="section-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-5">
        <div class="media">
          <div class="media-left">
          	<img src="{{ URL::asset('images/icon-logo.png') }}" style="width:43px">
          </div>
          <small class="media-body media-bottom">
            &copy; IMAA 2019 - Tous droits réservés - Mentions légales<br>
            16 rue de la Maison Cochée, 44880 Sautron - 06 21 50 73 78
            </small>
        </div> 
      </div>
      <div class="col-md-6 col-lg-7">
        <ul class="nav nav-inline">
          <li class="nav-item"><a class="nav-link" href="{{ url('home') }}">Accueil</a></li>
          <li class="nav-item "><a class="nav-link" href="{{ url('activites') }}">Activités</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('equipe') }}">L'équipe</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('actualites') }}" >Actualités</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}" >Contact</a></li>
          <li class="nav-item"><a class="nav-link scroll-top" href="#totop"> <span class="icon-caret-up"></span></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>