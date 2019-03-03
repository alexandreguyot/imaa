  <!-- <nav class="navbar navbar-dark bg-inverse-custom navbar-fixed-top animated fadeInUp "> -->
  <nav class="navbar navbar-dark bg-inverse-custom navbar-fixed-top animated fadeInUp ">
   <div class="container">
     <a class="" href="{{ url('/accueil') }}">
       <img src="{{ URL::asset('images/erp/logo_imaa.png') }}" class="animated fadeInDown ">
     </a>
     <div id="collapsingNavbar" class="collapsingNavbar " > 
       <ul class="nav navbar-nav pull-xs-right">
         <li class="nav-item nav-item-toggable {{ active_check('/') }} ">
           <a class="nav-link" href="{{ url('/accueil') }}">Projets</a>
         </li> 
         <li class="nav-item nav-item-toggable {{ active_check('activites') }}">
           <a class="nav-link" href="{{ url('activites') }}">Clients</a>
         </li>
         <li class="nav-item dropdown hidden-sm-down textselect-off">
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
         </li>
       </ul>
     </div>
     <div class="nav-bar-active">
       <i class="fas fa-bars"></i>
     </div> 
   </div>
 </nav>