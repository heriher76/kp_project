<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $fillable = ['name','email','alamat','tanggal','telp','tujuan', 'snack'];
}
