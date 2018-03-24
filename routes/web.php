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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Route::resource('content', "ContentController");

Route::get('/account', 'UserController@index')->name('account');
Route::get('/account/{id}/edit', 'UserController@edit')->name('account.edit');
Route::patch('/account/{id}/update', 'UserController@update')->name('account.update');
Route::delete('/account/delete/{id}', 'UserController@destroy')->name('account.delete');


Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/form', 'ProfileController@create')->name('profile.form');
Route::post('/profile/insert', 'ProfileController@store')->name('profile.insert');
Route::post('/profile/{profile}', 'ProfileController@update')->name('profile.update');
Route::get('/profile/delete/{id}', 'ProfileController@destroy')->name('profile.delete');
Route::get('/setting/{profile}', 'ProfileController@setting')->name('profile.setting');

Route::get('/content', 'ContentController@index')->name('content');
Route::get('/content/add', 'ContentController@create')->name('content.add');
Route::patch('/content/insert', 'ContentController@store')->name('content.create');
Route::get('/content/{content}', 'ContentController@show')->name('content.detail');
Route::get('/content/{content}/edit', 'ContentController@edit')->name('content.edit');
Route::patch('/content/{content}', 'ContentController@update')->name('content.update');
Route::delete('/content/{content}', 'ContentController@destroy')->name('content.delete');
