<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pendaftaran;
use App\Http\Controllers\Auth;
use App\Http\Controllers\EventGuide;
use App\Http\Controllers\LayananKami;
use App\Http\Controllers\HubungiKami;

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

Route::get('/pendaftaran/invoice', function () {
    return view('pages.transaksi.invoice');
})->name('pendaftaran.invoice');

Route::get('/event-guide', [EventGuide::class, 'index'])->name('event-guide');
Route::get('/layanan-kami', [LayananKami::class, 'index'])->name('layanan-kami');
Route::get('/hubungi-kami', [HubungiKami::class, 'index'])->name('hubungi-kami');



// ini fallback route buat ngecatch semua route yang tidak ditemukan
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});