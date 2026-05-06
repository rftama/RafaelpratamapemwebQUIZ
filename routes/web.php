<?php

use App\Http\Controllers\BangunanController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
// Route::resource('bangunan', BangunanController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pegawai', function () {
     return "ini adalah halaman pegawai";
     });

 Route::get('/bangunan', [BangunanController::class, 'index'])->name('bangunan.index');
 Route::post('createBangunans', [BangunanController::class, 'store'])->name('bangunan.create');
 Route::get('/bangunan/{id}', [BangunanController::class, 'pageEdit']);
 Route::put('/updateBangunan/{id}', [BangunanController::class, 'update'])->name('bangunan.update');
 Route::delete('/deleteBangunan/{id}', [BangunanController::class, 'destroy']);