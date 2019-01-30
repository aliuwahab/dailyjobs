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
    return view('front.index');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');



Route::middleware(['auth'])->group( function () {

    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/jobs', 'JobsController@index');
    Route::get('/user/{user}/posted/jobs', 'UserJobsController@index')->name('user.posted.jobs');
    Route::post('/jobs', 'UserJobsController@store')->name('store.job');





});
