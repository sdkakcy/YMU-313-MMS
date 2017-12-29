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
    return view('anasayfa');
});


Route::get('/login', function () {
    return view('index');
});
Route::get('/kayit','HomeController@get_kayit');

Route::get('/index','HomeController@get_login');
Route::post('/index','HomeController@post_login');
Route::get('/sirket_anasayfa','HomeController@sirket');
Route::get('/map', function () {
    return view('sube_kayit_2');
});
Route::post('/map', function () {
    return view('sube_kayit_2');
});
Route::resource ('route' , 'sirketController');
Route::resource ('sube' , 'SubeController');
Route::resource ('arama' , 'aramacontroller');
Route::resource ('urun' , 'uruncontroller');

Route::get('slm','SubeController@mapsave');

Route::get('/kategori_ekle','uruncontroller@get_kategoriler')->name('kategori_ekle');
Route::post('/kategori_ekle','uruncontroller@post_kategoriler')->name('kategori_post');

Route::get('/marka_ekle','uruncontroller@get_markalar')->name('marka_ekle');
Route::post('/marka_ekle','uruncontroller@post_markalar')->name('marka_post');

Route::get('/urun_ekle','uruncontroller@get_urun_bilgiler')->name('urun_bilgi');
