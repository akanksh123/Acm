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

use App\Event;
use App\Http\Controllers\AdminController;

Route::get('/', 'RouteController@index');
Route::get('/team', 'RouteController@team');
Route::get('/events', 'RouteController@events');
Route::get('/event1', 'RouteController@event1');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->middleware('auth');
Auth::routes();
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::get('/addevents', 'AdminController@showAddEvents');
Route::post('/addeventss', 'AdminController@addEvents')->middleware('auth');
Route::get('/manageevents', 'AdminController@showManageEvents');