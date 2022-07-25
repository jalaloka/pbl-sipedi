<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sipedi\Pegawai\Nonfiksi;

class NonfiksiController extends Controller
{
    public function index()
    {
        $data['list_nonfiksi'] = Nonfiksi::all();
        return view('mahasiswa.koleksi-buku.nonfiksi.index', $data);
    }

    public function create()
    {
        return view('mahasiswa.koleksi-buku.nonfiksi.create');
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
        // $nonfiksi->email = request('email');
        $nonfiksi->jumlah = request('jumlah');
        $nonfiksi->save();

        $nonfiksi->handleUploadFoto();


        return redirect('mahasiswa/koleksi-buku/nonfiksi');

    }

    public function show(Nonfiksi $nonfiksi)
    {
        $data['nonfiksi'] = $nonfiksi;
        return view('mahasiswa.koleksi-buku.nonfiksi.show', $data);
    }

}
