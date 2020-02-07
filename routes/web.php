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

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');

Route::get('search', 'SearchController@autocomplete');

Route::get('/blogs/details/{id}', 'BlogController@details');
Route::get('/blogs', 'BlogController@blogs');
Route::get('/contact', 'ContactController@index');
Route::post('/contact/message/send', 'ContactController@send_message');

Route::get('cockroach/control/service', 'ServiceController@cockroach');
Route::get('termite/control/service', 'ServiceController@termite');
Route::get('bedbug/control/service', 'ServiceController@bedbug');
Route::get('rat/control/service', 'ServiceController@rat');
Route::resource('/userData','UserDataController');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
