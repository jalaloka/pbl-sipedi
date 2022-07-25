<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa\Peminjaman;

class PeminjamanController extends Controller
{
    public function index()
    {
        $data['list_peminjaman'] = Peminjaman::all();
        return view('mahasiswa.peminjaman.index', $data);
    }

    public function create()
    {
        return view('mahasiswa.peminjaman.create');
    }

    public function store()
    {
        $peminjaman = new Peminjaman;
        $peminjaman->kode_buku = request('kode_buku');
        $peminjaman->id_anggota = request('id_anggota');
        $peminjaman->jumlah = request('jumlah');
        $peminjaman->judul = request('judul');
        $peminjaman->nama = request('nama');
        $peminjaman->tanggal_peminjaman = request('tanggal_peminjaman');
        // $peminjaman->email = request('email');
        $peminjaman->batas_pengembalian = request('batas_pengembalian');
        // $peminjaman->denda = request('denda');
        $peminjaman->save();

        return redirect('mahasiswa/peminjaman');

    }

    public function show(Peminjaman $peminjaman)
    {
        $data['peminjaman'] = $peminjaman;
        return view('mahasiswa.peminjaman.show', $data);
    }
}
