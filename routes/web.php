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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'EventsController@index')->name('events.index');
Route::post('/', 'EventsController@addEvent')->name('events.add');

Route::get('/admin', 'AdminController@index');
Route::put('/admin/approve/{id}','AdminController@approve')->name('events.approve');
Route::put('/admin/deny/{id}','AdminController@deny')->name('events.deny');
Route::get('/admin/denied', 'AdminController@denied');
Route::get('/admin/finished', 'AdminController@finished');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();

