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
    return view('frontEnd.home');
});
Route::get('/join', function () {
    return view('frontEnd.join');
});

Route::get('/', 'ProgramController@index');
Route::get('/news/search', 'NewsController@qw');
Route::get('/deputies', 'TeamController@index');
Route::get('/news', 'NewsController@index');
Route::get('/news/{id}', 'NewsController@solonews');
Route::post('/news/load_data', 'NewsController@load_data')->name('loadmore.load_data');
Route::get('/sendform','FormController@takeinfo');
Route::post('/sendform','FormController@takeinfo');

Route::get('/sendformmsg','FormController@takemsg');
Route::post('/sendformmsg','FormController@takemsg');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
