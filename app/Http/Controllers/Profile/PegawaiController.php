<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\MasterData\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $data['pegawai']= auth()->user();
        return view('profile.pegawai.index', $data);
    }

    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('profile.pegawai.edit', $data);
    }

    public function update(Pegawai $pegawai)
    {
        $pegawai->email = request('email');
        $pegawai->username = request('username');
        if (request('password')) $pegawai->password = request('password');
        $pegawai->telepon = request('telepon');
        $pegawai->alamat = request('alamat');
        $pegawai->agama = request('agama');
        $pegawai->save();

        return redirect('profile/pegawai');

    }

}
