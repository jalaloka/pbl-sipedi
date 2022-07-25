<?php

namespace App\Models\Sipedi\Pegawai;

use App\Models\Model;


class Denda extends Model
{
    protected $table ='sipedi__denda';

    public $fillable = ['keterangan'];
}
