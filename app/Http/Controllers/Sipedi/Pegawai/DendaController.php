<?php

namespace App\Http\Controllers\Sipedi\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sipedi\Pegawai\Denda;

class DendaController extends Controller
{
    public function index()
    {
        $data['list_denda'] = Denda::all();
        return view('sipedi.pegawai.denda.index', $data);
    }

    public function create()
    {
        return view('sipedi.pegawai.denda.create');
    }

    public function store()
    {
        $denda = new Denda;
        $denda->keterangan = request('keterangan');
        $denda->harga = request('harga');
        $denda->save();

        return redirect('pegawai/denda');

    }

    public function edit(Denda $denda)
    {
        $data['denda'] = $denda;
        return view('sipedi.pegawai.denda.edit', $data);
    }

    public function update(Denda $denda)
    {
        $denda->harga = request('harga');
        $denda->save();

        return redirect('pegawai/denda');

    }

    public function destroy(Denda $denda)
    {
        $denda->delete();
        return redirect('pegawai/denda');
    }
}
