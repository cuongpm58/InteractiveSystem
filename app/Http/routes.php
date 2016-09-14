<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', ['as' => 'getLogin', 'uses' => 'LoginController@getLogin']);
Route::post('/', ['as' => 'postLogin', 'uses' => 'LoginController@postLogin']);
Route::get('logout', ['as' => 'getLogout', 'uses' => 'LoginController@getLogout']);
Route::get('quen-mat-khau', ['as' => 'quen-mat-khau', 'uses' => 'UserController@forgotpassword']);
Route::group(['middleware' => 'auth'], function () {
    Route::get('home', function (){
    	return view('home.home');
    });
    Route::get('khac-phuc-su-co', ['as' => 'getSuCo', 'uses' => 'HomeController@getSuCo']);
    Route::post('khac-phuc-su-co', ['as' => 'postSuCo', 'uses' => 'HomeController@postSuCo']);
    Route::get('bao-tri', ['as' => 'bao-tri', 'uses' => 'HomeController@baotri']);
	Route::get('tra-soat', ['as' => 'tra-soat', 'uses' => 'HomeController@trasoat']);
	Route::get('yeu-cau-khac', ['as' => 'yeu-cau-khac', 'uses' => 'HomeController@khac']);
	Route::get('signup', ['as' => 'getsignup', 'uses' => 'UserController@getUserAdd']);
	Route::post('signup', ['as' => 'postsignup', 'uses' => 'UserController@postUserAdd']);
	Route::get('user', ['as' => 'user', 'uses' => 'UserController@getUserList']);
	Route::get('profile', ['as' => 'profile', 'uses' => 'UserController@profile']);
	Route::get('changepass', ['as' => 'changepass', 'uses' => 'UserController@changepass']);
});