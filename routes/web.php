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
    return view('mainlayout.layout');
});

Route::get('/about', function(){
	return view('aboutpage.index');
});
Route::get('/services', function(){
	return view('services.index');
});
Route::get('/careers', function(){
	return view('careers.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/addpost', 'HomeController@newPost')->name('newPost');
