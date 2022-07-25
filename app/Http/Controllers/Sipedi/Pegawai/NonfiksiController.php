<?php

namespace App\Http\Controllers\Sipedi\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sipedi\Pegawai\Nonfiksi;

class NonfiksiController extends Controller
{
    public function index()
    {
        $data['list_nonfiksi'] = Nonfiksi::all();
        return view('sipedi.pegawai.koleksi-buku.nonfiksi.index', $data);
    }

    public function create()
    {
        return view('sipedi.pegawai.koleksi-buku.nonfiksi.create');
    }

    public function store()
    {
        $nonfiksi = new Nonfiksi;
        $nonfiksi->kode_buku = request('kode_buku');
        $nonfiksi->judul = request('judul');
        $nonfiksi->penerbit = request('penerbit');
        $nonfiksi->pengarang = request('pengarang');
        $nonfiksi->tahun_terbit = request('tahun_terbit');
        $nonfiksi->lokasi_rak = request('lokasi_rak');
        $nonfiksi->jumlah_halaman = request('jumlah_halaman');
        $nonfiksi->jumlah = request('jumlah');
        $nonfiksi->save();

        $nonfiksi->handleUploadFoto();

        return redirect('pegawai/koleksi-buku/nonfiksi');

    }

    public function show(Nonfiksi $nonfiksi)
    {
        $data['nonfiksi'] = $nonfiksi;
        return view('sipedi.pegawai.koleksi-buku.nonfiksi.show', $data);
    }

    public function edit(Nonfiksi $nonfiksi)
    {
        $data['nonfiksi'] = $nonfiksi;
        return view('sipedi.pegawai.koleksi-buku.nonfiksi.edit', $data);
    }

    public function update(NonfIksi $nonfiksi)
    {
        $nonfiksi->kode_buku = request('kode_buku');
        $nonfiksi->judul = request('judul');
        $nonfiksi->penerbit = request('penerbit');
        $nonfiksi->pengarang = request('pengarang');
        $nonfiksi->tahun_terbit = request('tahun_terbit');
        $nonfiksi->lokasi_rak = request('lokasi_rak');
        $nonfiksi->jumlah_halaman = request('jumlah_halaman');
        $nonfiksi->jumlah = request('jumlah');
        $nonfiksi->save();


        return redirect('pegawai/koleksi-buku/nonfiksi');

    }

    public function destroy(Nonfiksi $nonfiksi)
    {
        $nonfiksi->delete();
        return redirect('pegawai/koleksi-buku/nonfiksi');
    }
}
