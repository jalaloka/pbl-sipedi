<?php

use Illuminate\Support\Facades\Route;

Route::prefix('pegawai')
->middleware('can:persuratan-pegawai')
->group(function(){
    include "sipedi/pegawai.php";
});
