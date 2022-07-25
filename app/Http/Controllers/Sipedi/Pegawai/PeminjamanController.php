<?php

namespace App\Http\Controllers\Sipedi\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sipedi\Pegawai\Peminjaman;

class PeminjamanController extends Controller
{
    public function index()
    {
        $data['list_peminjaman'] = Peminjaman::all();
        return view('sipedi.pegawai.peminjaman.index', $data);
    }

    public function create()
    {
        return view('sipedi.pegawai.peminjaman.create');
    }

    public function store(Peminjaman $peminjaman)
    {
        $peminjaman = new peminjaman();
        $peminjaman->kode_buku = request('kode_buku');
        $peminjaman->id_anggota = request('id_anggota');
        $peminjaman->jumlah = request('jumlah');
        $peminjaman->judul = request('judul');
        $peminjaman->nama = request('nama');
        $peminjaman->tanggal_peminjaman = request('tanggal_peminjaman');
        $peminjaman->batas_pengembalian = request('batas_pengembalian');
        $peminjaman->save();


        return redirect('pegawai/peminjaman')->with('success','berhasil di tambahkan' );
    }

    public function show(Peminjaman $peminjaman)
    {
        $data['peminjaman'] = $peminjaman;
        return view('sipedi.pegawai.peminjaman.show', $data);
    }

    public function edit(Peminjaman $peminjaman)
    {
        $data['peminjaman'] = $peminjaman;
        return view('sipedi.pegawai.peminjaman.edit', $data);
    }

    public function update(Peminjaman $peminjaman)
    {
        $peminjaman->kode_buku = request('kode_buku');
        $peminjaman->id_anggota = request('id_anggota');
        $peminjaman->jumlah = request('jumlah');
        $peminjaman->judul = request('judul');
        $peminjaman->nama = request('nama');
        $peminjaman->tanggal_peminjaman = request('tanggal_peminjaman');
        $peminjaman->batas_pengembalian = request('batas_pengembalian');
        $peminjaman->save();


        return redirect('pegawai/peminjaman');

    }

    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();
        return redirect('pegawai/peminjaman');
    }
}
