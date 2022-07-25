<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\MasterData\Mahasiswa;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Mahasiswa $mahasiswa)
    {
        $mahasiswa = new mahasiswa();
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->tanggal_lahir = request('tanggal_lahir');
        $mahasiswa->prodi = request('prodi');
        $mahasiswa->alamat = request('alamat');
        $mahasiswa->agama = request('agama');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        // $mahasiswa->status = request('status');
        $mahasiswa->telepon = request('telepon');
        if (request('password')) $mahasiswa->password = request('password');
        // $mahasiswa->foto = $request->file('foto')->store('mahasiswa');
        $mahasiswa->save();

        $mahasiswa->handleUploadFoto();

        return redirect('login');
    }
}
