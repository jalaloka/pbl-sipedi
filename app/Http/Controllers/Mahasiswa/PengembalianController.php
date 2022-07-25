<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa\Pengembalian;

class PengembalianController extends Controller
{
    public function index()
    {
        $data['list_pengembalian'] = Pengembalian::all();
        return view('mahasiswa.pengembalian.index', $data);
    }

    public function create()
    {
        return view('mahasiswa.pengembalian.create');
    }

    public function store()
    {
        $pengembalian = new Pengembalian;
        $pengembalian->kode_buku = request('kode_buku');
        $pengembalian->id_anggota = request('id_anggota');
        $pengembalian->nama = request('nama');
        $pengembalian->tanggal_peminjaman = request('tanggal_peminjaman');
        $pengembalian->batas_pengembalian = request('batas_pengembalian');
        $pengembalian->tanggal_kembali = request('tanggal_kembali');
        $pengembalian->denda = request('denda');
        $pengembalian->save();

        return redirect('mahasiswa/pengembalian');

    }

    public function show(Pengembalian $pengembalian)
    {
        $data['pengembalian'] = $pengembalian;
        return view('mahasiswa.pengembalian.show', $data);
    }
}
