<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $fillable = ['name','email','alamat','tanggal','telp','tujuan', 'foto'];
}
