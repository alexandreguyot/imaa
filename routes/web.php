<?php

/*
        Route for website
*/


Route::get('/', 'IndexController@Index');
Route::get('/activites', 'ActivityController@Index');

Route::get('/activites/nos-domaines', 'ActivityController@Domains');
Route::get('/activites/nos-missions', 'ActivityController@Missions');
Route::get('/activites/secteur-activites', 'ActivityController@Sector');

Route::get('/equipe', 'TeamController@Index');
Route::get('/equipe/presentation', 'TeamController@Resume');
Route::get('/equipe/savoir-faire', 'TeamController@Talents');
Route::get('/equipe/ce-qui-nous-differencie', 'TeamController@Difference');

Route::get('/actualites', 'NewsController@Index');

Route::get('/contact', 'ContactController@Index');

/*
    Route for ERP
*/
Route::middleware('auth')->namespace('ERP')->prefix('erp')->group(function () {
    Route::get('/dashboard', ['name' => 'erp.dashboard', 'controller'=> 'DashboardController@index']);

    Route::middleware('admin')->prefix('admin')->group(function () {
        Route::get('creation-projet/{$id}', ['name' => 'erp.get.create-project', 'ProjetController@index']);
        Route::post('post-creation-projet', ['name' => 'erp.post.create-project', 'ProjetController@create']);
        Route::put('edition-projet', ['name' => 'erp.put.edit-project', 'ProjetController@edit']);
        Route::delete('creation-projet', ['name' => 'erp.delete.delete-project', 'ProjetController@delete']);
    });
});