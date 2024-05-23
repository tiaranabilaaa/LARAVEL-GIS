<?php

use Illuminate\Support\Facades\Route;



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PlaceMapController@index')->name('frontpage');
Route::get('/place/data', 'DataController@places')->name('place.data'); // DATA TABLE CONTROLLER

Route::group(['middleware' => ['auth']], function () {
    Route::resource('places', 'PlaceController');
});
