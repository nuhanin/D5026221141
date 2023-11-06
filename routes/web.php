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
