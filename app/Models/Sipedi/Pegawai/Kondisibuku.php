<?php

namespace App\Models\Sipedi\Pegawai;

use App\Models\Model;

class Kondisibuku extends Model
{
    protected $table ='sipedi__kondisibuku';

    public $fillable = ['isbn', 'judul'];
}
