<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pendaftaran;
use App\Http\Controllers\Auth;

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
    return view('pages.landing.index');
})->name('landing');

Route::get('/login', [Auth::class, 'index'])->name('form.login');
Route::get('/pendaftaran', [Pendaftaran::class, 'index'])->name('form.pendaftaran');
