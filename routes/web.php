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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();


Route::group([
//    'namespace' => 'Auth',
    'prefix' => 'chat'
], function () {
    Route::get('/', 'ChatController@index');
//    Route::group(function () {
        Route::post('/send-message', 'AnonymousChatController@sendMessage');
        Route::get('/room/{room}', 'AnonymousChatController@getRoom')->middleware('auth');
//    });
});

//Route::get('/chatbox', 'ChatController@index')->name('test');

Route::get('/chat', 'Auth\ChatController@index');
Route::get('/anonymous-chat', 'Auth\ChatController@anonymous');
Route::get('messages', 'Auth\ChatController@fetchMessages');
Route::post('messages', 'Auth\ChatController@sendMessage');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{slug?}', 'Site\PageController@show')->name('page.show');

