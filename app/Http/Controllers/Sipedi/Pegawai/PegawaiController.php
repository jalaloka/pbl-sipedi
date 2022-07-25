<?php

namespace App\Http\Controllers\Sipedi\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sipedi\Pegawai\Dashboard;
use App\Models\Admin\MasterData\Mahasiswa;
use App\Models\Sipedi\Pegawai\Fiksi;
use App\Models\Sipedi\Pegawai\Nonfiksi;
use App\Models\Sipedi\Pegawai\Tugasakhir;
use App\Models\Sipedi\Pegawai\Peminjaman;
use App\Models\Sipedi\Pegawai\Pengunjung;

class PegawaiController extends Controller
{
    public function index()
    {
        $jumlah_mahasiswa = Mahasiswa::all()->count();
        $jumlah_fiksi = Fiksi::all()->count();
        $jumlah_nonfiksi = Nonfiksi::all()->count();
        $jumlah_tugasakhir = Tugasakhir::all()->count();
        $jumlah_peminjaman = Peminjaman::all()->count();
        $jumlah_pengunjung = Pengunjung::all()->count();
        $data['list_dashboard'] = Dashboard::all();
        return view('sipedi.pegawai.dashboard',$data)
        ->with('jumlah_mahasiswa', $jumlah_mahasiswa)
        ->with('jumlah_fiksi', $jumlah_fiksi)
        ->with('jumlah_nonfiksi', $jumlah_nonfiksi)
        ->with('jumlah_tugasakhir', $jumlah_tugasakhir)
        ->with('jumlah_peminjaman', $jumlah_peminjaman)
        ->with('jumlah_pengunjung', $jumlah_pengunjung);


    }

    public function create()
    {
        return view('sipedi.pegawai.dashboard.create');
    }

    public function store()
    {
        $dashboard = new Dashboard();
        $dashboard->nama = request('nama');
        $dashboard->save();


        return redirect('pegawai/dashboard')->with('success','berhasil di tambahkan' );
    }

    public function destroy(Dashboard $dashboard)
    {
        $dashboard->delete();
        return redirect('pegawai/dashboard');
    }
}
