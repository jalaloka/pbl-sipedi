<?php

namespace App\Models\Sipedi\pegawai;

use App\Models\Model;
use Illuminate\Support\Str;

class Fiksi extends Model
{
    protected $table ='sipedi__fiksi';

    public $fillable = ['kode_buku', 'judul'];

    function handleUploadFoto()
    {
        $this->handleDelete();
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/fiksi";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save();
        }
    }

    function handleDelete()
    {
        $foto = $this->foto;
        if($foto){
            $path = public_path($foto);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
