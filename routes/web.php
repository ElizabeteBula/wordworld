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
Route::get('/pieraksti', 'pierakstiController@index');
Route::get('/manskonts', 'kontsController@index');
Route::get('/ieiet', function() {
	return view('ieiet');
});
Route::get('/registreties', function() {
	return view('registreties');
});