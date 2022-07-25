<?php

namespace App\Http\Controllers\Sipedi\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sipedi\Pegawai\Pengunjung;

class PengunjungController extends Controller
{
    public function index()
    {
        $data['list_pengunjung'] = Pengunjung::all();
        return view('sipedi.pegawai.pengunjung.index', $data);
    }

    public function create()
    {
        return view('sipedi.pegawai.pengunjung.create');
    }

    public function store(Pengunjung $pengunjung)
    {
        $pengunjung = new pengunjung();
        $pengunjung->id_anggota = request('id_anggota');
        $pengunjung->nama = request('nama');
        $pengunjung->keperluan = request('keperluan');
        $pengunjung->hari = request('hari');
        $pengunjung->tanggal = request('tanggal');
        $pengunjung->save();


        return redirect('pegawai/pengunjung')->with('success','berhasil di tambahkan' );
    }

    public function show(Pengunjung $pengunjung)
    {
        $data['pengunjung'] = $pengunjung;
        return view('sipedi.pegawai.pengunjung.show', $data);
    }

    public function edit(Pengunjung $pengunjung)
    {
        $data['pengunjung'] = $pengunjung;
        return view('sipedi.pegawai.pengunjung.edit', $data);
    }

    public function update(Pengunjung $pengunjung)
    {
        $pengunjung->id_anggota = request('id_anggota');
        $pengunjung->nama = request('nama');
        $pengunjung->keperluan = request('keperluan');
        $pengunjung->hari = request('hari');
        $pengunjung->tanggal = request('tanggal');
        $pengunjung->save();


        return redirect('pegawai/pengunjung');

    }

    public function destroy(Pengunjung $pengunjung)
    {
        $pengunjung->delete();
        return redirect('pegawai/pengunjung');
    }

}
