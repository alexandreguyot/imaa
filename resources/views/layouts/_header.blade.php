  <nav class="navbar navbar-dark bg-inverse-custom navbar-fixed-top animated fadeInUp ">
   <div class="container">
     <a class="navbar-brand" href="{{ route('accueil') }}">
       <img src="{{ URL::asset('images/logo_imaa.png') }}">
       <span class="sr-only">IMAA</span>
     </a> 
     <div id="collapsingNavbar" class="collapsingNavbar" >
       <ul class="nav navbar-nav pull-xs-right">
         <li class="nav-item nav-item-toggable {{ active_check('home') }} ">
           <a class="nav-link" href="{{ route('accueil') }}">Accueil</a>
           <div class="chevron">
             <img src="{{ URL::asset('images/chevron.svg') }}" class="animated fadeIn delay-1s">
           </div>
         </li>
         <li class="nav-item nav-item-toggable {{ active_check('activites') }}">
           <a class="nav-link" href="{{ route('activites') }}">Activités</a>
           <div class="chevron">
             <img src="{{ URL::asset('images/chevron.svg') }}" class="animated fadeIn delay-1s">
           </div>
           <ul>
             <li class="{{ active_check('activites/nos-domaines') }}"><a href="{{ route('activites.nos-domaines') }}">Nos domaines</a></li>
             <li class="{{ active_check('activites/nos-missions') }}"><a href="{{ route('activites.nos-missions') }}">Nos missions</a></li>
             <li class="{{ active_check('activites/secteur-geographique') }}"><a href="{{ route('activites.secteur-geographique') }}">Secteur géographique</a></li>
           </ul>
         </li>
         <li class="nav-item nav-item-toggable {{ active_check('equipe') }}">
           <a class="nav-link" href="{{ route('equipe') }}">L'Équipe</a>
           <div class="chevron">
             <img src="{{ URL::asset('images/chevron.svg') }}" class="animated fadeIn delay-1s">
           </div>
           <ul>
             <li class="{{ active_check('equipe/presentation') }}"><a href="{{ route('equipe.presentation') }}">Présentation</a></li>
             <li class="{{ active_check('equipe/savoir-faire') }}"><a href="{{ route('equipe.savoir-faire') }}">Savoir faire</a></li>
             <li class="{{ active_check('equipe/ce-qui-nous-differencie') }}"><a href="{{ route('equipe.ce-qui-nous-differencie') }}">Ce qui nous différencie</a></li>
           </ul>
         </li>
         <li class="nav-item nav-item-toggable {{ active_check('actualites') }}">
           <a class="nav-link" href="{{ route('actualites') }}">Actualités</a> 
           <div class="chevron">
             <img src="{{ URL::asset('images/chevron.svg') }}" class="animated fadeIn delay-1s">
           </div>
         </li>

         @guest
           <li class="nav-item dropdown hidden-sm-down textselect-off">
            <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenu2" >
               <img src="{{ URL::asset('images/user.png') }}" height="40" width="40" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>
             </a>
             <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenu2">
               <div class="media">
                 <div class="">
                  <h6 class="media-heading">Votre espace IMAA</h6>
                 </div>
               </div>
               <a href="#connexion" class="dropdown-item text-uppercase text-muted">Connexion</a>
             </div>
           </li>
         @endguest

         @auth

          <li class="nav-item dropdown hidden-sm-down textselect-off">
            <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenu2" >
              <img src="{{ Auth::user()->logo ? url('storage/'.Auth::user()->logo) : URL::asset('images/user.png') }}" height="40" width="40" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenu2">
              <div class="media">
                <div class="media-left">
                  <img src="{{ Auth::user()->logo ? url('storage/'.Auth::user()->logo) : URL::asset('images/user.png') }}" height="60" width="60" alt="Avatar" class="img-circle">
                </div>
                <div class="media-body media-middle">
                  <h5 class="media-heading">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h5>
                  <h6>{{ Auth::user()->email }}</h6>
                </div>
              </div>
              @if(Auth::user()->isAdmin())
                <a href="{{ route('dashboard') }}" class="dropdown-item text-uppercase">Dashboard</a>
                <ul>
                  <li><a href="{{ route('erp.get.index-project') }}" class="dropdown-item text-uppercase">Projets</a></li>
                  <li><a href="{{ route('erp.get.index-user') }}" class="dropdown-item text-uppercase">Utilisateurs</a></li>
                </ul>
                <a href="#" class="dropdown-item text-uppercase comingsoon" title="Prochainement disponible">Boîte à plan</a>
                <a href="{{ route('erp.get.edit-user', Auth::user()->id) }}" class="dropdown-item text-uppercase">Mon compte</a>
                <a href="{{ route('logout')}}" class="dropdown-item text-uppercase text-muted">Déconnexion</a>
              @else
                <a href="{{ route('dashboard') }}" class="dropdown-item text-uppercase">Dashboard</a>
                <a href="#" class="dropdown-item text-uppercase comingsoon" title="Prochainement disponible">Boîte à plan</a>
                <a href="{{ route('site.edit-user') }}" class="dropdown-item text-uppercase">Mon compte</a>
                <a href="{{ route('logout')}}" class="dropdown-item text-uppercase text-muted">Déconnexion</a>
              @endif
            </div>
          </li>
         @endauth
       </ul>
     </div>
     <div class="nav-bar-active">
       <i class="fas fa-bars"></i>
     </div>
   </div>
 </nav>