<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Mahasiswa\Fiksi;
use App\Models\Sipedi\Pegawai\Fiksi;


class FiksiController extends Controller
{
    public function index()
    {
        $data['list_fiksi'] = Fiksi::all();
        return view('mahasiswa.koleksi-buku.fiksi.index', $data);
    }

    public function create()
    {
        return view('mahasiswa.koleksi-buku.fiksi.create');
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
        // $fiksi->email = request('email');
        $fiksi->jumlah = request('jumlah');
        $fiksi->save();

        $fiksi->handleUploadFoto();

        return redirect('mahasiswa/koleksi-buku/fiksi');

    }

    public function show(Fiksi $fiksi)
    {
        $data['fiksi'] = $fiksi;
        return view('mahasiswa.koleksi-buku.fiksi.show', $data);
    }

}
