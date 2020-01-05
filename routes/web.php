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
Route::get('/admin/users', 'AdminController@getUsers');
Route::get('/admin/activities', 'AdminController@getActivities');
Route::get('/admin/rewards', 'AdminController@getRewards');
Route::get('/admin/tracking_rewards', 'AdminController@getTrackingRewards');

Route::get('/admin/activities/create', 'AdminController@getCreateActivities');
Route::post('/admin/activities/create', 'AdminController@postCreateActivities');
Route::get('/admin/activities/edit/{id}', 'AdminController@getEditActivities');
Route::post('/admin/activities/edit', 'AdminController@postEditActivities');
Route::post('/admin/activities/delete', 'AdminController@postDeleteActivities');