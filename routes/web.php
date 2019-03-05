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

Route::post('connexion', ['uses' => 'HomeController@doLogin'])->name('login');
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

Route::middleware('auth')->namespace('ERP')->prefix('erp')->group(function () {

    // Routes de merde par Guigui
    Route::get('/projet-1', ['uses' => 'WelcomeController@projet_1'])->name('erp.projet-1');
    Route::get('/projet-2', ['uses' => 'WelcomeController@projet_2'])->name('erp.projet-2');
    Route::get('/projet-3', ['uses' => 'WelcomeController@projet_3'])->name('erp.projet-3');

    Route::get('/', ['uses' => 'WelcomeController@index'])->name('erp.index');

    Route::prefix('/projets')->group( function () {
        Route::get('/', ['uses' => 'ProjectController@index'])->name('erp.projets-index');
        Route::get('creation-projet', ['uses' => 'ProjectController@create'])->name('erp.get.create-project');
        Route::post('post-creation-projet', ['uses' =>'ProjectController@store'])->name('erp.post.store-project');
        Route::get('edition-projet', ['uses' => 'ProjectController@edit'])->name('erp.put.edit-project');
        Route::put('edition-projet', ['uses' => 'ProjectController@update'])->name('erp.put.update-project');
        Route::delete('suppression-projet', ['uses' => 'ProjectController@delete'])->name('erp.delete.delete-project');
    });

    Route::prefix('/clients')->group( function () {
        Route::get('/', ['uses' => 'ClientController@index'])->name('erp.get.index-client');
        Route::get('creation-client', ['uses' => 'ClientController@create'])->name('erp.get.create-client');
        Route::post('post-creation-client', ['uses' =>'ClientController@store'])->name('erp.post.store-client');
        Route::get('edition-client', ['uses' => 'ClientController@edit'])->name('erp.get.edit-client');
        Route::put('edition-projet', ['uses' => 'ClientController@update'])->name('erp.put.update-client');
        Route::delete('suppression-client', ['uses' => 'ClientController@delete'])->name('erp.delete.delete-client');
    });
   
    Route::prefix('/utilisateurs')->group( function () {
        Route::get('/', ['uses' => 'UserController@index'])->name('erp.get.index-user');
        Route::get('creation-utilisateur', ['uses' => 'UserController@create'])->name('erp.get.create-user');
        Route::post('post-creation-utilisateur', ['uses' =>'UserController@store'])->name('erp.post.store-user');
        Route::get('edition-utilisateur', ['uses' => 'UserController@edit'])->name('erp.put.edit-user');
        Route::put('edition-utilisateur', ['uses' => 'UserController@update'])->name('erp.put.update-user');
        Route::delete('suppression-utilisateur', ['uses' => 'UserController@delete'])->name('erp.delete.delete-user');
    });
});