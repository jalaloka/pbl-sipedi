<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Mahasiswa;


class MahasiswaController extends Controller
{
    public function index()
    {
        $data['list_mahasiswa'] = Mahasiswa::all();
        return view('admin.master-data.mahasiswa.index', $data);
    }

    public function create()
    {
        return view('admin/master-data/mahasiswa.create');
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

        if(request('foto')) $mahasiswa->handleUploadFoto();

        return redirect('admin/master-data/mahasiswa')->with('success','berhasil di tambahkan' );
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $data['mahasiswa'] = $mahasiswa;
        return view('admin/master-data/mahasiswa.edit', $data);
    }

    public function update(Mahasiswa $mahasiswa)
    {
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        if (request('password')) $mahasiswa->password = request('password');
        $mahasiswa->save();

        if(request('foto')) $mahasiswa->handleUploadFoto();


        return redirect('admin/master-data/mahasiswa');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        $data['mahasiswa'] = $mahasiswa;
        return view('admin.master-data.mahasiswa.show', $data);
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('admin/master-data/mahasiswa');
    }
}
