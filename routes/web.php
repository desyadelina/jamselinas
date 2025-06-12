<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pendaftaran;

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
});
Route::get('/pendaftaran', [Pendaftaran::class, 'index'])->name('form.pendaftaran');