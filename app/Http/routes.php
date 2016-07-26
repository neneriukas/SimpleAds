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

Route::auth();

Route::get('/', 'MainPageController@index');

Route::get('category/{id}', 'CategoryController@index');

Route::get('createAd', 'AdsController@createAd');

Route::get('yourAds',[
		'as' => 'yourAds',
		'uses' => 'AdsController@yourAds'
	]);

Route::post('createAd/post', 'AdsController@post');

Route::delete('yourAds/deleteAd/{id}',[
		'as' => 'ads.deleteAd',
		'uses'=> 'AdsController@deleteAd'
	]);
