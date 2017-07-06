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
Route::post('/saveUserDetails', 'HomeController@saveUserDetails')->name('saveUserDetails');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/checkRequest', 'HomeController@checkRequest')->name('checkRequest');
Route::post('/sendRequest', 'HomeController@sendRequest')->name('sendRequest');
Route::post('/actionRequest', 'HomeController@actionRequest')->name('actionRequest');
Route::post('/uploadProfileImage', 'HomeController@uploadProfileImage')->name('uploadProfileImage');
Route::get('/viewProfile/{id}', 'HomeController@viewProfile')->name('viewProfile');
Route::get('/requestList', 'HomeController@requestList')->name('requestList');
Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');


Route::group(['prefix' => 'apanel','namespace'=>'apanel' ,'middleware' => ['CheckLogin']], function (){
	Route::get('/', 'LoginController@index');
	Route::get('/login', 'LoginController@login');
	Route::post('login/checkLogin', ['as' => 'login/checkLogin',  'uses' => 'LoginController@checkLogin']);
	Route::get('category/add', 'CategoryController@add');
	Route::get('category/edit/{id}', 'CategoryController@edit');
	Route::get('category/index', 'CategoryController@index');
	Route::get('category/delete/{id}', 'CategoryController@delete');
	Route::post('category/create', ['as' => 'category/create',  'uses' => 'CategoryController@create']);
	Route::post('category/create/{id}', ['as' => 'category/create',  'uses' => 'CategoryController@create']);


	Route::get('checkCategoryTitle', ['as' => 'checkCategoryTitle',  'uses' => 'CategoryController@checkCategoryTitle']);

	// Society Routes
	Route::get('society/add', 'SocietyController@add');
	Route::get('society/edit/{id}', 'SocietyController@edit');
	Route::get('society/index', 'SocietyController@index');
	Route::get('society/delete/{id}', 'SocietyController@delete');
	Route::post('society/create', ['as' => 'society/create',  'uses' => 'SocietyController@create']);
	Route::post('society/create/{id}', ['as' => 'category/create',  'uses' => 'SocietyController@create']);
	Route::get('society/getStates', 'SocietyController@getStates');
	Route::get('society/getCities', 'SocietyController@getCities');
	Route::get('user/index', 'UserController@index');
	Route::post('user/changeStatus', 'UserController@changeStatus');
	Route::get('logout', 'UserController@logout');
	Route::get('/changePassword', 'UserController@changePassword');
	Route::post('/updatePassword', 'UserController@updatePassword');
	// Society Routes End
});
