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
//Frontend Index Page Route
Route::get('/','FrontendController@frontend')->name('index');
//Frontend Register Page Route
Route::get('/signup','FrontendController@signup')->name('register');


//Admin Page Route Group

Route::group(	['prefix'=>'admin'], 	function(){

	Route::get('/','AdminpageController@index')->name('adminindexpage');
	Route::get('/logout','AdminpageController@logout')->name('logout');
	Route::get('/createproduct','AdminpageController@createproduct')->name('createproduct');
});
