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
Route::get('/program', 'ProgramController@index');
Route::get('/fb', 'FBController@index');
Route::get('/', 'MainController@index');

Route::get('/search', 'SearchController@index');
Route::post('/save_mail', 'MailController@savemail');
Route::get('/send/email', 'MailController@mail');
Route::get('/search/fetch_dep', 'SearchController@fetch_dep');
Route::get('/search/fetch_news', 'SearchController@fetch_news');
Route::get('/news/search', 'NewsController@qw');
Route::post('voyager.posts.store', "FBController@index");
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
