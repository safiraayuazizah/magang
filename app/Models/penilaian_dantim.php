<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class penilaian_dantim extends Model
{
    use softDeletes ;
    protected $table = 'penilaian_dantims';
    protected $fillable =[
        'nama_dantim',
        'etika',
        'disiplin',
        'tanggung_jawab',
        'perencanaan',
        'teamwork',
        'kepemimpinan',
        'problem_solve',
        'inovasi',
        'analisa_pemikiran',

        'kejujuran',
    ];
    protected $hidden;
}
