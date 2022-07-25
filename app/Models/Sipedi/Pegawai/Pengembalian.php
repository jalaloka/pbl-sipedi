<?php

namespace App\Models\Sipedi\Pegawai;

use App\Models\Model;


class Pengembalian extends Model
{
    protected $table ='sipedi__pengembalian';

    public $fillable = ['kode_buku', 'id_anggota'];
}
