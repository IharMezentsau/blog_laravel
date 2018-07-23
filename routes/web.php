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

Route::get('index', 'IndexController@index')->name('index');

Route::get('/', 'IndexController@logOut');

Route::get('login', function (){
    return redirect('index');
})->name('login');

Route::post('/newMessage', 'MessageController@addMessage')->name('newMessage');
Route::post('/newAnswer', 'AnswerController@addAnswer')->name('newAnswer');

Route::any('/like', 'LikeController@like');

Route::group(['prefix' => 'profile', 'middleware' => ['web', 'auth']], function (){
    Route::get('/', 'ProfileController@profile')->name('profile');
    Route::any('/delAva', 'ProfileController@delAva')->name('delAva');
    Route::any('/update', 'ProfileController@update')->name('update');
    Route::get('/edit', 'ProfileController@edit')->name('edit');

});


