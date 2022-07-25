<?php

namespace App\Models\Mahasiswa;

use App\Models\Model;


class Peminjaman extends Model
{
    protected $table ='mahasiswa__peminjaman';

    public $fillable = ['kode_buku', 'judul'];
}

