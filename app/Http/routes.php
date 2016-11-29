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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('cv', 'WelcomeController@cv');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'mylove'], function() {
	Route::get('/', 'HomeController@homepage');
	Route::get('slider', 'HomeController@slider');
	
	Route::controllers([
		'photo' => 'PhotoController',
	]);

});
