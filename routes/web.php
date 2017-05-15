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
    return view('index');
})->name('home.index');

Route::post('/register/participant', 'DashboardController@storeParticipant')->name('register.participant');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
  Route::get('/home', 'DashboardController@index')->name('dashboard.home.index');
  Route::get('/participant', 'DashboardController@indexParticipant')->name('dashboard.participant.index');
});
