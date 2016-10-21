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



Auth::routes();

// Main Screen
Route::get('/', 'HomeController@showView');

Route::get('/home', 'HomeController@showView');

// Settings Page
Route::get('/settings', 'SettingsController@showView');

Route::get('/getModuleList/{moduleName}', 'SettingsController@getModuleList');

Route::post('/settings/addModuleToDb', 'SettingsController@addModuleToDb');

// Dummy
Route::get('/populate', 'SettingsController@populateDummy');