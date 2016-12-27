<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/users', 'UsersController@index');

Route::get('/users/form/{id?}', 'UsersController@form');

Route::get('/clients', 'ClientsController@index');

Route::get('/clients/form/{id?}', 'ClientsController@form');

Route::get('/campaings', 'CampaingsController@index');

Route::get('/campaings/form/{id?}', 'CampaingsController@form');

Route::get('/reports', 'ReportsController@index');