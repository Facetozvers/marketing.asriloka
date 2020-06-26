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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index');
Route::get('/profile', 'ProfileController@index');


Route::get('/listing', 'ListingController@index');
Route::get('/listing/detail/{id}', 'ListingController@detail');
Route::get('/listing/new', 'ListingController@new');

