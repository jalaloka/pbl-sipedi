<?php

namespace App\Models\Sipedi\Pegawai;

use App\Models\Model;

class Peminjaman extends Model
{
    protected $table ='sipedi__peminjaman';

    public $fillable = ['kode_buku', 'id_anggota'];
}
