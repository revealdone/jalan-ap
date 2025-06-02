<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('home'); // ⬅️ arahkan kembali ke halaman home
});

Route::get('/', [LaporanController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     $laporan = Laporan::latest()->get();
//     return Inertia::render('Dashboard', [
//         'laporan' => $laporan,
//     ]);
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('laporan', LaporanController::class)->except(['show']);
    Route::get('/dashboard', [LaporanController::class, 'dashboard'])->name('dashboard');
    Route::get('/laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
    Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
});

// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home');

// Route::get('dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
