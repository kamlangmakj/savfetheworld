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
Route::get('/admin/tracking_rewards', 'AdminController@getTrackingRewards');

Route::get('/admin/users', 'UsersController@getUsers');
Route::get('/admin/users/edit/{id}', 'UsersController@getEditUsers');
Route::post('/admin/users/edit', 'UsersController@postEditUsers');
Route::post('/admin/users/delete', 'UsersController@postDeleteUsers');


Route::get('/admin/activities', 'ActivitiesController@getActivities');
Route::get('/admin/activities/create', 'ActivitiesController@getCreateActivities');
Route::post('/admin/activities/create', 'ActivitiesController@postCreateActivities');
Route::get('/admin/activities/edit/{id}', 'ActivitiesController@getEditActivities');
Route::post('/admin/activities/edit', 'ActivitiesController@postEditActivities');
Route::post('/admin/activities/delete', 'ActivitiesController@postDeleteActivities');

Route::get('/admin/rewards', 'RewardsController@getRewards');
Route::get('/admin/rewards/create', 'RewardsController@getCreateRewards');
Route::post('/admin/rewards/create', 'RewardsController@postCreateRewards');
Route::get('/admin/rewards/edit/{id}', 'RewardsController@getEditRewards');
Route::post('/admin/rewards/edit', 'RewardsController@postEditRewards');
Route::post('/admin/rewards/delete', 'RewardsController@postDeleteRewards');


