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
Route::get('/player-registration','HomePageController@player_registration')->name('Player registration');
Route::post('/player-data','PlayerController@index');
Route::get('/players','PlayerController@players')->name('Players');
Route::get('/player-details/{id}','PlayerController@player_detail');
Route::get('/player-login','PlayerController@player_login')->name('Player login');
Route::post('/player-login-check','PlayerController@player_login_check');
Route::get('/player-dashboard','PlayerController@player_dashboard');
Route::post('/add-education','PlayerController@add_education');
Route::post('/add-history','PlayerController@add_history');
Route::get('player-logout','PlayerController@player_logout');
//clubs
Route::get('/clubs','ClubController@index');
Route::post('/club-data','ClubController@register_club');
Route::get('club-login','ClubController@club_login');
Route::post('club-login-check','ClubController@club_login_check');
Route::get('club-dashboard','ClubController@club_dashboard');
Route::get('club-logout','ClubController@club_logout');

//contract
Route::get('contract/{id}','ClubController@contract');
Route::post('contract-data','ClubController@contract_data');
//team
Route::get('create-team/{id}','ClubController@create_team');
Route::post('/team-data','ClubController@team_data');
Route::get('/-team-players/{id}','ClubController@add_team_player');
Route::get('/create-venue','ClubController@add_venue');
Route::post('/venue-data','ClubController@venue_data');

Route::get('/create-event','ClubController@add_event');
Route::post('/event-data','ClubController@event_data');

Route::get('player-performance','ClubController@player_performance');
Route::post('player-performance-data','ClubController@player_performance_data');

Route::get('match-info','ClubController@match_info');
Route::post('match-info-data','ClubController@match_info_data');


Route::get('payment','ClubController@payment');
Route::post('payment-data','ClubController@payment_data');

//admin
Route::get('/admin','ClubController@admin');









Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});