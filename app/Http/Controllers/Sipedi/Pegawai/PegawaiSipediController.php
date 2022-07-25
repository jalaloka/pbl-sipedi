<?php

namespace App\Http\Controllers\Sipedi\Pegawai;

use App\Http\Controllers\Controller;

class PegawaiSipediController extends Controller
{
    public function __invoke()
    {
        return view('sipedi.pegawai.');
    }
}
