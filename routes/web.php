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
    return view('welcome');
});

//Senarai Ahli Kariah
Route::get('/ahlikariah','AhliKariahController@index');
Route::post('/ahlikariah/create','AhliKariahController@create');
Route::get('/ahlikariah/{id}/edit','AhliKariahController@edit');
Route::post('/ahlikariah/{id}/update','AhliKariahController@update');
Route::get('/ahlikariah/{id}/delete','AhliKariahController@delete');

//Senarai Penceramah
Route::get('/senaraipenceramah','SenaraiPenceramahController@spall');