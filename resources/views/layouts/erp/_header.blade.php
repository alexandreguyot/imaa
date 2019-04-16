
 @if(Auth::user()->isAdmin())
   <!-- <nav class="navbar navbar-dark bg-inverse-custom navbar-fixed-top animated fadeInUp "> -->
   <nav class="navbar navbar-dark bg-inverse-custom navbar-fixed-top animated fadeInUp ">
    <div class="container">
      <a class="" href="{{ route('accueil') }}">
        <img src="{{ URL::asset('images/erp/logo_imaa.png') }}" class="animated fadeInDown ">
      </a>
      <div id="collapsingNavbar" class="collapsingNavbar " > 
        <ul class="nav navbar-nav pull-xs-right">
          <li class="nav-item nav-item-toggable {{ active_check('/') }} ">
            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
          </li> 
          <li class="nav-item nav-item-toggable {{ active_check('/') }} ">
            <a class="nav-link" href="{{ route('erp.get.index-project') }}">Projets</a>
          </li>
          <li class="nav-item nav-item-toggable {{ active_check('activites') }}">
            <a class="nav-link" href="{{ route('erp.get.index-user') }}">Utilisateurs</a>
          </li>
          <li class="nav-item dropdown hidden-sm-down textselect-off">
            <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenu2" >
              <img src="{{ Auth::user()->logo ? url('storage/'.Auth::user()->logo) : URL::asset('images/user.png') }}" height="" width="" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenu2">
              <div class="media">
                <div class="media-left">
                  <img src="{{ Auth::user()->logo ? url('storage/'.Auth::user()->logo) : URL::asset('images/user.png') }}" height="" width="" alt="Avatar" class="img-circle">
                </div>
                <div class="media-body media-middle">
                  <h5 class="media-heading">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }} </h5>
                  <h6>{{ Auth::user()->email }}</h6>
                </div>
              </div>
              <a href="{{ route('dashboard') }}" class="dropdown-item text-uppercase">Dashboard</a>
              <ul>
                <li><a href="{{ route('erp.get.index-project') }}" class="dropdown-item text-uppercase">Projets</a></li>
                <li><a href="{{ route('erp.get.index-user') }}" class="dropdown-item text-uppercase">Utilisateurs</a></li>
              </ul>
              <a href="#" class="dropdown-item text-uppercase comingsoon" title="Prochainement disponible">Boîte à plan</a>
             <a href="{{ route('erp.get.edit-user', Auth::user()->id) }}" class="dropdown-item text-uppercase">Mon compte</a>
             <a href="{{ route('logout')}}" class="dropdown-item text-uppercase text-muted">Déconnexion</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="nav-bar-active">
        <i class="fas fa-bars"></i>
      </div> 
    </div>
  </nav>
 @else 
  <!-- <nav class="navbar navbar-dark bg-inverse-custom navbar-fixed-top animated fadeInUp "> -->
  <nav class="navbar navbar-dark bg-inverse-custom navbar-fixed-top animated fadeInUp ">
   <a class="" href="{{ route('accueil') }}">
     <img src="{{ URL::asset('images/erp/logo_imaa.png') }}" class="animated fadeInDown ">
   </a>
   <div id="collapsingNavbar" class="collapsingNavbar " > 
     <ul class="nav navbar-nav pull-xs-right">
      <!--  <li class="nav-item nav-item-toggable {{ active_check('activites') }}">
         <a class="nav-link" href="{{ route('erp.get.index-user') }}">Mon compte</a>
       </li> -->
       <li class="nav-item dropdown hidden-sm-down textselect-off">
         <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <img src="{{ Auth::user()->logo ? url('storage/'.Auth::user()->logo) : URL::asset('images/user.png') }}" height="" width="" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>
         </a>
         <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenu2">
           <div class="media">
             <div class="media-left">
               <img src="{{ Auth::user()->logo ? url('storage/'.Auth::user()->logo) : URL::asset('images/user.png') }}" height="" width="" alt="Avatar" class="img-circle">
             </div>
             <div class="media-body media-middle">
               <h5 class="media-heading">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h5>
               <h6>{{ Auth::user()->email }}</h6>
             </div>
           </div>
             <a href="{{ route('dashboard') }}" class="dropdown-item text-uppercase">Dashboard</a>
             <a href="#" class="dropdown-item text-uppercase comingsoon" title="Prochainement disponible">Boîte à plan</a>
             <a href="{{ route('erp.get.edit-user', Auth::user()->id) }}" class="dropdown-item text-uppercase">Mon compte</a>
             <a href="{{ route('logout')}}" class="dropdown-item text-uppercase text-muted">Déconnexion</a>
         </div>
       </li>
     </ul>
   </div>
   <div class="nav-bar-active">
     <i class="fas fa-bars"></i>
   </div> 
 </nav>
 @endif