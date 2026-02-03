<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    //
    public $timestamps = false; 

    protected $fillable = [
        'deskripsi_aplikasi',
        'versi_aplikasi',
        'tanggal_dibuat',
    ];
}
