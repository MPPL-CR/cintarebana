<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','HomeController@index');
Route::get('/registrasi','HomeController@registrasi');
Route::post('/regis_act','HomeController@regis_act');
Route::get('/jadwal','HomeController@jadwal');
Route::get('/cari','HomeController@cari');
Route::post('/search','HomeController@search');
Route::get('/hasil','HomeController@hasilCari');
Route::post('/login','HomeController@login');
Route::get('/logout','HomeController@logout');
Route::get('/lihatKelompok/{id}','HomeController@lihatKelompok');

//admin
Route::get('/admin','AdminController@index');
Route::get('/validasi','AdminController@validasi');
Route::get('/kelola','AdminController@kelola');
Route::get('/hapus/{id}','AdminController@hapus');
Route::get('/konfirmasi/{id}','AdminController@konfirmasi');
Route::get('/createJadwal','AdminController@createJadwal');
Route::get('/penilaian','AdminController@penilaian');
Route::get('/edit/{id}','AdminController@editProfil');
Route::post('/insertPenilaian','AdminController@insertPenilaian');
Route::post('/insertJadwal','AdminController@insertJadwal');
Route::get('/lihat/{id}','AdminController@lihatProfil');
Route::post('/update','AdminController@updateProfil');


//anggota
Route::get('/anggota','AnggotaController@index');
Route::get('/editProfil','AnggotaController@editProfil');
Route::get('/pilihGenre','AnggotaController@pilihGenre');
Route::get('/hasilLatihan','AnggotaController@hasilLatihan');
Route::post('/updateProfil','AnggotaController@updateProfil');
Route::post('/insertGenre','AnggotaController@genre');


Route::post('prosestambah','CrudController@tambahdata');
Route::get('read', function(){
	return view('read');
});
