@guest
<section class="section-signup">
  <div class="container">
    <h3 class="text-xs-center m-b-3">Connectez-vous à votre espace IMAA</h3>
    <h4 class="text-xs-center m-b-3">Prochainement disponible</h4>
      <form action="{{ route('login')}}" method="POST">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-6 col-xl-4">
            <div class="form-group has-icon-left form-control-email">
              <label class="sr-only" for="inputEmail">Adresse e-mail</label>
              <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Adresse e-mail" autocomplete="off">
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="form-group has-icon-left form-control-password">
              <label class="sr-only" for="inputPassword">Mot de passe</label>
              <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Mot de passe" autocomplete="off">
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Connexion</button>
            </div>
          </div>
        </div>
      </form>
      <div class="row">
          <div class="col-md-6 col-xl-4 right">
              <a href="{{ route('password.request') }}">Mot de passe oublié</a>
          </div>
      </div>
  </div>
</section> 
@endguest

@auth
<section class="section-signup">
  <div class="container">
    <h3 class="text-xs-center m-b-3">Vous êtes connecté</h3>
    @if(Auth::user()->isAdmin())
    <div class="col-md-12 ">
        <a href="{{ route('erp.get.index-project') }}">Retourner à l'ERP</a>
    </div>
    @else 
      <div class="col-md-12">
        <a href="{{ route('dashboard') }}">Retourner au dashboard</a>
      </div>
    @endif
  </div>
</section> 
@endauth
