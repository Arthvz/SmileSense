<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');;

Route::get('/agendar/', function () {
    return view('agendar');
})->name('agendar');;

Route::get('/comprar/', function () {
    return view('compra');
})->name('compra');;

Route::get('/log-in/', function () {
    return view('login');
})->name('log-in');;

Route::get('/log-in/empresa', function () {
    return view('telalog_empresa');
})->name('logCli');;

Route::get('/log-in/paciente', function () {
    return view('telalog');
})->name('logPac');;
