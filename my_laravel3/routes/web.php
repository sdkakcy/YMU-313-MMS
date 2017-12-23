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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index');
});
Route::get('/kayit','HomeController@get_kayit');
Route::get('/index','HomeController@get_login');
Route::post('/index','HomeController@post_login');
Route::get('/sirket_anasayfa','HomeController@sirket');

Route::resource ('route' , 'sirketController');
Route::resource ('sube' , 'SubeController');