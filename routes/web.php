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
})->middleware('auth');

Route::get('/ues', function () {
    return view('ues');
})->middleware('auth');

Route::get('/unssa', function () {
    return view('unssa');
})->middleware('auth');

Route::get('/bosco', function () {
    return view('bosco');
})->middleware('auth');

Route::get('/matias', function () {
    return view('matias');
})->middleware('auth');

Route::get('/unicaes', function () {
    return view('unicaes');
})->middleware('auth');

Route::get('/bello', function () {
    return view('bello');
})->middleware('auth');

Route::get('/modular', function () {
    return view('modular');
})->middleware('auth');

Route::get('/alberto', function () {
    return view('alberto');
})->middleware('auth');

Route::get('/poli', function () {
    return view('poli');
})->middleware('auth');

Route::get('/pana', function () {
    return view('pana');
})->middleware('auth');

Route::get('/gavidia', function () {
    return view('gavidia');
})->middleware('auth');

Route::get('/pedagogica', function () {
    return view('pedagogica');
})->middleware('auth');

Route::get('/esen', function () {
    return view('esen');
})->middleware('auth');

Route::get('/monica', function () {
    return view('monica');
})->middleware('auth');

Route::get('/itca', function () {
    return view('itca');
})->middleware('auth');

Route::get('/tecnologica', function () {
    return view('tecnologica');
})->middleware('auth');

Route::get('/univo', function () {
    return view('univo');
})->middleware('auth');

Route::get('/auto', function () {
    return view('auto');
})->middleware('auth');

Route::get('/icc', function () {
    return view('univo');
})->middleware('auth');