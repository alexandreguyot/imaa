  <nav class="navbar navbar-dark bg-inverse-custom navbar-fixed-top animated fadeInUp ">
   <div class="container">
     <a class="navbar-brand" href="{{ url('/') }}">
       <img src="{{ URL::asset('images/logo_imaa.png') }}">
       <span class="sr-only">IMAA</span>
     </a> 
     <div id="collapsingNavbar" class="collapsingNavbar" >
       <ul class="nav navbar-nav pull-xs-right">
         <li class="nav-item nav-item-toggable {{ active_check('home') }} ">
           <a class="nav-link" href="{{ url('/') }}">Accueil</a>
           <div class="chevron">
             <img src="{{ URL::asset('images/chevron.svg') }}" class="animated fadeIn delay-1s">
           </div>
         </li>
         <li class="nav-item nav-item-toggable {{ active_check('activites') }}">
           <a class="nav-link" href="{{ url('activites') }}">Activités</a>
           <div class="chevron">
             <img src="{{ URL::asset('images/chevron.svg') }}" class="animated fadeIn delay-1s">
           </div>
           <ul>
             <li class="{{ active_check('activites/nos-domaines') }}"><a href="{{ url('activites/nos-domaines') }}">Nos domaines</a></li>
             <li class="{{ active_check('activites/nos-missions') }}"><a href="{{ url('activites/nos-missions') }}">Nos missions</a></li>
             <li class="{{ active_check('activites/secteur-geographique') }}"><a href="{{ url('activites/secteur-geographique') }}">Secteur géographique</a></li>
           </ul>
         </li>
         <li class="nav-item nav-item-toggable {{ active_check('equipe') }}">
           <a class="nav-link" href="{{ url('equipe') }}">L'équipe</a>
           <div class="chevron">
             <img src="{{ URL::asset('images/chevron.svg') }}" class="animated fadeIn delay-1s">
           </div>
           <ul>
             <li class="{{ active_check('equipe/presentation') }}"><a href="{{ url('equipe/presentation') }}">Présentation</a></li>
             <li class="{{ active_check('equipe/savoir-faire') }}"><a href="{{ url('equipe/savoir-faire') }}">Savoir faire</a></li>
             <li class="{{ active_check('equipe/ce-qui-nous-differencie') }}"><a href="{{ url('equipe/ce-qui-nous-differencie') }}">Ce qui nous différencie</a></li>
           </ul>
         </li>
         <li class="nav-item nav-item-toggable {{ active_check('actualites') }}">
           <a class="nav-link" href="{{ url('actualites') }}">Actualités</a> 
           <div class="chevron">
             <img src="{{ URL::asset('images/chevron.svg') }}" class="animated fadeIn delay-1s">
           </div>
         </li>
         <!-- <li class="nav-item dropdown hidden-sm-down textselect-off">
           <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <img src="{{ URL::asset('images/user.png') }}" height="40" width="40" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>
           </a>
           <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenu2">
             <div class="media">
               <div class="media-left">
                 <img src="{{ URL::asset('images/user.png') }}" height="60" width="60" alt="Avatar" class="img-circle">
               </div>
               <div class="media-body media-middle">
                 <h5 class="media-heading">John Doe</h5>
                 <h6>johndoe@imaa.eu</h6>
               </div>
             </div>
             <a href="#" class="dropdown-item text-uppercase">Dashboard</a>
             <a href="#" class="dropdown-item text-uppercase">Boite à plans</a>
             <a href="#" class="dropdown-item text-uppercase text-muted">Déconnexion</a>
           </div>
         </li> -->
       </ul>
     </div>
     <div class="nav-bar-active">
       <i class="fas fa-bars"></i>
     </div>
   </div>
 </nav>