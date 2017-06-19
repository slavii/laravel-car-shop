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

Route::get('/', 'HomePageController@index');
Route::post('/', 'HomePageController@findResults');

Route::get('/findcar', 'FindCarPageController@index');
Route::post('/findcar', 'FindCarPageController@findResults');

Route::get('/addcar', 'CarController@index');
Route::post('/addcar', 'CarController@store');
Route::post('/deletecar', 'CarController@delete');

Route::post('/loadmodels', 'LoadModelsController@loadModels');

Route::get('/results', 'ResultsPageController@index');

Route::get('/car/{id}', 'CarPageController@index');

Route::post('/updateLocation', 'LocationController@setLocation');

Route::get('/test', function () {
    return view('layouts.app');
});