<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
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