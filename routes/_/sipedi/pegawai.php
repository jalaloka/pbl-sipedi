<?php

use App\Http\Controllers\Sipedi\Pegawai\PegawaiSipediController;
use App\Http\Controllers\Sipedi\Pegawai\MasterData\PegawaiController;
use App\Http\Controllers\Sipedi\Pegawai\MasterData\ModuleController;
// use App\Http\Controllers\Sipedi\Pegawai\MahasiswaController;

use Illuminate\Support\Facades\Route;

Route::redirect('/', 'pegawai/pegawai-sipedi');

Route::get('pegawai-sipedi', PegawaiSipediController::class);

Route::redirect('/', 'sipedi/pegawai/master-data/pegawai');
Route::resource('master-data/pegawai', PegawaiController::class);
Route::post('master-data/module/add-role', [ModuleController::class, 'addRole']);
Route::get('master-data/module/delete-role/{role}', [ModuleController::class, 'deleteRole']);
Route::resource('master-data/module', ModuleController::class);
// Route::resource('mahasiswa', MahasiswaController::class);

