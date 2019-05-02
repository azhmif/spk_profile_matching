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


Route::get('/beranda', function () {
    return view('beranda');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/jenis', 'JenisController@index')->name('jenis');
Route::get('/jenis/tambah', 'JenisController@create')->name('jenis');
Route::post('/jenis/tambah/save', 'JenisController@store')->name('jenis');
Route::delete('/jenis/delete/{id}', 'JenisController@destroy')->name('jenis');
Route::get('/jenis/edit/{id}', 'JenisController@edit')->name('jenis');
Route::patch('/jenis/edit/{id}/save', 'JenisController@update')->name('jenis');

Route::get('/anggaran', 'AnggaranController@index')->name('anggaran');
Route::get('/anggaran/tambah', 'AnggaranController@create')->name('anggaran');
Route::post('/anggaran/tambah/save', 'AnggaranController@store')->name('anggaran');
Route::delete('/anggaran/delete/{id}', 'AnggaranController@destroy')->name('anggaran');
Route::get('/anggaran/edit/{id}', 'AnggaranController@edit')->name('anggaran');
Route::patch('/anggaran/edit/{id}/save', 'AnggaranController@update')->name('anggaran');

Route::get('/peminat', 'PeminatController@index')->name('peminat');
Route::get('/peminat/tambah', 'PeminatController@create')->name('peminat');
Route::post('/peminat/tambah/save', 'PeminatController@store')->name('peminat');
Route::delete('/peminat/delete/{id}', 'PeminatController@destroy')->name('peminat');
Route::get('/peminat/edit/{id}', 'PeminatController@edit')->name('peminat');
Route::patch('/peminat/edit/{id}/save', 'PeminatController@update')->name('peminat');

Route::get('/realisasi', 'RealisasiController@index')->name('realiasasi');
Route::get('/realisasi/tambah', 'RealisasiController@create')->name('realiasasi');
Route::post('/realisasi/tambah/save', 'RealisasiController@store')->name('realiasasi');
Route::delete('/realisasi/delete/{id}', 'RealisasiController@destroy')->name('realiasasi');
Route::get('/realisasi/edit/{id}', 'RealisasiController@edit')->name('realiasasi');
Route::patch('/realisasi/edit/{id}/save', 'RealisasiController@update')->name('realiasasi');

Route::get('/kegiatan', 'KegiatanController@index')->name('kegiatan');
Route::get('/kegiatan/tambah', 'KegiatanController@create');
Route::post('/kegiatan/tambah/save', 'KegiatanController@store');
Route::delete('/kegiatan/delete/{id}', 'KegiatanController@destroy');
Route::get('/kegiatan/edit/{id}', 'KegiatanController@edit');
Route::patch('/kegiatan/edit/{id}/save', 'KegiatanController@update');

Route::get('/profile-matching', 'KegiatanController@cekprofile')->name('profile-matching');
Route::get('/kriteria-bobot', 'KriteriabobotController@index')->name('profile-matching');
Route::get('/kriteria-bobot/edit/{id}', 'KriteriabobotController@create')->name('profile-matching');
Route::patch('/kriteria-bobot/edit/{id}/save', 'KriteriabobotController@update')->name('profile-matching');