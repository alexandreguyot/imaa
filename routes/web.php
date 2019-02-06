<?php

/*
 * Route pour le site web
 * */

Route::namespace('Site')->group(function () {
    Route::get('/', ['name' => 'home', 'uses' => 'IndexController@index']);
    Route::get('/accueil', ['name' => 'accueil', 'uses' => 'IndexController@Home']);
    Route::get('/activites', ['name' => 'activites', 'uses' => 'ActivityController@index']);
    Route::get('/activites/nos-domaines', ['name' => 'activites.nos-domaines', 'uses' => 'ActivityController@domains']);
    Route::get('/activites/nos-missions', ['name' => 'activites.nos-missions', 'uses' => 'ActivityController@missions']);
    Route::get('/activites/secteur-geographique', ['name' => 'activites.secteur-geographique', 'uses' => 'ActivityController@sector']);
    Route::get('/equipe', ['name' => 'equipe', 'uses' => 'TeamController@index']);
    Route::get('/equipe/presentation', ['name' => 'equipe.presentation', 'uses' => 'TeamController@resume']);
    Route::get('/equipe/savoir-faire', ['name' => 'equipe.savoir-faire', 'uses' => 'TeamController@talents']);
    Route::get('/equipe/ce-qui-nous-differencie', ['name' => 'equipe.ce-qui-nous-differencie', 'uses' => 'TeamController@difference']);
    Route::get('/actualites', ['name' => 'actualites', 'uses' => 'NewsController@index']);
    Route::get('/contact', ['name' => 'contact', 'uses' => 'ContactController@index']);
    Route::get('/contact/confirmation', ['name' => 'contact-confirmation', 'uses' => 'ContactController@Confirmation']);
});


/*
 * Route pour le login
 * */
Auth::routes();

/*
 * Route pour les clients pour consulter le projet
 * */
Route::get('/dashboard/{token}', ['name' => 'erp.dashboard', 'uses'=> 'DashboardController@index', 'middleware' => 'auth']);


Route::get('/mentions-legales', ['name' => 'mentions-legales', 'uses' => 'LegalesController@Index']);

/*
 * Route pour l'ERP
 * */
Route::middleware('auth')->namespace('ERP')->prefix('erp')->group(function () {
    Route::middleware('admin')->prefix('admin')->group(function () {
        Route::get('creation-projet/{$id}', ['name' => 'erp.get.create-project', 'uses' => 'ProjectController@index']);
        Route::post('post-creation-projet', ['name' => 'erp.post.create-project', 'uses' =>'ProjectController@create']);
        Route::put('edition-projet', ['name' => 'erp.put.edit-project', 'uses' => 'ProjectController@edit']);
        Route::delete('suppression-projet', ['name' => 'erp.delete.delete-project','uses' => 'ProjectController@delete']);
    });
});
