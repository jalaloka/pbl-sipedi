<?php

namespace App\Http\Controllers\Sipedi\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\MasterData\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['list_mahasiswa'] = Mahasiswa::all();
        $data['pegawai'] = auth()->user();
        return view('sipedi.pegawai.mahasiswa.index', $data);
    }

    public function create()
    {
        return view('sipedi.pegawai.mahasiswa.create');
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
        // $mahasiswa->foto = $request->file('foto')->store('dataanggota');
        $mahasiswa->save();

        if(request('foto')) $mahasiswa->handleUploadFoto();



        return redirect('pegawai/mahasiswa')->with('success','berhasil di tambahkan' );
    }

    public function show(Mahasiswa $mahasiswa)
    {
        $data['mahasiswa'] = $mahasiswa;
        return view('sipedi.pegawai.mahasiswa.show', $data);
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('pegawai/mahasiswa');
    }
}
