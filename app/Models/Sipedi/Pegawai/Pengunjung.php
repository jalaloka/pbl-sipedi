<?php

namespace App\Models\Sipedi\Pegawai;

use App\Models\Model;

class Pengunjung extends Model
{
    protected $table ='sipedi__pengunjung';

    public $fillable = ['nama', 'id_anggota'];
}
