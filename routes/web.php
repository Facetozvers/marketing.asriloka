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
Route::get('/ganti_password', 'HomeController@changePasswordPage');
Route::post('/ganti_password', 'HomeController@changePassword')->name('changePassword');
Route::get('/dashboard', 'HomeController@index');
Route::get('/agen', 'GuestController@all_agent');
Route::get('/u/{id}', 'GuestController@profile');
Route::get('/knowledgebase', 'HomeController@knowledgebase');

Route::get('/profile', 'ProfileController@index');
Route::post('/profile/upload', 'ProfileController@uploadPicPage');
Route::post('/profile/upload_proses', 'ProfileController@uploadPic');
Route::post('/profile/delete_pic', 'ProfileController@deletePic');


Route::get('/listing', 'ListingController@listingsaya');
Route::get('/listing/all', 'ListingController@allListing');
Route::get('/listing/detail/{id}', 'ListingController@detail');
Route::get('/listing/edit/{id}', 'ListingController@editPage');
Route::get('/listing/new', 'ListingController@new');
Route::post('/listing/new', 'ListingController@request');
Route::get('/listing/sold/{listing_id}', 'ListingController@listingSold');

Route::get('/listing/upload/{id}', 'TransaksiController@uploadPage');
Route::post('/listing/upload', 'TransaksiController@uploadClosing');

Route::get('/training', 'TrainingController@index');
Route::post('/training/daftar', 'TrainingController@daftar');
Route::get('/training/detail/{id}', 'TrainingController@detail');

Route::get('/transaction', 'TransaksiController@index');
Route::get('/transaction/akad/{id}', 'TransaksiController@uploadAkadPage');
Route::post('/transaction/akad/upload', 'TransaksiController@uploadAkad');
Route::get('/transaction/decline/{no_transaksi}', 'TransaksiController@closingDecline');

Route::get('/koneksi', 'DownlineController@index');

//khusus synthesishomes agent
Route::get('/agen/synthesishomes', 'GuestController@synthesishomes');

