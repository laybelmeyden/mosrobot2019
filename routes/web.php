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

Route::get('/', 'Maincontroller@index');
Route::get('/more', 'Maincontroller@more');
Route::get('/about', 'Maincontroller@about');
Route::get('/hackaton', 'Maincontroller@hackaton');
Route::post('/contact', 'MainController@contact');