<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswa\DasboardController;
use App\Http\Controllers\Profile\PegawaiController;
Use App\Http\Controllers\Profile\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/','login');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('register', RegisterController::class);

Route::middleware('auth')->group(function () {
    Route::prefix('admin')
    ->middleware('can:sipedi-admin')
    ->group(function(){
        include "_/admin.php";
    });
    Route::prefix('pegawai')
    ->middleware('can:sipedi-pegawai')
    ->group(function(){
        include "_/pegawai.php";
    });
    Route::prefix('sipedi')->group(function(){
        include "_/sipedi.php";
    });

});

Route::prefix('mahasiswa')->middleware('auth:mahasiswa')->group(function(){
    Route::get('dashboard', DasboardController::class);
    include "m/fiksi.php";
    include "m/nonfiksi.php";
    include "m/peminjaman.php";
    include "m/pengembalian.php";
    include "m/tugasakhir.php";
});

// Route::prefix('mahasiswa')->group(function(){

// });

Route::prefix('pegawai')->middleware('auth:sipedi-pegawai')->group(function(){
    include "p/mahasiswa.php";
});

Route::resource('profile/pegawai', PegawaiController::class);
Route::resource('profile/mahasiswa', MahasiswaController::class);
