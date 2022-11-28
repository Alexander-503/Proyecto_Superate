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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/uca', function () {
    return view('uca');
});

Route::get('/ues', function () {
    return view('ues');
});

Route::get('/unssa', function () {
    return view('unssa');
});

Route::get('/bosco', function () {
    return view('bosco');
});

Route::get('/matias', function () {
    return view('matias');
});

Route::get('/unicaes', function () {
    return view('unicaes');
});

Route::get('/bello', function () {
    return view('bello');
});

Route::get('/modular', function () {
    return view('modular');
});

Route::get('/alberto', function () {
    return view('alberto');
});

Route::get('/poli', function () {
    return view('poli');
});

Route::get('/pana', function () {
    return view('pana');
});

Route::get('/gavidia', function () {
    return view('gavidia');
});

Route::get('/pedagogica', function () {
    return view('pedagogica');
});

Route::get('/esen', function () {
    return view('esen');
});

Route::get('/monica', function () {
    return view('monica');
});