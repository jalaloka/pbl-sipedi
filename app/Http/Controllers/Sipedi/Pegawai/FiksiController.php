<?php

namespace App\Http\Controllers\Sipedi\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sipedi\Pegawai\Fiksi;

class FiksiController extends Controller
{
    public function index()
    {
        $data['list_fiksi'] = Fiksi::all();
        return view('sipedi.pegawai.koleksi-buku.fiksi.index', $data);
    }

    public function create()
    {
        return view('sipedi.pegawai.koleksi-buku.fiksi.create');
    }

    public function store()
    {
        $fiksi = new Fiksi;
        $fiksi->kode_buku = request('kode_buku');
        $fiksi->judul = request('judul');
        $fiksi->penerbit = request('penerbit');
        $fiksi->pengarang = request('pengarang');
        $fiksi->tahun_terbit = request('tahun_terbit');
        $fiksi->lokasi_rak = request('lokasi_rak');
        $fiksi->jumlah_halaman = request('jumlah_halaman');
        $fiksi->jumlah = request('jumlah');
        $fiksi->save();

        $fiksi->handleUploadFoto();

        return redirect('pegawai/koleksi-buku/fiksi');

    }

    public function show(Fiksi $fiksi)
    {
        $data['fiksi'] = $fiksi;
        return view('sipedi.pegawai.koleksi-buku.fiksi.show', $data);
    }

    public function edit(Fiksi $fiksi)
    {
        $data['fiksi'] = $fiksi;
        return view('sipedi.pegawai.koleksi-buku.fiksi.edit', $data);
    }

    public function update(FIksi $fiksi)
    {
        $fiksi->kode_buku = request('kode_buku');
        $fiksi->judul = request('judul');
        $fiksi->penerbit = request('penerbit');
        $fiksi->pengarang = request('pengarang');
        $fiksi->tahun_terbit = request('tahun_terbit');
        $fiksi->lokasi_rak = request('lokasi_rak');
        $fiksi->jumlah_halaman = request('jumlah_halaman');
        $fiksi->jumlah = request('jumlah');
        $fiksi->save();


        return redirect('pegawai/koleksi-buku/fiksi');

    }

    public function destroy(Fiksi $fiksi)
    {
        $fiksi->delete();
        return redirect('pegawai/koleksi-buku/fiksi');
    }
}
