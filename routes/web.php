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

// Route::get('/', function () {
//     return view('accueil');
// });

Route::get('/accueil', 'accueilController@home');
Route::match(['get','post'], '/gererBD', 'gererBDController@home');
Route::get('/mesBD', 'mesBDController@home');
Route::get('/mesCollections', 'mesCollectionsController@home');
Route::get('/mesEnvies', 'mesEnviesController@home');
Route::get('/mesAvisEtNotes', 'avisEtNotesController@home');

// Route::get('/mesCollections', function () {
//     return view('mesCollections');
// });

// Route::get('/gererBD', function () {
//     return view('gererBD');
// });

// Route::get('/mesBD', function () {
//     return view('mesBD');
// });

// Route::get('/mesAvisEtNotes', function () {
//     return view('mesAvisEtNotes');
// });

// Route::get('/mesEnvies', function () {
//     return view('mesEnvies');
// });