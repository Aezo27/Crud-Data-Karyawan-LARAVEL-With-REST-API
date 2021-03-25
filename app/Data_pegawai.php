<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_pegawai extends Model
{
    protected $fillable = ["nama", "nip", "alamat", "jenis_kelamin", "divisi"];
}
