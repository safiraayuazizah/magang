<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class penilaian_umum extends Model
{
    use softDeletes ;
    protected $table = 'penilaian_umums';
    protected $fillable =[
        'judul_acara',
        'tanggal',
        'waktu',
        'tempat',
        'nama_penilai',
        'jabatan',
        'Etika',
        'Disiplin',
        'Tanggung_jawab',
        'kerjasama',
        'pemecahan_masalah',
        'kepatuhan',
        'kejujuran',
        'inisiatif',
        'komunikasi',

        
    ];

    protected $hidden;
}
