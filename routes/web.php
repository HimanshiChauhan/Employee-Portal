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

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/job', ['as' => 'job-form', 'uses' => 'JobFormController@display'])->middleware('auth');

Route::get('/job',['as' => 'job', 'uses' => 'JobFormController@home'])->middleware('auth');

Route::get('/avail-jobs', ['as' => 'avail-jobs', 'uses' => 'JobFormController@avail'])->middleware('auth');
