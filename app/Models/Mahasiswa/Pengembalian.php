<?php

namespace App\Models\Mahasiswa;

use App\Models\Model;


class Pengembalian extends Model
{
    protected $table ='mahasiswa__pengembalian';

    public $fillable = ['kode_buku', 'judul'];
}
