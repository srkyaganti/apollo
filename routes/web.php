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

Route::view('/','index');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('dashboard', 'DashboardController@index');
    Route::post('toggle-https', 'DashboardController@toggleHTTPS');

    Route::get('profile', 'ProfileController@index');
    Route::post('change-password', 'ProfileController@changePassword')->name('change-password');
    Route::post('update-profile', 'ProfileController@updateProfile')->name('update-profile');

    Route::get('sql-console', 'ConsoleController@index');
    Route::post('execute-query', 'ConsoleController@executeQuery')->name('execute-query');
});
