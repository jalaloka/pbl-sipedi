<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\MasterData\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['mahasiswa']= auth()->guard('mahasiswa')->user();
        return view('profile.mahasiswa.index', $data);
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $data['mahasiswa'] = $mahasiswa;
        return view('profile.mahasiswa.edit', $data);
    }

    public function update(Mahasiswa $mahasiswa)
    {
        $mahasiswa->alamat = request('alamat');
        $mahasiswa->telepon = request('telepon');
        $mahasiswa->prodi = request('prodi');
        // if (request('password')) $mahasiswa->password = request('password');
        $mahasiswa->save();

        if(request('foto')) $mahasiswa->handleUploadFoto();

        return redirect('profile/mahasiswa');
    }
}
