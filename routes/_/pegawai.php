<?php

use App\Http\Controllers\Sipedi\Pegawai\PegawaiController;
use App\Http\Controllers\Sipedi\Pegawai\MahasiswaController;
use App\Http\Controllers\Sipedi\Pegawai\PeminjamanController;
use App\Http\Controllers\Sipedi\Pegawai\PengunjungController;
use App\Http\Controllers\Sipedi\Pegawai\PengembalianController;
use App\Http\Controllers\Sipedi\Pegawai\KondisibukuController;
use App\Http\Controllers\Sipedi\Pegawai\FiksiController;
use App\Http\Controllers\Sipedi\Pegawai\NonfiksiController;
use App\Http\Controllers\Sipedi\Pegawai\TugasakhirController;
use App\Http\Controllers\Sipedi\Pegawai\DendaController;


use Illuminate\Support\Facades\Route;


Route::redirect('/', 'pegawai/dashboard');
Route::resource('dashboard', PegawaiController::class);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('peminjaman', PeminjamanController::class);
Route::resource('pengunjung', PengunjungController::class);
Route::resource('pengembalian', PengembalianController::class);
Route::resource('kondisibuku', KondisibukuController::class);
Route::resource('koleksi-buku/fiksi', FiksiController::class);
Route::resource('koleksi-buku/nonfiksi', NonfiksiController::class);
Route::resource('koleksi-buku/tugasakhir', TugasakhirController::class);
Route::resource('denda', DendaController::class);

