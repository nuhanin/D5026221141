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

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
    return "<h1>Halo, Selamat datang</h1>";
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/style', function () {
    return view('style');
});
Route::get('/container', function () {
    return view('container');
});
Route::get('/latihan1', function () {
    return view('latihan1');
});
Route::get('/js1', function () {
    return view('js1');
});
Route::get('/js2', function () {
    return view('js2');
});
Route::get('/ujicoba', function () {
    return view('ujicoba');
});
Route::get('/validasi1', function () {
    return view('validasi1');
});
Route::get('/esteh', function () {
    return view('5026221141_esteh');
});
Route::get('/link', function () {
    return view('link');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('perkalian','App\Http\Controllers\DosenController@index');
Route::get('show','App\Http\Controllers\DosenController@showBlog');

Route::get('/shownama/{nama}', 'App\Http\Controllers\DosenController@showNama');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

// route pegawai
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index1');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//route nilaiKuliah
Route::get('/nilai','App\Http\Controllers\NilaiController@nilaiKuliah');
Route::get('/nilai/tambahnilai','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilai/store','App\Http\Controllers\NilaiController@store');
Route::get('/nilai/viewnilai/{id}','App\Http\Controllers\NilaiController@view');

// route bus
Route::get('/bus','App\Http\Controllers\BusController@bus');
Route::get('/bus/tambahBus','App\Http\Controllers\BusController@tambah');
Route::post('/bus/store','App\Http\Controllers\BusController@store');
Route::get('/bus/viewBus/{id}','App\Http\Controllers\BusController@view');
Route::get('/bus/editBus/{id}','App\Http\Controllers\BusController@edit');
Route::post('/bus/update','App\Http\Controllers\BusController@update');
Route::get('/bus/hapus/{id}','App\Http\Controllers\BusController@hapus');

//route karyawan
Route::get('/karyawan','App\Http\Controllers\KaryawanController@indexkaryawan');
Route::get('/karyawan/tambah','App\Http\Controllers\KaryawanController@tambah');
Route::post('/karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::get('/karyawan/hapus/{id}','App\Http\Controllers\KaryawanController@hapus');
