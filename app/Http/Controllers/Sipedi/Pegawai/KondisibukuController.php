<?php

namespace App\Http\Controllers\Sipedi\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sipedi\Pegawai\Kondisibuku;

class KondisibukuController extends Controller
{
    public function index()
    {
        $data['list_kondisibuku'] = Kondisibuku::all();
        return view('sipedi.pegawai.kondisibuku.index', $data);
    }

    public function create()
    {
        return view('sipedi.pegawai.kondisibuku.create');
    }

    public function store(Kondisibuku $kondisibuku)
    {
        $kondisibuku = new kondisibuku();
        $kondisibuku->isbn = request('isbn');
        $kondisibuku->judul = request('judul');
        $kondisibuku->penerbit = request('penerbit');
        $kondisibuku->total_buku = request('total_buku');
        $kondisibuku->buku_bagus = request('buku_bagus');
        $kondisibuku->buku_rusak = request('buku_rusak');
        $kondisibuku->save();


        return redirect('pegawai/kondisibuku')->with('success','berhasil di tambahkan' );
    }

    public function show(Kondisibuku $kondisibuku)
    {
        $data['kondisibuku'] = $kondisibuku;
        return view('sipedi.pegawai.kondisibuku.show', $data);
    }

    public function edit(Kondisibuku $kondisibuku)
    {
        $data['kondisibuku'] = $kondisibuku;
        return view('sipedi.pegawai.kondisibuku.edit', $data);
    }

    public function update(Kondisibuku $kondisibuku)
    {
        $kondisibuku->isbn = request('isbn');
        $kondisibuku->judul = request('judul');
        $kondisibuku->penerbit = request('penerbit');
        $kondisibuku->total_buku = request('total_buku');
        $kondisibuku->buku_bagus = request('buku_bagus');
        $kondisibuku->buku_rusak = request('buku_rusak');
        $kondisibuku->save();


        return redirect('pegawai/kondisibuku');

    }

    public function destroy(Kondisibuku $kondisibuku)
    {
        $kondisibuku->delete();
        return redirect('pegawai/kondisibuku');
    }
}
