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

Route::get('/', 'IndexController@index')->name('index');

Route::get('/page/{page}', ['uses' => 'IndexController@getPages', 'as' => 'getPages', 'middleware' => 'pages:page'])->where('page', '[0-9]+');

Route::group(['prefix'=>'index'], function () {

});

Route::post('/newMessage', 'MessageController@addMessage')->name('newMessage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/registration', '')->name('registartion');
