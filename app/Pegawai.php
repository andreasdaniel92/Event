<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model {

    protected $table = "pegawai";
    protected $fillable = ['pegawai_nama', 'pegawai_alamat'];

}
