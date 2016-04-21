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

Route::get( '/', 'GalleryController@index' );
Route::resource( 'gallery', 'GalleryController' );
Route::get( 'gallery/show/{id}', 'GalleryController@show');
Route::resource( 'photo', 'PhotoController' );
Route::get( 'photo/details/{id}', 'PhotoController@details');