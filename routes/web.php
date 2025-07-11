<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pendaftaran;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Profile;
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
Route::get('/profile', [Profile::class, 'index'])->name('profile');
Route::get('/profile/edit', [Profile::class, 'edit'])->name('profile.edit');
Route::put('/profile', [Profile::class, 'update'])->name('profile.update');


// route untuk upload bukti pembayaran
Route::get('/upload-bukti-pembayaran', function () {
    return view('pages.transaksi.upload-bukti');
})->name('upload.bukti.pembayaran');

Route::get('/pendaftaran/invoice', function () {
    return view('pages.transaksi.invoice');
})->name('pendaftaran.invoice');

Route::get('/event-guide', [EventGuide::class, 'index'])->name('event-guide');
Route::get('/layanan-kami', [LayananKami::class, 'index'])->name('layanan-kami');
Route::get('/hubungi-kami', [HubungiKami::class, 'index'])->name('hubungi-kami');

// admin routes
Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('pages.admin.index');
    })->name('admin.dashboard');

    Route::get('/peserta-kolektif', function () {
        return view('pages.admin.peserta-kolektif.index');
    })->name('admin.peserta-kolektif');

    Route::get('/peserta-umum', function () {
        return view('pages.admin.peserta-umum.index');
    })->name('admin.peserta-umum');
});


// ini fallback route buat ngecatch semua route yang tidak ditemukan
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
