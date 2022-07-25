<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sipedi\Pegawai\Tugasakhir;

class TugasakhirController extends Controller
{
    public function index()
    {
        $data['list_tugasakhir'] = Tugasakhir::all();
        return view('mahasiswa.koleksi-buku.tugas-akhir.index', $data);
    }

    public function create()
    {
        return view('mahasiswa.koleksi-buku.tugas-akhir.create');
    }

    public function store()
    {
        $tugasakhir = new Tugasakhir;
        $tugasakhir->judul = request('judul');
        $tugasakhir->penulis = request('penulis');
        $tugasakhir->penerbit = request('penerbit');
        $tugasakhir->tahun_terbit = request('tahun_terbit');
        $tugasakhir->lokasi_rak = request('lokasi_rak');
        $tugasakhir->jumlah_halaman = request('jumlah_halaman');
        $tugasakhir->save();

        $tugasakhir->handleUploadFoto();

        return redirect('mahasiswa/koleksi-buku/tugas-akhir');

    }

    public function show(Tugasakhir $tugasakhir)
    {
        $data['tugasakhir'] = $tugasakhir;
        return view('mahasiswa.koleksi-buku.tugas-akhir.show', $data);
    }

    // public function edit(tugasakhir $tugasakhir)
    // {
    //     $data['tugasakhir'] = $tugasakhir;
    //     return view('mahasiswa.koleksi-buku.tugas-akhir.edit', $data);
    // }

    // public function update(Tugasakhir $tugasakhir)
    // {
    //     $tugasakhir->judul = request('judul');
    //     $tugasakhir->penulis = request('penulis');
    //     $tugasakhir->penerbit = request('penerbit');
    //     $tugasakhir->tahun_terbit = request('tahun_terbit');
    //     $tugasakhir->lokasi_rak = request('lokasi_rak');
    //     $tugasakhir->jumlah_halaman = request('jumlah_halaman');
    //     $tugasakhir->save();


    //     return redirect('mahasiswa/koleksi-buku/tugas-akhir');

    // }

    // public function destroy(Tugasakhir $tugasakhir)
    // {
    //     $tugasakhir->delete();
    //     return redirect('mahasiswa/koleksi-buku/tugas-akhir');
    // }
}
