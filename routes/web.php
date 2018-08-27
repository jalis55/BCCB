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


Route::get('/','HomePageController@index')->name('BCCB');
Route::get('/player-registration','HomePageController@player_registration')->name('player registration');
Route::post('/player-data','PlayerController@index');
Route::get('/players','PlayerController@players');
Route::get('/pleyer-details/{id}','PlayerController@player_detail');