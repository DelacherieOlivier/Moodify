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

Route::get('/inscription', 'FirstController@inscription');

Route::get('/resetmdp', 'FirstController@resetmdp');

Route::get('/resetmdpemail', 'FirstController@showLinkRequestForm');

Route::get('/utilisateur/{id}','FirstController@utilisateur')->where ('id', '[0-9]+');

Route::post('/', 'FirstController@index');

Route::post('/utilisateur/update/{id}','FirstController@updateutilisateur')->where ('id', '[0-9]+')->middleware('auth');

Auth::routes();

Route::get('/{any}', 'FirstController@erreur')->where('any', '.*');
