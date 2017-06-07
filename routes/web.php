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

Route::get('/findcar', 'FindCarPageController@index');
Route::get('/findcar/result', 'FindCarPageController@showResults');

Route::get('/addcar', 'AddCarController@index');
Route::post('/addcar', 'AddCarController@store');

Route::post('/loadmodels', 'LoadModelsController@loadModels');

Route::get('/findcar/{id}', 'DisplayImagesController@display');

Route::get('/test1234', function(){
    return view('carviews.test');
});