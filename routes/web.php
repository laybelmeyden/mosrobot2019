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




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'MainController@index');
Route::get('/more', 'MainController@more');
Route::get('/about', 'MainController@about');
Route::get('/hackaton', 'MainController@hackaton');
Route::post('/contact', 'MainController@contact');