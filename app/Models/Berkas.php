<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    protected $table = 'berkas';
    
    protected $fillable = [
        'id_users', 
        'ijazah',
        'transkip_nilai',
        'penilaian_prestasi_kerja',
        'jadwal_pendidikan',  
    ];
}
