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

Auth::routes();

Route::get('/', 'MainController@index');
Route::get('/contact', 'MainController@contact'); 
Route::post('/send-contact', 'MainController@sendcontact'); 
Route::get('/interest', 'MainController@interested'); 
Route::post('/signup', 'MainController@signup'); 
Route::get('/thank-you', 'MainController@thankyou'); 
