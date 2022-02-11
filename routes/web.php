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
    return view('login');
});

Route::get('/instansi','InstansiController@tamp')->middleware('auth');
Route::get('/umum','UmumController@tamp')->middleware('auth');
Route::get('/dinas','DinasController@index')->middleware('auth');
Route::get('/desc','DescController@index')->middleware('auth')->name('desc');
// Route::get('/kunjungan','KunjunganController@tamp')->middleware('auth');
// Route::get('/home','IndexController@tamp')->middleware('auth')->name('index');

Route::get('/register','LoginController@register')->middleware('guest')->name('register');
Route::post('/registerPost','LoginController@registerPost')->name('register.post');
Route::get('/login','LoginController@getLogin')->middleware('guest')->name('login');
Route::post('/login','LoginController@postLogin')->middleware('guest');
Route::get('/logout', 'LoginController@logout')->middleware('auth')->name('logout');

Route::post('/umum/create', 'UmumController@create')->name('umum.create');
Route::post('/instansi/create', 'InstansiController@create')->name('instansi.create');
Route::post('/dinas/create', 'DinasController@create')->name('dinas.create');

Route::get('/home', 'IndexController@index')->middleware('auth')->name('home.index');
Route::get('/home/cari', 'IndexController@search')->name('home.search');

Route::get('/umum/cetak_pdf', 'UmumController@cetak_pdf')->name('cetak.pdf');
Route::get('/instansi/cetak_pdf', 'InstansiController@cetak_pdf')->name('i.cetak.pdf');
Route::get('/dinas/cetak_pdf', 'DinasController@cetak_pdf')->name('d.cetak.pdf');

Route::get('/umum/cetak', 'UmumController@foto')->middleware('auth')->name('u.foto');


// Route::get('/kunjungan', 'KunjunganController@index')->name('kunjungan.index');
// Route::get('/kunjungan/cari', 'KunjunganController@search')->name('kunjungan.search');



