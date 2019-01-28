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

Route::post('/job', ['as' => 'job-form', 'uses' => 'JobFormController@show']);

Route::get('/job',['as' => 'job', 'uses' => 'JobFormController@home']);

// Route::get('/job', ['as' => 'avail-jobs', 'uses' => 'JobFormController@avail'])->name('avail-jobs');
