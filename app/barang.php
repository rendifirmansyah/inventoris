<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    public function dataPinjam()
    {
    	return $this->hasMany('App\peminjam', 'nomorbarang');
    }

    public function dataRusak()
    {
    	return $this->hasMany('App\rusak', 'idbarang');
    }

}
