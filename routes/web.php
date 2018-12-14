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

Route::get('/','HomeController@index')->name('home');

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/music', function () {
    return view('music');
});

Route::get('/gallery', 'HomeController@gallery')->name('gallery');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
