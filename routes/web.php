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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');


Route::group(['prefix' => 'apanel','namespace'=>'apanel' ,'middleware' => ['CheckLogin']], function (){
	Route::get('/', 'LoginController@index');
	Route::get('/login', 'LoginController@login');
	Route::post('login/checkLogin', ['as' => 'login/checkLogin',  'uses' => 'LoginController@checkLogin']);

});
