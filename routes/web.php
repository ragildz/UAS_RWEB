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
Route::get('/home', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
	Route::get('/', 'MahasiswaController@index');
    Route::resource('mahasiswas', 'MahasiswaController');
    Route::post('update_acc', 'MahasiswaController@update_acc')->name('mahasiswas.update_acc');
});
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});
Route::get('daftar_kp', 'DaftarController@index')->name('daftar_kp');
Route::post('daftar_kp_save', 'DaftarController@store')->name('daftar_kp_save');

