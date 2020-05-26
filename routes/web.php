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

Route::get('/', 'FirstController@index');

Route::get('/home', 'FirstController@index')->name('home');

Route::get('/connexion', 'FirstController@connexion');

Route::post('/addmood', 'FirstController@addmood')->middleware('auth');

Route::get('/inscription', 'FirstController@inscription');

Route::get('/resetmdp', 'FirstController@resetmdp');

Route::get('/resetmdpemail', 'FirstController@showLinkRequestForm');

Route::get('/utilisateur/{id}','FirstController@utilisateur')->where ('id', '[0-9]+')->middleware('auth');

Route::post('/', 'FirstController@index');

Route::get('/proposition', 'FirstController@proposition')->middleware('auth');

Route::get('/propositionhappy', 'FirstController@propositionhappy')->middleware('auth');

Route::get('/propositionsad', 'FirstController@propositionsad')->middleware('auth');

Route::get('/propositionangry', 'FirstController@propositionangry')->middleware('auth');

Route::get('/propositionneutre', 'FirstController@propositionneutre')->middleware('auth');

Route::get('/propositionbored', 'FirstController@propositionbored')->middleware('auth');

Route::post('/utilisateur/update/{id}','FirstController@updateutilisateur')->where ('id', '[0-9]+')->middleware('auth');

Auth::routes();

Route::get('/{any}', 'FirstController@erreur')->where('any', '.*');
