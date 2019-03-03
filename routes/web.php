<?php

/*
 * Route pour le site web
 * */

Route::namespace('Site')->group(function () {
    Route::get('/', ['uses' => 'IndexController@index'])->name('home');
    Route::get('/accueil', ['uses' => 'IndexController@Home'])->name('accueil');
    Route::get('/activites', ['uses' => 'ActivityController@index'])->name('activites');
    Route::get('/activites/nos-domaines', ['uses' => 'ActivityController@domains'])->name('activites.nos-domaines');
    Route::get('/activites/nos-missions', ['uses' => 'ActivityController@missions'])->name('activites.nos-missions');
    Route::get('/activites/secteur-geographique', ['uses' => 'ActivityController@sector'])->name('activites.secteur-geographique');
    Route::get('/equipe', ['uses' => 'TeamController@index'])->name('equipe');
    Route::get('/equipe/presentation', ['uses' => 'TeamController@resume'])->name('equipe.presentation');
    Route::get('/equipe/savoir-faire', [ 'uses' => 'TeamController@talents'])->name('equipe.savoir-faire');
    Route::get('/equipe/ce-qui-nous-differencie', ['uses' => 'TeamController@difference'])->name('equipe.ce-qui-nous-differencie');
    Route::get('/actualites', ['uses' => 'NewsController@index'])->name('actualites');
    Route::get('/contact', ['uses' => 'ContactController@index'])->name('contact');
    Route::get('/contact/confirmation', ['uses' => 'ContactController@Confirmation'])->name('contact-confirmation');
    Route::get('/mentions-legales', ['uses' => 'LegalesController@Index'])->name('mentions-legales');
});

Route::post('connexion', ['uses' => 'HomeController@doLogin'])->name('connexion');
Route::post('deconnexion', ['uses' => 'HomeController@logout'])->name('logout');

/*
 * Route pour les clients pour consulter le projet
 * */
//Route::get('/dashboard/{token}', ['name' => 'erp.dashboard', 'uses'=> 'DashboardController@index', 'middleware' => 'auth']);

/*
 * Route pour l'ERP 
 * */

//Route::middleware('auth')->namespace('ERP')->prefix('erp')->group(function () {
//Route::middleware('admin')->prefix('admin')->group(function () {

Route::namespace('ERP')->prefix('erp')->group(function () {

    // Routes de merde par Guigui
    Route::get('/projet-1', ['uses' => 'WelcomeController@projet_1'])->name('erp.projet-1');
    Route::get('/projet-2', ['uses' => 'WelcomeController@projet_2'])->name('erp.projet-2');
    Route::get('/projet-3', ['uses' => 'WelcomeController@projet_3'])->name('erp.projet-3');
    
    // Projets    
    Route::get('/projets', ['uses' => 'ProjectsController@Index'])->name('erp.projets-index');
    Route::get('/projets/creation', ['uses' => 'ProjectsController@Creation'])->name('erp.projet-creation');
    Route::get('/projets/modification', ['uses' => 'ProjectsController@Modification'])->name('erp.projet-modification');    

    // Clients    
    Route::get('/clients', ['uses' => 'ClientsController@Index'])->name('erp.clients-index');
    Route::get('/clients/creation', ['uses' => 'ClientsController@Creation'])->name('erp.clients-creation');
    Route::get('/clients/modification', ['uses' => 'ClientsController@Modification'])->name('erp.clients-modification');

    // Utilisateurs    
    Route::get('/utilisateurs', ['uses' => 'UsersController@Index'])->name('erp.users-index');
    Route::get('/utilisateurs/creation', ['uses' => 'UsersController@Creation'])->name('erp.users-creation');
    Route::get('/utilisateurs/modification', ['uses' => 'UsersController@Modification'])->name('erp.users-modification');

    Route::prefix('/projets', function () {
        Route::get('creation-projet', ['uses' => 'ProjectController@index'])->name('erp.get.create-project');
        Route::post('post-creation-projet', ['uses' =>'ProjectController@create'])->name('erp.post.create-project');
        Route::put('edition-projet', ['uses' => 'ProjectController@edit'])->name('erp.put.edit-project');
        Route::delete('suppression-projet', ['uses' => 'ProjectController@delete'])->name('erp.delete.delete-project');
    });
   
    Route::prefix('/utilisateur', function () {
        Route::get('creation-utilisateur', ['uses' => 'UserController@index'])->name('erp.get.create-user');
        Route::post('post-creation-utilisateur', ['uses' =>'UserController@create'])->name('erp.post.create-user');
        Route::put('edition-utilisateur', ['uses' => 'UserController@edit'])->name('erp.put.edit-user');
        Route::delete('suppression-utilisateur', ['uses' => 'UserController@delete'])->name('erp.delete.delete-user');
    });
});