<?php

use App\Http\Controllers\ProfileController;
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
    return view('Pagteste');
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

Route::get('/consulta', function () {
    return view('tela_consul');
})->name('consulPac');;

Route::get('/Pagteste', function () {
    return view('Pagteste');
})->name('Pagteste');;

Route::get('/politicas/cookies', function () {
    return view('cookies');
})->name('cookies');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

