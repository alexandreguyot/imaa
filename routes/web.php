<?php

/*
        Route for website
*/


Route::get('/home', ['name' => 'home', 'uses' => 'IndexController@Index']);

Route::get('/activites', ['name' => 'activites', 'uses' => 'ActivityController@Index']);
Route::get('/activites/nos-domaines', ['name' => 'activites.nos-domaines', 'uses' => 'ActivityController@Domains']);
Route::get('/activites/nos-missions', ['name' => 'activites.nos-missions', 'uses' => 'ActivityController@Missions']);
Route::get('/activites/secteur-geographique', ['name' => 'activites.secteur-geographique', 'uses' => 'ActivityController@Sector']);

Route::get('/equipe', ['name' => 'equipe', 'uses' => 'TeamController@Index']);
Route::get('/equipe/presentation', ['name' => 'equipe.presentation', 'uses' => 'TeamController@Resume']);
Route::get('/equipe/savoir-faire', ['name' => 'equipe.savoir-faire', 'uses' => 'TeamController@Talents']);
Route::get('/equipe/ce-qui-nous-differencie', ['name' => 'equipe.ce-qui-nous-differencie', 'uses' => 'TeamController@Difference']);

Route::get('/actualites', ['name' => 'actualites', 'uses' => 'NewsController@Index']);

Route::get('/contact', ['name' => 'contact', 'uses' => 'ContactController@Index']);

Route::get('/mentions-legales', ['name' => 'mentions-legales', 'uses' => 'LegalesController@Index']);

/*
    Route for ERP
*/
Route::middleware('auth')->namespace('ERP')->prefix('erp')->group(function () {
    Route::get('/dashboard', ['name' => 'erp.dashboard', 'uses'=> 'DashboardController@index']);

    Route::middleware('admin')->prefix('admin')->group(function () {
        Route::get('creation-projet/{$id}', ['name' => 'erp.get.create-project', 'uses' => 'ProjectController@index']);
        Route::post('post-creation-projet', ['name' => 'erp.post.create-project', 'uses' =>'ProjectController@create']);
        Route::put('edition-projet', ['name' => 'erp.put.edit-project', 'uses' => 'ProjectController@edit']);
        Route::delete('creation-projet', ['name' => 'erp.delete.delete-project','uses' => 'ProjectController@delete']);
    });
});
