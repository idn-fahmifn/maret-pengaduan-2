<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respon extends Model
{
    protected $table= 'respon';
    protected $fillable=[
        'id_laporan', 'judul_respon', 'isi_respon', 'tanggal_respon'
    ];
    public function laporan()
    {
        return $this->belongsTo(Laporan::class, 'id_laporan');
    }
}
