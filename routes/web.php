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


/*
|--------------------------------------------------------------------------
| Cek Login
|--------------------------------------------------------------------------*/

Auth::routes();

Route::get('/home', 'HomeController@dashboard')->name('dashboard');
Route::get('/dashboard', 'GuruController@dashboard')->name('dashboard');
Route::get('/karyawan', 'GuruController@index')->name('index');
/*
|--------------------------------------------------------------------------*/

/*
|--------------------------------------------------------------------------
| Aplikasi Crud + Serch
|--------------------------------------------------------------------------*/
Route::get('/pegawai/cari','GuruController@cari');

Route::get('/tambah','GuruController@create');

Route::post('/tambah', 'GuruController@store')->name('store');

Route::get('/edit/{data}', 'GuruController@edit');
Route::patch('/edit/{data}', 'GuruController@update');

Route::delete('/delete/{data}', 'GuruController@destroy');






