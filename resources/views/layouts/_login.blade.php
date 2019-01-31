<section class="section-signup">
  <div class="container">
    <h3 class="text-xs-center m-b-3">Connectez-vous à votre espace IMAA</h3>
    <h4 class="text-xs-center m-b-3">Prochainement disponible</h4>
    @auth

    @endauth

    @guest
      <form>
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-6 col-xl-4">
            <div class="form-group has-icon-left form-control-email">
              <label class="sr-only" for="inputEmail">Adresse e-mail</label>
              <input type="email" class="form-control form-control-lg" id="email" placeholder="Adresse e-mail" autocomplete="off">
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="form-group has-icon-left form-control-password">
              <label class="sr-only" for="inputPassword">Mot de passe</label>
              <input type="password" class="form-control form-control-lg" id="password" placeholder="Mot de passe" autocomplete="off">
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Connexion</button>
            </div>
          </div>
        </div>
      </form>
    @endguest
  </div>
</section> 