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

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index');

//Users
Route::get('/admin/users', 'AdminController@getUsers');
Route::get('/admin/users/create', 'UsersController@getCreateUsers');
Route::post('/admin/users/create', 'UsersController@postCreateUsers');
Route::get('/admin/users/edit/{id}', 'UsersController@getEditUsers');
Route::post('/admin/users/edit', 'UsersController@postEditUsers');
Route::post('/admin/users/delete', 'UsersController@postDeleteUsers');

//Activities
Route::get('/admin/activities', 'AdminController@getActivities');
Route::get('/admin/activities/create', 'AdminController@getCreateActivities');
Route::post('/admin/activities/create', 'AdminController@postCreateActivities');
Route::get('/admin/activities/edit/{id}', 'AdminController@getEditActivities');
Route::post('/admin/activities/edit', 'AdminController@postEditActivities');
Route::post('/admin/activities/delete', 'AdminController@postDeleteActivities');

//Rewards
Route::get('/admin/rewards', 'AdminController@getRewards');
Route::get('/admin/rewards/create', 'RewardsController@getCreateRewards');
Route::post('/admin/rewards/create', 'RewardsController@postCreateRewards');
Route::get('/admin/rewards/edit/{id}', 'RewardsController@getEditRewards');
Route::post('/admin/rewards/edit', 'RewardsController@postEditRewards');
Route::post('/admin/rewards/delete', 'RewardsController@postDeleteRewards');

//TrackingRewards
Route::get('/admin/tracking_rewards', 'AdminController@getTrackingRewards');
Route::get('/admin/tracking_rewards/create', 'RewardsController@getCreateTrackingRewards');
Route::post('/admin/tracking_rewards/create', 'RewardsController@postCreateTrackingRewards');
Route::get('/admin/tracking_rewards/edit/{id}', 'RewardsController@getEditTrackingRewards');
Route::post('/admin/tracking_rewards/edit', 'RewardsController@postEditTrackingRewards');
Route::post('/admin/tracking_rewards/delete', 'RewardsController@postDeleteTrackingRewards');

