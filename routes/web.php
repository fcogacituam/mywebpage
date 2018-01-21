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

Route::get('/','WelcomeController@index');
Route::resource('contacto','MailController');
Route::get('/admin','AdminController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/users/trashed','UsersController@trashed');
Route::get('/admin/users/restore/{id}','UsersController@restore');
Route::resource('/admin/users','UsersController');
