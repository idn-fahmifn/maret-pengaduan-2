<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';

    protected $casts = ['tanggal_laporan' => 'datetime'];

    protected $fillable = [
        'id_user','judul_laporan', 'jenis', 'tanggal_laporan','dokumentasi','status', 'detail_laporan'
    ];


}
