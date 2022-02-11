<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    protected $fillable = ['nsurat','penerima','sifat','perihal','tanggal','durasi'];
}
