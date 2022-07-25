<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Pegawai;


class PegawaiController extends Controller
{
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.master-data.pegawai.index', $data);
    }

    public function create()
    {
        return view('admin.master-data.pegawai.create');
    }

    public function store(Pegawai $pegawai)
    {
        $pegawai = new pegawai;
        $pegawai->nip = request('nip');
        $pegawai->nama = request('nama');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->agama = request('agama');
        $pegawai->alamat = request('alamat');
        $pegawai->email = request('email');
        $pegawai->username = request('username');
        $pegawai->telepon = request('telepon');
        if (request('password')) $pegawai->password = request('password');
        $pegawai->save();

        $pegawai->handleUploadFoto();

        return redirect('admin/master-data/pegawai');

    }

    public function show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.master-data.pegawai.show', $data);
    }

    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.master-data.pegawai.edit', $data);
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

        return redirect('admin/master-data/pegawai');

    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect('admin/master-data/pegawai');
    }
}
