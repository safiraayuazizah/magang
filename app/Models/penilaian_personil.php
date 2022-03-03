<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class penilaian_personil extends Model
{

    use softDeletes ;
    protected $table = 'penilaian_personils';
    protected $fillable =[
        'nama_personil',
        'etika',
        'disiplin',
        'tanggung_jawab',
        'teamwork',
        'problem_solve',
        'kepatuhan',
        'kejujuran',
        'inisiatif',
        'komunikasi',
    ];
    protected $hidden;
}
