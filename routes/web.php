<?php

use Illuminate\Support\Facades\Route;

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
Route::get('new/record', 'HomeController@newRecord')->name('new.record');
Route::get('record/details/{id}', 'HomeController@recordDetails')->name('record.details');
Route::post('new/record', 'HomeController@newRecordPost')->name('new.record');
