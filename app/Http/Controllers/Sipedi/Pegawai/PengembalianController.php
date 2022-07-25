<?php

namespace App\Http\Controllers\Sipedi\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sipedi\Pegawai\Pengembalian;

class PengembalianController extends Controller
{
    public function index()
    {
        $data['list_pengembalian'] = Pengembalian::all();
        return view('sipedi.pegawai.pengembalian.index', $data);
    }

    public function create()
    {
        return view('sipedi.pegawai.pengembalian.create');
    }

    public function store(Pengembalian $pengembalian)
    {
        $pengembalian = new pengembalian();
        $pengembalian->kode_buku = request('kode_buku');
        $pengembalian->judul = request('judul');
        $pengembalian->id_anggota = request('id_anggota');
        $pengembalian->nama = request('nama');
        $pengembalian->tanggal_peminjaman = request('tanggal_peminjaman');
        $pengembalian->batas_pengembalian = request('batas_pengembalian');
        $pengembalian->tanggal_kembali = request('tanggal_kembali');
        $pengembalian->denda = request('denda');
        $pengembalian->save();


        return redirect('pegawai/pengembalian')->with('success','berhasil di tambahkan' );
    }

    public function show(Pengembalian $pengembalian)
    {
        $data['pengembalian'] = $pengembalian;
        return view('sipedi.pegawai.pengembalian.show', $data);
    }

    public function edit(Pengembalian $pengembalian)
    {
        $data['pengembalian'] = $pengembalian;
        return view('sipedi.pegawai.pengembalian.edit', $data);
    }

    public function update(Pengembalian $pengembalian)
    {
        $pengembalian->kode_buku = request('kode_buku');
        $pengembalian->judul = request('judul');
        $pengembalian->id_anggota = request('id_anggota');
        $pengembalian->nama = request('nama');
        $pengembalian->tanggal_peminjaman = request('tanggal_peminjaman');
        $pengembalian->batas_pengembalian = request('batas_pengembalian');
        $pengembalian->tanggal_kembali = request('tanggal_kembali');
        $pengembalian->denda = request('denda');
        $pengembalian->save();


        return redirect('pegawai/pengembalian');

    }

    public function destroy(Pengembalian $pengembalian)
    {
        $pengembalian->delete();
        return redirect('pegawai/pengembalian');
    }
}
