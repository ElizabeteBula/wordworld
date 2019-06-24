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

Route::get('/', function () {
    return view('html');
});

Route::get('/manavardnica','vardnicasController@index');
Route::get('/manavardnica/{id}', 'vardnicasController@choseLanguage');
Route::get('/pieraksti', 'pierakstiController@index');
Route::get('/manskonts', 'kontsController@index');
Route::get('/test', function() {return view('valoda');});
Route::get('/ieiet', function() {return view('auth/login');});
Route::get('/registreties', function() {return view('auth/register');});
Route::post('/pieraksti','pierakstiController@storepieraksti');
//Route::post('/test','pierakstiController@insertData');
// Route::resource('/valoda','valodaController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
